<?php

    namespace Database\Seeders;

    use App\Models\BlogComment;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class BlogCommentSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table('blog_comments')->truncate();

            BlogComment::factory()->count(1000)->create();
        }
    }
