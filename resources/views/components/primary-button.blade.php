<button {{ $attributes->merge(['class' => 'px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white font-bold rounded-md']) }}>
    {{ $slot }}
</button>
