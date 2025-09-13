<form
    wire:submit.prevent="submit"
    class="mt-6 md:mt-8 flex items-stretch justify-center gap-3"
>
    <div class="relative max-w-xl w-full">
        <span
            class="pointer-events-none absolute inset-y-0 left-3 flex items-center"
        >
            <!-- Search icon -->
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 text-white/70"
                viewBox="0 0 20 20"
                fill="currentColor"
            >
                <path
                    fill-rule="evenodd"
                    d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM14 8a6 6 0 11-12 0 6 6 0 0112 0z"
                    clip-rule="evenodd"
                />
            </svg>
        </span>

        <input
            wire:model.defer="searchInput"
            type="text"
            placeholder="Search by restaurant, cuisine, or location"
            class="w-full rounded-xl bg-neutral-900/70 backdrop-blur px-10 md:px-11 py-3 md:py-4 text-white placeholder-white/60 outline-none ring-1 ring-white/10 focus:ring-2 focus:ring-white/30"
        />
    </div>

    <button
        type="submit"
        class="rounded-xl px-5 md:px-6 py-3 md:py-4 font-semibold text-white bg-orange-600 hover:bg-orange-500 active:bg-orange-700 transition"
    >
        Search
    </button>
</form>
