<x-layout>

    @if($data)
        <p style="background: green; color: white; padding: 10px;">{{ $data }}</p>
    @endif
    
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="ваше имя" value="{{ old('name') }}"><br>
        <input type="number" name="age" placeholder="ваш возраст" value="{{ old('age') }}"><br>
        <input type="email" name="email" placeholder="ваш email" value="{{ old('email') }}"><br>
        <input type="submit" value="отправить">
    </form>
    
    <p>введите что-нибудь</p>
</x-layout>