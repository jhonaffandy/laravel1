<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
        "name" => "Johan",
        "email" => "johan@jmail.com",
        "image" => "botol.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "joe",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nihil doloremque dolores sed totam quidem quo at exercitationem vero enim in, ab delectus dolorem, distinctio incidunt soluta voluptates quibusdam laudantium. Enim velit perspiciatis ipsa saepe doloremque, magnam praesentium, corrupti iure sint excepturi obcaecati est maiores reiciendis ipsum ad quia molestiae dolor odio laborum eligendi recusandae deserunt voluptas! Cumque magni iure eius beatae ratione. At tenetur aut repellat architecto et iste voluptatibus asperiores, deserunt fuga saepe! Vero veniam quo fugiat harum inventore nihil voluptatem provident culpa, libero molestiae, distinctio obcaecati aliquam doloremque beatae iusto? Iste nostrum sit, laborum cumque, veritatis illo exercitationem, consequatur architecto aspernatur ab ullam quaerat! Nesciunt modi commodi sunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "messia",
            "body" => "Enim vitae omnis velit minima reprehenderit, architecto quod ratione perspiciatis, illum autem fugiat nam quisquam quaerat sapiente quibusdam ullam laboriosam unde assumenda esse harum error! Est, ex, deleniti placeat quaerat eveniet id doloribus voluptate exercitationem, pariatur nisi eos ut itaque rem eum. Harum enim consectetur saepe? Voluptas illum iusto eaque doloribus reiciendis dolorum neque, incidunt autem repellat cupiditate ullam! Culpa provident eveniet est corporis nulla accusamus quo molestiae! Commodi blanditiis sunt deserunt sit accusantium similique et nulla eaque error cupiditate ipsum soluta quas ipsam iusto, dolores omnis. Rerum, ex?"
        ],

    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post,
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "joe",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nihil doloremque dolores sed totam quidem quo at exercitationem vero enim in, ab delectus dolorem, distinctio incidunt soluta voluptates quibusdam laudantium. Enim velit perspiciatis ipsa saepe doloremque, magnam praesentium, corrupti iure sint excepturi obcaecati est maiores reiciendis ipsum ad quia molestiae dolor odio laborum eligendi recusandae deserunt voluptas! Cumque magni iure eius beatae ratione. At tenetur aut repellat architecto et iste voluptatibus asperiores, deserunt fuga saepe! Vero veniam quo fugiat harum inventore nihil voluptatem provident culpa, libero molestiae, distinctio obcaecati aliquam doloremque beatae iusto? Iste nostrum sit, laborum cumque, veritatis illo exercitationem, consequatur architecto aspernatur ab ullam quaerat! Nesciunt modi commodi sunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "messia",
            "body" => "Enim vitae omnis velit minima reprehenderit, architecto quod ratione perspiciatis, illum autem fugiat nam quisquam quaerat sapiente quibusdam ullam laboriosam unde assumenda esse harum error! Est, ex, deleniti placeat quaerat eveniet id doloribus voluptate exercitationem, pariatur nisi eos ut itaque rem eum. Harum enim consectetur saepe? Voluptas illum iusto eaque doloribus reiciendis dolorum neque, incidunt autem repellat cupiditate ullam! Culpa provident eveniet est corporis nulla accusamus quo molestiae! Commodi blanditiis sunt deserunt sit accusantium similique et nulla eaque error cupiditate ipsum soluta quas ipsam iusto, dolores omnis. Rerum, ex?"
        ],

    ];

    $new_post = [];

    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});
