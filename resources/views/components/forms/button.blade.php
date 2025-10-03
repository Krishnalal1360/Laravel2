    <div>
        <button {{ $attributes->merge(['style' => 'border:3px solid orange;']) }}>{{-- Test Button --}}{{ $slot }}</button>
    </div>
