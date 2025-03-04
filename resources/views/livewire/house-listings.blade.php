<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="container">
                <div class="container mx-auto p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($houses as $house)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- House Image -->
            @foreach ($house->media as $media)
                <img src="{{ asset('storage/' . $media->file_path) }}" alt="House Image" class="w-full h-48 object-cover">
            @endforeach

            <!-- House Details -->
            <div class="p-4">
                <h2 class="text-xl font-semibold">{{ $house->houseName }}</h2>
                <p class="text-gray-600">{{ $house->houseNumberStreet }}, {{ $house->barangay }}, {{ $house->city }}, {{ $house->province }}</p>
                <p class="text-gray-700 mt-2">Size: {{ $house->squareMeters }} m² | Floors: {{ $house->floors }}</p>
                <p class="text-gray-700">Rooms: {{ $house->rooms }} | Bathrooms: {{ $house->bathrooms }}</p>
                <p class="text-green-600 font-bold mt-2">₱{{ number_format($house->price, 2) }}</p>

                <!-- Furnished Badge -->
                @if($house->furnished)
                    <span class="inline-block bg-green-500 text-white px-2 py-1 text-xs rounded mt-2">Furnished</span>
                @endif

                <p class="text-gray-600 mt-2 text-sm">{{ Str::limit($house->description, 100) }}</p>

                <!-- View More Button -->
                <a href="#" class="block text-center bg-blue-500 text-white px-4 py-2 mt-3 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>
    @endforeach
</div>
            