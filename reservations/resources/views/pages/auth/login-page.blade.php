<x-layouts.app>
    <div class="inset-0 flex items-center justify-center mt-10">
        <div class="w-full max-w-md rounded-2xl bg-neutral-900 p-8 shadow-2xl">
            <x-slot:header>
                <div class="flex justify-between items-center w-full">
                    <span
                        class="flex items-center gap-2 text-xl font-bold text-stone-100"
                    >
                        Find&Dine
                    </span>

                    <span class="text-sm font-bold text-orange-600">
                        <a href="{{ route("welcome") }}"><- return</a>
                    </span>
                </div>
            </x-slot>

            <livewire:login-form />

            <div class="mt-6 text-center text-sm text-neutral-400">
                Don’t have an account?
                <a
                    href="{{ route("register-page") }}"
                    class="font-medium text-neutral-200 hover:underline"
                >
                    Register
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
