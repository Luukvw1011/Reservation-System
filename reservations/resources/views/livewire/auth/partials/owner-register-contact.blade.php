<div class="grid gap-4 md:grid-cols-2">
    <div class="space-y-2 md:col-span-2">
        <label for="contact_email" class="block text-sm font-medium text-neutral-300">
            Contact email
        </label>
        <input
            type="email"
            id="contact_email"
            name="contact_email"
            wire:model.defer="form.contact_email"
            placeholder="owner@example.com"
            class="w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
            required
        />
        @error('form.contact_email')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2 md:col-span-2">
        <label for="contact_phone" class="block text-sm font-medium text-neutral-300">
            Contact phone (optional)
        </label>
        <input
            type="tel"
            id="contact_phone"
            name="contact_phone"
            wire:model.defer="form.contact_phone"
            placeholder="+31 6 1234 5678"
            class="w-full rounded-xl border border-neutral-700 bg-neutral-800/60 px-4 py-3 text-neutral-100 placeholder-neutral-500 focus:border-neutral-600 focus:ring-2 focus:ring-orange-500"
        />
        @error('form.contact_phone')
            <p class="text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
</div>
