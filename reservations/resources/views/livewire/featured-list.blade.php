<div class="grid grid-cols-3 gap-4 mt-5 mb-20">
    @foreach ($restaurants as $restaurant)
        <div class="restaurant-item">
            <img
                alt="{{ $restaurant["title"] }}"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-md"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBE2nYh9sKGmDUxJPma3qchV5qjaN92ej0aoeLhSGBkS6Y4Dlo0ywUtcwn-XvmShLo21VnjG48Gz9BV0ImdKjJO5gd7OhicLcquTcNZrqITpzDONeD8bxw1RBmd1Aves0ATH5z8zhROfVlblSzBkI6K_hPVu1pZdPSke209KFLgLxAaivAsMWuyHi4ZTLDwlGn1jX6ktEDtR8lxWtYO24IUqqC7_337K2O_RXN_79ZZt_LitH7JA-mB03t4jILc43BXAykYoXUvSfU"
            />
            <div class="flex items-center justify-between py-3 mx-4">
                <div class="flex-row">
                    <div>{{ $restaurant["title"] }}</div>
                    <div>{{ $restaurant["type"] }}</div>
                </div>

                <span class="rating">
                    {{ $restaurant["rating"] }}
                    <span>({{ $restaurant["votes"] }})</span>
                </span>
            </div>
        </div>
    @endforeach
</div>
