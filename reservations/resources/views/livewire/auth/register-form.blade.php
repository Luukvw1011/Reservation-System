<form method="POST" action="{{ route("register-page") }}" class="space-y-6">
    @csrf

    {{-- Full name --}}
    <div>
        <label for="name" class="block text-sm font-medium text-neutral-300">
            Full name
        </label>
        <input
            type="text"
            id="name"
            name="name"
            autocomplete="name"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="John Doe"
            required
        />
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
            autocomplete="email"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="you@example.com"
            required
        />
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
            autocomplete="new-password"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="••••••••"
            required
        />
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
            autocomplete="new-password"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="••••••••"
            required
        />
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
