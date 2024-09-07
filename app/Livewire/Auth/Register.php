<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

#[Layout('components.layouts.guest')]
class Register extends Component
{
    #[Validate(['required', 'max:50'])]
    public string $name = '';

    #[Validate(['required', 'email', 'unique:users,email'])]
    public string $email = '';

    #[Validate(['required', 'max:50'])]
    public string $password = '';

    #[Validate(['required', 'same:password'])]
    public string $confirmPassword = '';

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::loginUsingId($user->id);

        return redirect()->intended(route('home'));
    }

    public function render(): View
    {
        return view('livewire.auth.register');
    }
}
