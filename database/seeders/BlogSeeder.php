<?php

    namespace Database\Seeders;

    use App\Models\Blog;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class BlogSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table('blogs')->truncate();

            Blog::factory()->count(10)->create();
        }
    }
