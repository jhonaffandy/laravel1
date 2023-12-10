<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Johan Afandy',
            'username' => 'joe.affandy',
            'email' => 'joe.affandy@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // User::create([
        //     'name' => 'Sandhika galih',
        //     'email' => 'sandhika@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui quibusdam, sed nulla tempora ab ut quas accusamus laborum fugit voluptatum!',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ducimus praesentium quibusdam commodi pariatur architecto beatae provident, ullam ratione consectetur amet vitae tempore eos laborum illo placeat perferendis quas consequatur voluptatum accusamus nulla esse quos? Tempora ad ipsum ipsam id, quibusdam sed nisi quisquam maxime sequi libero architecto, suscipit incidunt provident laudantium harum fuga in.</p><p>harum libero distinctio delectus, optio id eum ex rerum cumque corrupti, doloremque iure commodi et aut error odit rem doloribus nobis non quibusdam hic? Blanditiis earum voluptatem dolorum non aspernatur impedit ut quod culpa veniam qui est, asperiores unde quos tenetur dolorem facilis distinctio consectetur velit. Optio dolore officia fuga iste non laborum praesentium vero quaerat harum nam quae aliquam aperiam distinctio deserunt id doloremque dicta hic, reiciendis nobis?</p><>Repudiandae, expedita magni quam ad soluta fugit excepturi culpa recusandae aspernatur et illo exercitationem, animi libero commodi quod vitae rerum veritatis tempore dolore! Facere porro eaque laborum odit debitis consequuntur doloribus fuga labore delectus ad saepe praesentium maiores voluptates temporibus iste cumque culpa nobis et hic asperiores excepturi, velit expedita sint in! Reprehenderit non debitis quisquam exercitationem, qui excepturi explicabo iusto, minima iure amet incidunt dolorem expedita. Quidem accusantium officiis cum architecto. Non, libero impedit?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui quibusdam, sed nulla tempora ab ut quas accusamus laborum fugit voluptatum!',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ducimus praesentium quibusdam commodi pariatur architecto beatae provident, ullam ratione consectetur amet vitae tempore eos laborum illo placeat perferendis quas consequatur voluptatum accusamus nulla esse quos? Tempora ad ipsum ipsam id, quibusdam sed nisi quisquam maxime sequi libero architecto, suscipit incidunt provident laudantium harum fuga in.</p><p>harum libero distinctio delectus, optio id eum ex rerum cumque corrupti, doloremque iure commodi et aut error odit rem doloribus nobis non quibusdam hic? Blanditiis earum voluptatem dolorum non aspernatur impedit ut quod culpa veniam qui est, asperiores unde quos tenetur dolorem facilis distinctio consectetur velit. Optio dolore officia fuga iste non laborum praesentium vero quaerat harum nam quae aliquam aperiam distinctio deserunt id doloremque dicta hic, reiciendis nobis?</p><>Repudiandae, expedita magni quam ad soluta fugit excepturi culpa recusandae aspernatur et illo exercitationem, animi libero commodi quod vitae rerum veritatis tempore dolore! Facere porro eaque laborum odit debitis consequuntur doloribus fuga labore delectus ad saepe praesentium maiores voluptates temporibus iste cumque culpa nobis et hic asperiores excepturi, velit expedita sint in! Reprehenderit non debitis quisquam exercitationem, qui excepturi explicabo iusto, minima iure amet incidunt dolorem expedita. Quidem accusantium officiis cum architecto. Non, libero impedit?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui quibusdam, sed nulla tempora ab ut quas accusamus laborum fugit voluptatum!',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ducimus praesentium quibusdam commodi pariatur architecto beatae provident, ullam ratione consectetur amet vitae tempore eos laborum illo placeat perferendis quas consequatur voluptatum accusamus nulla esse quos? Tempora ad ipsum ipsam id, quibusdam sed nisi quisquam maxime sequi libero architecto, suscipit incidunt provident laudantium harum fuga in.</p><p>harum libero distinctio delectus, optio id eum ex rerum cumque corrupti, doloremque iure commodi et aut error odit rem doloribus nobis non quibusdam hic? Blanditiis earum voluptatem dolorum non aspernatur impedit ut quod culpa veniam qui est, asperiores unde quos tenetur dolorem facilis distinctio consectetur velit. Optio dolore officia fuga iste non laborum praesentium vero quaerat harum nam quae aliquam aperiam distinctio deserunt id doloremque dicta hic, reiciendis nobis?</p><>Repudiandae, expedita magni quam ad soluta fugit excepturi culpa recusandae aspernatur et illo exercitationem, animi libero commodi quod vitae rerum veritatis tempore dolore! Facere porro eaque laborum odit debitis consequuntur doloribus fuga labore delectus ad saepe praesentium maiores voluptates temporibus iste cumque culpa nobis et hic asperiores excepturi, velit expedita sint in! Reprehenderit non debitis quisquam exercitationem, qui excepturi explicabo iusto, minima iure amet incidunt dolorem expedita. Quidem accusantium officiis cum architecto. Non, libero impedit?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-4mpat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui quibusdam, sed nulla tempora ab ut quas accusamus laborum fugit voluptatum!',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ducimus praesentium quibusdam commodi pariatur architecto beatae provident, ullam ratione consectetur amet vitae tempore eos laborum illo placeat perferendis quas consequatur voluptatum accusamus nulla esse quos? Tempora ad ipsum ipsam id, quibusdam sed nisi quisquam maxime sequi libero architecto, suscipit incidunt provident laudantium harum fuga in.</p><p>harum libero distinctio delectus, optio id eum ex rerum cumque corrupti, doloremque iure commodi et aut error odit rem doloribus nobis non quibusdam hic? Blanditiis earum voluptatem dolorum non aspernatur impedit ut quod culpa veniam qui est, asperiores unde quos tenetur dolorem facilis distinctio consectetur velit. Optio dolore officia fuga iste non laborum praesentium vero quaerat harum nam quae aliquam aperiam distinctio deserunt id doloremque dicta hic, reiciendis nobis?</p><>Repudiandae, expedita magni quam ad soluta fugit excepturi culpa recusandae aspernatur et illo exercitationem, animi libero commodi quod vitae rerum veritatis tempore dolore! Facere porro eaque laborum odit debitis consequuntur doloribus fuga labore delectus ad saepe praesentium maiores voluptates temporibus iste cumque culpa nobis et hic asperiores excepturi, velit expedita sint in! Reprehenderit non debitis quisquam exercitationem, qui excepturi explicabo iusto, minima iure amet incidunt dolorem expedita. Quidem accusantium officiis cum architecto. Non, libero impedit?</p>'
        // ]);
    }
}
