<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Login extends Component
{
    #[Validate(['required', 'email'])]
    public string $email = '';

    #[Validate(['required', 'required'])]
    public string $password = '';

    public function authenticate()
    {
        $this->validate();

        if (
            Auth::attempt([
                'email'    => $this->email,
                'password' => $this->password,
            ], true)
        ) {
            return redirect()->intended(route('home'));
        }

        $this->addError('email', trans('auth.failed'));
    }

    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
