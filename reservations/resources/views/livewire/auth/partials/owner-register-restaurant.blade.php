<div class="grid gap-4 md:grid-cols-2">
    <div class="space-y-2 md:col-span-2">
        <label for="restaurant_name" class="block text-sm font-medium text-neutral-300">
            Restaurant name
        </label>
        <input
            type="text"
            id="restaurant_name"
            name="restaurant_name"
            wire:model.defer="form.restaurant_name"
            placeholder="e.g. The Golden Spoon"
            class="w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            required
        />
        @error('form.restaurant_name')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2">
        <label for="restaurant_type" class="block text-sm font-medium text-neutral-300">
            Cuisine type
        </label>
        <select
            id="restaurant_type"
            name="restaurant_type"
            wire:model.defer="form.restaurant_type"
            class="w-full appearance-none rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            required
        >
            <option value="" disabled>Select a cuisine</option>
            @foreach ($cuisineOptions as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
        @error('form.restaurant_type')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2">
        <label for="city" class="block text-sm font-medium text-neutral-300">
            City
        </label>
        <input
            type="text"
            id="city"
            name="city"
            wire:model.defer="form.city"
            placeholder="e.g. Amsterdam"
            class="w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            required
        />
        @error('form.city')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
</div>
