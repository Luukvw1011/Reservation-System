<div class="grid grid-cols-3 gap-4 mt-5 mb-20">
    @foreach ($restaurants as $restaurant)
        <div class="restaurant-item">
            <img
                alt="{{ $restaurant->title }}"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-t-md"
                src="{{ $restaurant->image }}"
            />
            <div
                class="flex items-center justify-between p-3 bg-stone-800 rounded-b-md"
            >
                <div class="flex-row">
                    <div>{{ $restaurant->title }}</div>
                    <div class="text-stone-500 text-sm">
                        {{ $restaurant->type }}
                    </div>
                </div>

                <span class="rating">
                    {{ $restaurant->rating }}
                    <span class="text-stone-500 text-sm ms-1">
                        ({{ $restaurant->votes }})
                    </span>
                </span>
            </div>
        </div>
    @endforeach
</div>
