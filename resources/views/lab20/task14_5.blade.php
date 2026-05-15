<x-layout>
    <p>Массив в сессии:</p>
    <ul>
        @foreach($numbers as $num)
            <li>{{ $num }}</li>
        @endforeach
    </ul>
    
    <a href=""> случайное число</a>
</x-layout>