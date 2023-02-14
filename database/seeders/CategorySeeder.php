<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        $categories=['Eğlence','Gezi','Spor','Sağlık','Teknoloji','Günlük Yaşam'];
        foreach($categories as $category){
                DB::table('categories')->insert([
                    'name'=>$category,
                    'slug'=>Str::slug($category),
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
        }
    }
}
