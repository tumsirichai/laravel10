<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \DB::table('posts')->delete();
		\DB::table('posts')->insert([
		'name' => 'บทความ'.\Str::random(50),
		'slug' => \Str::random(10).'-'.\Str::random(10).'example-'.\Str::random(10),
		'detail' => 'Ullamco incididunt officia ea consectetur et elit Lorem qui proident. Fugiat cillum aute laborum dolor aliquip enim minim culpa anim veniam in do irure occaecat. Velit et pariatur est tempor et exercitation veniam consequat.'.\Str::random(1000),
		'image' => \Str::random(10).'.jpg',
		'status' => 'active',
		'created_at' => date('Y-m-d H:i:s'),
		'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
