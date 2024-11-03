<div class="p-6">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 text-center">Parqueadero</h1>
    </div>

    <!-- Grid Layout for Cards -->
    @if ($parkings->isNotEmpty())
        <div class="grid gap-6 mb-8 md:grid-cols-2 lg:grid-cols-2">
            @foreach ($parkings as $parking)
                <div
                    class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ $parking->name }}</h2>
                    <p class="text-gray-600 dark:text-gray-400">Ocupado || Desocupado</p>
                    <button
                        class="mt-4 px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition-colors duration-300">Aceptar
                        cargo</button>
                </div>
            @endforeach
        </div>
    @else
        <div class="flex justify-center items-center h-64 w-full">
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 hover:shadow-lg transition-shadow duration-300 w-full">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4 text-center">Create Sensor</h2>
                <p class="text-gray-600 dark:text-gray-400 text-center">No Content</p>
            </div>
        </div>
    @endif
</div>
