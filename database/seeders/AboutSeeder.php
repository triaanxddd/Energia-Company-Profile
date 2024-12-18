<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Test User',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, autem ut rem dolor error neque. Voluptate reprehenderit cupiditate quasi necessitatibus a dicta provident neque tempore enim placeat maiores atque minima eius quas, aspernatur illo at, asperiores id voluptatum impedit. Nostrum quam blanditiis, aliquid, corrupti maiores cum aliquam animi iusto ex fugiat dignissimos perspiciatis minima beatae accusamus reprehenderit deserunt, est alias aspernatur hic atque sit asperiores. Necessitatibus nam ratione iure illum blanditiis pariatur possimus libero velit minima debitis? Maxime, error. Minima dolore harum delectus adipisci illo earum ad neque similique beatae voluptates ea accusamus placeat officiis cum eligendi error aliquam totam molestiae ipsam non, corporis dolor quae! Quas facere odio vitae praesentium omnis consectetur assumenda quam officiis aspernatur, optio corporis dolorem a rem. Facere similique, asperiores, animi ipsa, perferendis tempora praesentium laboriosam culpa odio sit ipsam fugiat alias quasi illum modi dolores aspernatur consectetur. Quae unde ipsam ipsa autem enim hic cum eveniet, natus, voluptates nesciunt facilis, vel voluptatum esse quaerat magni? Omnis consequatur beatae, tempore nam ullam dolores, impedit culpa maiores et optio soluta deserunt iste quo. Voluptatum tenetur modi voluptates magnam dolor quasi saepe libero dolorem officiis pariatur deleniti, ea veritatis fuga itaque laborum mollitia minus explicabo excepturi obcaecati!',
        ]);
    }
}
