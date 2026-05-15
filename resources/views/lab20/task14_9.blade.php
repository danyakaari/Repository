<x-layout>
    <ul>
        @foreach($allData as $key => $value)
            <li><strong>{{ $key }}</strong>: {{ is_array($value) ? implode(', ', $value) : $value }}</li>
        @endforeach
    </ul>
</x-layout>