<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-black border-4 border-transparent rounded-s-2xl rounded-e-2xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-hoverpri focus:bg-hoverpri active:bg-hoverpri focus:outline-none focus:ring-2 focus:ring-hoverpri focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
