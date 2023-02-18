<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count=0;
        foreach($pages as $page){
            $count++;
                DB::table('pages')->insert([
                    'title'=>$page,
                    'slug'=>Str::slug($page),
                    'order'=>$count,
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR9HmobQ80Vd39tfNOaaDoe1V-mf0u6dN3qA&usqp=CAU',
                    'content'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae perferendis facilis ipsum consequuntur cum doloremque vel iure similique voluptatem accusamus, totam alias aperiam nulla accusantium voluptas! Cumque magni eius culpa?',
                    'created_at'=>now(),
                    'updated_at'=>now()
                ]);
        }
    }
}
