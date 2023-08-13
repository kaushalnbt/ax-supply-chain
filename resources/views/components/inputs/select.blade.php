<select 
    {!! $attributes->merge(
        [
            'class' => 'rounded border border-gray-600 focus:ring-2 focus:ring-indigo-900 
                bg-gray-600 bg-opacity-20 appearance-none py-2 focus:outline-none focus:border-indigo-500 text-white pl-3 pr-10'
        ]) 
    !!}
>
    <option disabled readonly selected value="">Select Option</option>
    {{ $slot }}
</select>