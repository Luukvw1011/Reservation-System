<x-layouts.app>
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

    <div class="py-10 mx-5">
        <div class="flex flex-col gap-2">
            <span class="text-lg font-bold text-stone-100">
                Register as owner
            </span>
            <span class="text-sm text-stone-500 w-1/2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aspernatur assumenda beatae corporis, culpa, distinctio dolor,
                dolore est inventore itaque maxime molestiae neque omnis
                pariatur quam quasi qui quod repellendus sit!
            </span>
        </div>

        <livewire:owner-register-form />
    </div>
</x-layouts.app>
