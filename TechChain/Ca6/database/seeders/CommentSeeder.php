<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::insert([
            [
                'user_id'=>1,
                'product_id'=>1,
                'content'=>'cai nay xin vai',
                'rating'=>5,
                'created_at'=>now(),
            ],
            [
                'user_id'=>1,
                'product_id'=>1,
                'content '=>'hoi mac nha',
                'rating'=>4,
                'created_at'=>now(),
            ]
            ]);
    }
}
