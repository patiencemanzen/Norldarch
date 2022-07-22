<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class BlogDislike extends Model {
        use HasFactory;

        protected $fillable = [
            'blog_id',
            'count',
            'active_status'
        ];

        /**
         * Blog like belongs to blog
         *
         * @return BelongsTo
         */
        public function blog(): BelongsTo {
            return $this->belongsTo(Blog::class);
        }

        /**
         * Blog comment belong to user
         *
         * @return BelongsTo
         */
        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }

        /**
         * Check if user with blog id already exist in dislike
         *
         * @param Blog $blogId
         */
        public static function userExistWithBlog(int $blogId) {
            return BlogDislike::where('user_id', user()->id)
                        ->where('blog_id', $blogId)
                        ->first() ?? false;
        }
    }
