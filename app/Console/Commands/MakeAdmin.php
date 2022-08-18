<?php

    namespace App\Console\Commands;

    use App\Models\Admin;
    use Illuminate\Console\Command;
    use Illuminate\Support\Facades\Hash;

    class MakeAdmin extends Command {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'make:admin';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create the system admins';

        /**
         * Create a new command instance.
         *
         * @return void
         */
        public function __construct() {
            parent::__construct();
        }

        /**
         * Execute the console command.
         *
         * @return int
         */
        public function handle() {
            $name = $this->ask('What is the admin name?');
            $email = $this->ask('What is the admin email?');
            $password = $this->secret('What is the password?');

            Admin::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ]);

            $this->info('Admin created successfully');

            return 0;
        }
    }
