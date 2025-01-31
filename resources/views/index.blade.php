<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-grey dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="container">
    <h1 class="mb-4">House Listings</h1>
    <div class="row">
        @foreach ($houses as $house)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $house->houseName }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $house->city }}, {{ $house->province }}</h6>
                        <p class="card-text">
                            <strong>Rooms:</strong> {{ $house->rooms }} <br>
                            <strong>Bathrooms:</strong> {{ $house->bathrooms }} <br>
                            <strong>Floors:</strong> {{ $house->floors }} <br>
                            <strong>Square Meters:</strong> {{ $house->squareMeters }} m² <br>
                            <strong>Furnished:</strong> {{ $house->furnished ? 'Yes' : 'No' }} <br>
                            <strong>Price:</strong> ${{ number_format($house->price, 2) }}
                        </p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

