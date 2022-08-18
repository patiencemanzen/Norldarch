<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreUserRequest;
    use App\Models\User;
    use App\Providers\RouteServiceProvider;
    use App\Utilities\Constants\Roles;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Validation\Rules;

    class RegisteredUserController extends Controller {
        /**
         * Display the registration view.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view('auth.register');
        }

        /**
         * Handle an incoming registration request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\RedirectResponse
         *
         * @throws \Illuminate\Validation\ValidationException
         */
        public function store(StoreUserRequest $request) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($user));

            $user->attachRole(Roles::USER);

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }
    }
