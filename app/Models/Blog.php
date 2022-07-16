<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

    class Blog extends Model {
        use HasFactory;

        /**
         * Blog hasmany likes
         *
         * @return HasMany
         */
        public function blogLikes(): HasMany {
            return $this->hasMany(BlogLike::class);
        }

        /**
         * Blog has many dislikes
         *
         * @return HasMany
         */
        public function blogDislikes(): HasMany {
            return $this->hasMany(BlogDislike::class);
        }

        /**
         * Blog has many comments
         *
         * @return HasMany
         */
        public function blogComments(): HasMany {
            return $this->hasMany(BlogComment::class);
        }

        /**
         * Blog belongs to blog category
         *
         * @return BelongsTo
         */
        public function blogCategory(): BelongsTo {
            return $this->belongsTo(BlogCategory::class);
        }
    }
