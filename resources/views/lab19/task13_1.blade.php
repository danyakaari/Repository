<x-layout>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="text" name="age" placeholder="Возраст"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="city" placeholder="Город"><br>
        <input type="submit" value="Отправить">
    </form>
    



    
    @if($data)
        <ul>
            @foreach($data as $key => $value)
                <li>{{ $key }}: {{ $value }}</li>
            @endforeach
        </ul>
    @endif
</x-layout>