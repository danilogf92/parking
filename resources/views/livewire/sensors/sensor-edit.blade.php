<div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Edit Sensor</h2>

    <form wire:submit.prevent="updateSensor" class="space-y-6">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
            <input type="text" wire:model="name" id="name"
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm
                   focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300"
                placeholder="Enter thing name">
            @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Actions -->
        <div class="flex justify-end">
            <button type="button" wire:click="$dispatch('closeModal')"
                class="mr-4 px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600
                    focus:outline-none focus:ring-2 focus:ring-gray-500">Cancel</button>
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700
                    focus:outline-none focus:ring-2 focus:ring-blue-500">Update</button>
        </div>
    </form>
</div>
