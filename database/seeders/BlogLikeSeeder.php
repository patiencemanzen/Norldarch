<?php

    namespace Database\Seeders;

    use App\Models\BlogLike;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class BlogLikeSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table('blog_likes')->truncate();

            BlogLike::factory()->count(1000)->create();
        }
    }
