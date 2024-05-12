<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'relative inline-flex items-center justify-center w-24 p-0.5 my-4 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-400']) }}>
    <span
        class="relative w-24 px-5 py-1.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0 text-center">
        {{ $slot }}
    </span>
</button>