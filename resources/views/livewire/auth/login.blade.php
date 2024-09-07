<div x-cloak>
    <div>
        <x-ui.logo />

        <h2 class="mt-3 text-2xl font-extrabold text-center text-neutral-700 leading-9">
            Sign in to your account
        </h2>
    </div>

    <div
        @class([
            'font-arial flex flex-col bg-neutral-0',
            'shadow gap-6 px-10 py-8 mt-8',
            'sm:mx-auto sm:w-full sm:max-w-md'
        ])
    >
        <x-input
            name="email"
            label="Email"
            placeholder="name@nationwidepower.com"
            wire:model.defer='email'
        />

        <x-password
            name="password"
            label="Password"
            placeholder="**********"
            wire:model.defer='password'
        />

        <x-button
            neutral
            solid
            md
            wire:click="authenticate"
        >
            Sign In
        </x-button>

        <x-button
            neutral
            outline
            md
            :href="route('register')"
        >
            Register
        </x-button>
    </div>
</div>