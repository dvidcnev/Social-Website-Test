<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Requests\PostValidation;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    
    // public function getData() {
    //     // return [
    //     //     ['id' => 1, 'name' => 'Amercan Standard Strat', 'brand' => 'Fender'],
    //     //     ['id' => 2, 'name' => 'Starla S2', 'brand' => 'PRS'],
    //     //     ['id' => 3, 'name' => 'Explorer', 'brand' => 'Gibson'],
    //     //     ['id' => 4, 'name' => 'Talman Ukulele', 'brand' => 'Ibanez'],
    //     //     ['id' => 5, 'name' => 'Aktion Electric', 'brand' => 'Frisky'],
    //     //     ['id' => 6, 'name' => 'Freshdo Standard', 'brand' => 'Anslor'],
    //     //     ['id' => 7, 'name' => 'Alnigh differnt', 'brand' => 'Kayt'],
    //     //     ['id' => 8, 'name' => 'One way Bleedos', 'brand' => 'Dayiko'],
    //     // ];
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required',
        ]);

        $request->validate([
            'description' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('pictures', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $post = new Post([
                "name" => $request->get('name'),
                "description" => $request->get('description'),
                "file_path" => $request->file->hashName()
            ]);
            $post->save(); // Finally, save the record.
        }

        return view('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id) {
    //     $posts = self::all();
    //     $number = (int)$id;
    //     return $posts[$number-1];
    // }
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostValidation $request, Post $post)
    {
        $data = $request->validated();

        if ($request->hasFile('file')) {
        $request->file->store('pictures', 'public');
        $root = $data['file']->hashName();
        $post->file_path = $root;
        }

        $post->name = $data['name'];
        $post->description = $data['description'];

        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
