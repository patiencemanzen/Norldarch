<?php

    namespace App\Http\Livewire\Alerts;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Cookie as FacadesCookie;
    use Livewire\Component;

    class Cookie extends Component {
        public function save() {
            FacadesCookie::make(env('COOKIE_NAME'), md5(uniqid(rand(), true)), 120);
        }

        public function render() {
            return view('livewire.alerts.cookie');
        }
    }
