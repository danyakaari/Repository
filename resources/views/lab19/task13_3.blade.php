<x-layout>

    <p>Параметр 1: <strong>{{ $param1 }}</strong></p>
    <p>Параметр 2: <strong>{{ $param2 }}</strong></p>
    
    <form action="" method="POST">
        @csrf
        <input type="text" name="text" placeholder="Введите текст"><br>
        <input type="submit" value="Отправить">
    </form>
    
    @if($formData)

        <ul>
            @foreach($formData as $key => $value)
                <li>{{ $key }}: {{ $value }}</li>
            @endforeach
        </ul>
    @endif
</x-layout>