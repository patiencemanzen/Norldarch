<?php

    namespace Database\Seeders;

    use App\Models\BlogDislike;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class BlogDislikeSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table('blog_dislikes')->truncate();

            BlogDislike::factory()->count(1000)->create();
        }
    }
