<x-layouts.app>
    <div class="inset-0 flex items-center justify-center mt-10">
        <div class="w-full max-w-md rounded-2xl bg-neutral-900 p-8 shadow-2xl">
            <livewire:register-form />

            <div class="mt-6 text-center text-sm text-neutral-400">
                Already have an account?
                <a
                    href="{{ route("login") }}"
                    class="font-medium text-neutral-200 hover:underline"
                >
                    Log in
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
