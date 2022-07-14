<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateBlogDislikesTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('blog_dislikes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('users_id');
                $table->unsignedBigInteger('blogs_id');
                $table->integer('count');
                $table->boolean('active_status')->nullable()->default(true);
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('blog_dislikes');
        }
    }
