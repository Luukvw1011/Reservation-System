<div class="space-y-6">
    <div class="grid gap-4 md:grid-cols-2">
        <div class="space-y-2">
            <label for="website" class="block text-sm font-medium text-neutral-300">
                Website (optional)
            </label>
            <input
                type="url"
                id="website"
                name="website"
                wire:model.defer="form.website"
                placeholder="https://yourrestaurant.com"
                class="w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            />
            @error('form.website')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-2 md:col-span-2">
            <label for="message" class="block text-sm font-medium text-neutral-300">
                Tell us about your concept (optional)
            </label>
            <textarea
                id="message"
                name="message"
                rows="4"
                wire:model.defer="form.message"
                placeholder="Share what makes your restaurant unique, peak hours, number of seats, etc."
                class="w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            ></textarea>
            @error('form.message')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex items-start gap-3">
        <input
            type="checkbox"
            id="accept_terms"
            name="accept_terms"
            wire:model.defer="form.accept_terms"
            class="mt-1 h-4 w-4 rounded border-neutral-700 bg-neutral-800 text-orange-500 focus:ring-orange-500"
        />
        <label for="accept_terms" class="text-sm text-neutral-400">
            I agree to share my details with Find&Dine for partnership opportunities.
        </label>
    </div>
    @error('form.accept_terms')
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
