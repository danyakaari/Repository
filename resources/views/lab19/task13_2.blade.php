<x-layout>
    <h1>13.2Регистрация</h1> 
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Имя" required><br>
        <input type="text" name="surname" placeholder="Фамилия" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="login" placeholder="Логин" required><br>
        <input type="password" name="password" placeholder="Пароль" required><br>
        <input type="submit" value="Зарегистрироваться">
    </form>
    
    @if($dataExcept)
        <ul>
            @foreach($dataExcept as $key => $value)
                <li>{{ $key }}: {{ $value }}</li>
            @endforeach
        </ul>
    @endif
    
    @if($dataOnly)
        <ul>
            @foreach($dataOnly as $key => $value)
                <li>{{ $key }}: {{ $value }}</li>
            @endforeach
        </ul>
    @endif
</x-layout>