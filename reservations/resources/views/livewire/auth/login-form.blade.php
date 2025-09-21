<form method="POST" class="space-y-6">
    @csrf

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
        <div class="flex items-center justify-between">
            <label
                for="password"
                class="block text-sm font-medium text-neutral-300"
            >
                Password
            </label>
            <a
                href="#"
                class="text-sm text-neutral-400 hover:text-neutral-200 hover:underline underline-offset-4"
            >
                Forgot password?
            </a>
        </div>
        <input
            type="password"
            id="password"
            name="password"
            autocomplete="current-password"
            class="mt-2 w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            placeholder="••••••••"
            required
        />
    </div>

    {{-- Remember me --}}
    <div class="flex items-center gap-2">
        <input
            id="remember"
            name="remember"
            type="checkbox"
            class="h-4 w-4 rounded border-neutral-700 bg-neutral-800 text-orange-500 focus:ring-2 focus:ring-orange-500/50"
        />
        <label for="remember" class="text-sm text-neutral-300">
            Remember me
        </label>
    </div>

    {{-- Submit --}}
    <div>
        <button
            type="submit"
            class="w-full rounded-xl bg-orange-500 px-5 py-3 font-medium text-white transition hover:bg-orange-600"
        >
            Log in
        </button>
    </div>
</form>
