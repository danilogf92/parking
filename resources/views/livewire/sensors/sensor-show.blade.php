<div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Sensor Details</h2>

    <div class="space-y-4">
        <!-- Sensor Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
            <div class="mt-1 text-sm text-gray-900 dark:text-gray-300">{{ $sensor->name }}</div>
        </div>

        <!-- User Occupied -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Occupied</label>
            <div class="mt-1 text-sm text-gray-900 dark:text-gray-300">{{ $sensor->occupied }}</div>
        </div>

        <!-- Start time -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start time</label>
            <div class="mt-1 text-sm text-gray-900 dark:text-gray-300">{{ $sensor->start_time }}</div>
        </div>

        <!-- End time -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">End time</label>
            <div class="mt-1 text-sm text-gray-900 dark:text-gray-300">{{ $sensor->end_time }}</div>
        </div>

    </div>
</div>
