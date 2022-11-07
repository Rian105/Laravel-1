<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Oliver Rian Setiono",
        "email" => "ForTugas1@gmail.com",
        "image" => "anime.jpg"
    ]);
});

Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Oliver Rian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptatibus in molestiae odit, eveniet sunt eligendi odio temporibus natus quod tempora accusantium delectus ipsum"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "J.K. Rownling",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint minus aut nisi, fugiat, libero magnam sit reprehenderit, hic laudantium rem tenetur nulla deleniti labore nobis amet numquam iure qui modi iusto? "
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts

    ]);
});

//Halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judus Post Pertama",
            "slug" => "first-post",
            "author" => "Oliver Rian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptatibus in molestiae odit, eveniet sunt eligendi odio temporibus natus quod tempora accusantium delectus ipsum, expedita commodi repellendus nobis quisquam exercitationem atque iusto est velit! Sunt dolores accusamus deserunt corrupti rem a, incidunt natus maxime eius, quaerat odio obcaecati vel recusandae expedita error exercitationem, quas saepe. Dicta fugit nemo voluptate vitae nisi omnis voluptas, minus repellendus, inventore consequatur adipisci dolorem quo nam sit neque enim sunt molestiae soluta aut ea quas!"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "J.K. Rownling",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint minus aut nisi, fugiat, libero magnam sit reprehenderit, hic laudantium rem tenetur nulla deleniti labore nobis amet numquam iure qui modi iusto? Quisquam blanditiis inventore doloremque eius aliquid minima sint laudantium, dolores incidunt totam sapiente consectetur optio quod saepe molestiae sed dolorem quidem iste enim, iure quos temporibus laboriosam velit suscipit? Consequuntur ad quasi quia ducimus itaque sunt doloremque amet tenetur dicta? Culpa vitae, minima blanditiis est fuga, repellendus quis laboriosam dignissimos, animi aliquid inventore dolore porro placeat quasi aliquam corporis. Accusantium, repudiandae. Necessitatibus, quam id architecto error natus aliquam voluptatem!"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});