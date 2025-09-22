<form wire:submit.prevent="register" class="space-y-6">
    @csrf

    <div class="space-y-2 text-center">
        <h2 class="text-2xl font-semibold text-neutral-100">Create your account</h2>
        <p class="text-sm text-neutral-400">Join Find&Dine to start booking tables.</p>
    </div>

    {{-- Full name --}}
    <div>
        <label for="name" class="block text-sm font-medium text-neutral-300">
            Full name
        </label>
        <input
            type="text"
            id="name"
            name="name"
            wire:model.defer="form.name"
            autocomplete="name"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="John Doe"
            required
        />
        @error('form.name')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Email --}}
    <div>
        <label for="email" class="block text-sm font-medium text-neutral-300">
            Email
        </label>
        <input
            type="email"
            id="email"
            name="email"
            wire:model.defer="form.email"
            autocomplete="email"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="you@example.com"
            required
        />
        @error('form.email')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Password --}}
    <div>
        <label
            for="password"
            class="block text-sm font-medium text-neutral-300"
        >
            Password
        </label>
        <input
            type="password"
            id="password"
            name="password"
            wire:model.defer="form.password"
            autocomplete="new-password"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="••••••••"
            required
        />
        @error('form.password')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Confirm Password --}}
    <div>
        <label
            for="password_confirmation"
            class="block text-sm font-medium text-neutral-300"
        >
            Confirm password
        </label>
        <input
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            wire:model.defer="form.password_confirmation"
            autocomplete="new-password"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="••••••••"
            required
        />
        @error('form.password_confirmation')
            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Submit --}}
    <div>
        <button
            type="submit"
            class="w-full rounded-xl bg-orange-500 px-5 py-3 font-medium text-white transition hover:bg-orange-600"
        >
            Register
        </button>
    </div>
</form>
