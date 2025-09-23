<x-layouts.app>
    <div class="inset-0 flex items-center justify-center mt-10">
        <div class="w-full max-w-2xl rounded-2xl bg-neutral-900 p-8 shadow-2xl">
            <x-slot:header>
                <div class="flex justify-between items-center w-full">
                    <span class="flex items-center gap-2 text-xl font-bold text-stone-100">
                        Find&Dine
                    </span>

                    <span class="text-sm font-bold text-orange-600">
                        <a href="{{ route('welcome') }}"><- return</a>
                    </span>
                </div>
            </x-slot>

            <div class="mb-6 space-y-3 text-neutral-200">
                <h1 class="text-2xl font-semibold text-white">
                    Partner with Find&Dine
                </h1>
                <p class="text-sm text-neutral-400">
                    Share your restaurant details and our team will reach out to help you
                    showcase your dining experience to Find&Dine guests.
                </p>
            </div>

            <livewire:owner-register-form />
        </div>
    </div>
</x-layouts.app>
