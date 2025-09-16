<div>
    @if ($search)
        <div class="mx-1 p-5">
            @if (count($restaurants) > 0)
                <span class="text-lg font-bold text-stone-100">
                    Search result: {{ $restaurants->count() }}
                </span>
            @endif

            <div class="grid grid-cols-2 gap-4 mt-4">
                @forelse ($restaurants as $restaurant)
                    <div
                        class="search-item flex items-center justify-between p-3 bg-stone-800 rounded-md"
                    >
                        <div>
                            <div>{{ $restaurant->title }}</div>
                            <div class="text-stone-500 text-sm">
                                {{ $restaurant->type }}
                            </div>
                        </div>
                        <span>
                            {{ $restaurant->rating }}
                            <span class="text-stone-500 text-sm ms-1">
                                ({{ $restaurant->votes }})
                            </span>
                        </span>
                    </div>
                @empty
                    <div
                        class="col-span-2 flex flex-col items-center justify-center py-12 rounded-xl bg-stone-800/60"
                    >
                        <svg
                            class="w-12 h-12 text-stone-500 mb-3"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <circle cx="11" cy="11" r="7" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                        <p class="text-stone-300 text-lg font-medium">
                            No restaurants found
                        </p>
                        <p class="text-stone-500 text-sm mt-1">
                            Try another keyword or clear your search
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    @endif
</div>
