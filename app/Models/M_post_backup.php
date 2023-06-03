<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class M_post
{
    private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
