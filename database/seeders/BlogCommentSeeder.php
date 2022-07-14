<?php

    namespace Database\Seeders;

use App\Models\BlogComment;
use Illuminate\Database\Seeder;

    class BlogCommentSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            BlogComment::factory()->count(10)->create();
        }
    }
