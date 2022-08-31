<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // public static function getData() {
    //     return [
    //         ['id' => 1, 'name' => 'Interesting theory', 'description' => 'I think the big bang theory is very interesting.', 'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6f/CMB_Timeline300_no_WMAP.jpg'],
    //         ['id' => 2, 'name' => 'The record for the longest cat ever is 48.5 inches', 'description' => 'Domestic cats are usually considered to be quite small and dainty creatures. But did you know the world’s longest cat was a Maine Coon called Stewie, and was measured at 48.5 inches? Whereas, the record for the tallest cat belonged to Arcturus at a whopping 19.05 inches tall! Those are some big cats.', 'image' => 'https://idsb.tmgrup.com.tr/ly/uploads/images/2021/09/08/thumbs/800x531/142774.jpg'],
    //         ['id' => 3, 'name' => 'Explorer', 'description' => 'Where has thou gone? Nowhere? It has been this way.', 'image' => 'https://blog.kakaocdn.net/dn/3mZLi/btqDNmxLE7J/ECehLAdSCHTEift0vhVX2k/img.jpg'],
    //     ];
    // }
    protected $fillable = ["name", "description", "file_path", "created_at", "updated_at"];
}
