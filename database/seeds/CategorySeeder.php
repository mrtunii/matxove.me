<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new \App\Models\Category();
        $cat->name = 'სამშენებლო ხელსაწყოები';
        $cat->logo = 'https://cdn2.iconfinder.com/data/icons/toolix-circular/125/lumber_axe_tool_workshop_DIY-512.png';
        $cat->save();

        $cat = new \App\Models\Category();
        $cat->name = 'წიგნები';
        $cat->logo = 'https://s-media-cache-ak0.pinimg.com/originals/7d/da/38/7dda385ed3724fea700d45a0349d9e77.png';
        $cat->save();

        $cat = new \App\Models\Category();
        $cat->name = 'სპორტული აქესესუარები';
        $cat->logo = 'https://cdn0.iconfinder.com/data/icons/sports-and-fitness-flat-colorful-icons-svg/137/Sports_flat_round_colorful_simple_activities_athletic_colored-03-512.png';
        $cat->save();

        $cat = new \App\Models\Category();
        $cat->name = 'სასკოლო ნივთები';
        $cat->logo = 'https://cdn2.iconfinder.com/data/icons/bubble-education-icons-1/360/Backpack-512.png';
        $cat->save();

    }
}
