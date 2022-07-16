<?php

    use App\Models\User;
    use Illuminate\Contracts\Auth\Authenticatable;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;

    if (!function_exists('user')) {
        /**
         * Return the authenticated user model.
         *
         * @return Authenticatable|null|User
         */
        function user()
        {
            return Auth::user();
        }
    }


    if(!function_exists('slug')) {
        /**
         * Generate random slug code
         * @param int $length
         * @return mixed
        */
        function slug(string $prefix = null, string $uniqueIdentifier = '') {
            return $uniqueIdentifier.'-'.Str::lower(Str::slug($prefix));
        }
    }
