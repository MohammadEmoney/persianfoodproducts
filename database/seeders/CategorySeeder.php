<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array('id' => '1','name' => 'Distillate','slug' => 'distillate','_lft' => '7','_rgt' => '8','parent_id' => NULL,'description' => NULL,'names' => '{"fa":"\\u0639\\u0631\\u0642\\u06cc\\u062c\\u0627\\u062a","it":"Distillato"}','is_active' => '1','created_at' => '2023-02-18 13:06:25','updated_at' => '2023-02-18 13:06:25'),
            array('id' => '2','name' => 'Dried Fruits','slug' => 'dried-fruits','_lft' => '9','_rgt' => '10','parent_id' => NULL,'description' => NULL,'names' => '{"fa":"\\u0645\\u06cc\\u0648\\u0647 \\u0647\\u0627\\u06cc \\u062e\\u0634\\u06a9","it":"Frutta secca"}','is_active' => '1','created_at' => '2023-02-18 13:07:17','updated_at' => '2023-02-18 13:07:17'),
            array('id' => '3','name' => 'Herbs','slug' => 'herbs','_lft' => '11','_rgt' => '12','parent_id' => NULL,'description' => NULL,'names' => '{"fa":"\\u06af\\u06cc\\u0627\\u0647\\u0627\\u0646","it":"erbe aromatiche"}','is_active' => '1','created_at' => '2023-02-18 13:10:09','updated_at' => '2023-02-18 13:10:09'),
            array('id' => '4','name' => 'Spices','slug' => 'spices','_lft' => '13','_rgt' => '14','parent_id' => NULL,'description' => NULL,'names' => '{"fa":"\\u0627\\u062f\\u0648\\u06cc\\u0647 \\u0647\\u0627","it":"Spezie"}','is_active' => '1','created_at' => '2023-02-18 13:10:57','updated_at' => '2023-02-18 13:10:57')
          );

          DB::table('categories')->insert($categories);

    }
}
