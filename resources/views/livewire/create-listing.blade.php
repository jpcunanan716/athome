<div>
        <div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Create a New House</h2>
            <form wire:submit.prevent="save" class="space-y-6">
                <!-- House Name -->
                <div>
                    <label for="houseName" class="block text-sm font-medium text-gray-700">House Name</label>
                    <input type="text" wire:model="houseName" id="houseName" placeholder="Enter house name"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- House Type -->
                <div>
                    <label for="housetype" class="block text-sm font-medium text-gray-700">House Type</label>
                    <input type="text" wire:model="housetype" id="housetype" placeholder="Enter house type"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Street -->
                <div>
                    <label for="street" class="block text-sm font-medium text-gray-700">Street</label>
                    <input type="text" wire:model="street" id="street" placeholder="Enter street"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Province -->
                <div>
                    <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
                    <input type="text" wire:model="province" id="province" placeholder="Enter province"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- City -->
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" wire:model="city" id="city" placeholder="Enter city"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Barangay -->
                <div>
                    <label for="barangay" class="block text-sm font-medium text-gray-700">Barangay</label>
                    <input type="text" wire:model="barangay" id="barangay" placeholder="Enter barangay"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Total Occupants -->
                <div>
                    <label for="total_occupants" class="block text-sm font-medium text-gray-700">Total Occupants</label>
                    <input type="number" wire:model="total_occupants" id="total_occupants" placeholder="Enter total occupants"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Total Rooms -->
                <div>
                    <label for="total_rooms" class="block text-sm font-medium text-gray-700">Total Rooms</label>
                    <input type="number" wire:model="total_rooms" id="total_rooms" placeholder="Enter total rooms"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Total Bathrooms -->
                <div>
                    <label for="total_bathrooms" class="block text-sm font-medium text-gray-700">Total Bathrooms</label>
                    <input type="number" wire:model="total_bathrooms" id="total_bathrooms" placeholder="Enter total bathrooms"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea wire:model="description" id="description" placeholder="Enter description"
                              class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Amenities -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Amenities</label>
                    <div class="mt-2 space-y-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="has_aircon" class="form-checkbox h-5 w-5 text-blue-600">
                            <span class="ml-2 text-gray-700">Air Conditioning</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="has_kitchen" class="form-checkbox h-5 w-5 text-blue-600">
                            <span class="ml-2 text-gray-700">Kitchen</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="has_wifi" class="form-checkbox h-5 w-5 text-blue-600">
                            <span class="ml-2 text-gray-700">Wi-Fi</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="has_parking" class="form-checkbox h-5 w-5 text-blue-600">
                            <span class="ml-2 text-gray-700">Parking</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="has_gym" class="form-checkbox h-5 w-5 text-blue-600">
                            <span class="ml-2 text-gray-700">Gym</span>
                        </label>
                    </div>
                </div>

                <!-- Price -->
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" wire:model="price" id="price" placeholder="Enter price"
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                            class="w-full bg-blue-500 text-black px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>