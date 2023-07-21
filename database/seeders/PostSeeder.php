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
        \DB::table('posts')->delete();
		\DB::table('posts')->insert([
		'name' => 'บทความที่ 1',
		'slug' => 'example-1',
		'detail' => 'บทความที่ 1 Ullamco incididunt officia ea consectetur et elit Lorem qui proident. Fugiat cillum aute laborum dolor aliquip enim minim culpa anim veniam in do irure occaecat. Velit et pariatur est tempor et exercitation veniam consequat.',
		'image' => 'p-1.jpg',
		'status' => 'active',
		'created_at' => date('Y-m-d H:i:s'),
		'updated_at' => date('Y-m-d H:i:s')
        ]);
        \DB::table('posts')->insert([
        'name' => 'บทความที่ 2',
        'slug' => 'example-2',
        'detail' => 'บทความที่ 2 Ullamco incididunt officia ea consectetur et elit Lorem qui proident. Fugiat cillum aute laborum dolor aliquip enim minim culpa anim veniam in do irure occaecat. Velit et pariatur est tempor et exercitation veniam consequat.',
        'image' => 'p-2.jpg',
        'status' => 'active',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ],);
        
    }
}
