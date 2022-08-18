<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run(){
            $this->call([
                LaratrustSeeder::class,
                UserSeeder::class,
                BlogCategorySeeder::class,
                BlogSeeder::class,
                BlogCommentSeeder::class,
                BlogContentSeeder::class,
                BlogLikeSeeder::class,
                BlogDislikeSeeder::class
            ]);
        }
    }
