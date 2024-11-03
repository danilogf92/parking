    <div class="p-6">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Dashboard</h1>
            <p class="text-gray-600 dark:text-gray-400">Welcome to your dashboard, here is an overview of your activity.
            </p>
        </div>

        <!-- Grid Layout for Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 lg:grid-cols-2">
            <!-- Example Card -->
            {{-- <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Card Title</h2>
                <p class="text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Proin at ullamcorper lacus.</p>
                <button
                    class="mt-4 px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-colors duration-300">Action</button>
            </div> --}}

            {{ $parkings }}

            @forelse($parkings as $sensor)
                <div
                    class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Card Title</h2>
                    <p class="text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin at ullamcorper lacus.</p>
                    <button
                        class="mt-4 px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-colors duration-300">Action</button>
                </div>
            @empty
                <div
                    class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Card Title</h2>
                    <p class="text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin at ullamcorper lacus.</p>

                </div>
            @endforelse
        </div>
    </div>
