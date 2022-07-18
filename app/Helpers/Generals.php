<?php

    use App\Models\User;
    use App\Utilities\Constants\HttpStatuses;
    use Illuminate\Contracts\Auth\Authenticatable;
    use Illuminate\Http\JsonResponse;
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

    if (!function_exists('successResponse')) {
        /**
         * Handle the success response for Ajax requests
         *
         * @param mixed $data The data to be passed to the response
         * @param string|null $message The message to be passed to the response
         * @param int $code The response status code
         * @return JsonResponse
         */
        function successResponse($data = null, ?string $message = null, int $code = HttpStatuses::OK): JsonResponse
        {
            $res = [
                'message' => $message,
                'data' => $data,
                'success' => true,
                // 'status_code' => $code
            ];

            return response()->json($res, $code);
        }
    }

    if (!function_exists('errorResponse')) {
        /**
         * Handle the success response for Ajax requests
         *
         * @param string|null $message The message to be passed to the response
         * @param int $code The response status code
         * @param null $errors
         * @return JsonResponse
         */
        function errorResponse(string $message = null, int $code = HttpStatuses::BAD_REQUEST, $errors = null): JsonResponse
        {
            $res = [
                'message' => $message,
                'errors' => $errors,
                'success' => false,
                // 'status_code' => $code
            ];

            return response()->json($res, $code);
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
