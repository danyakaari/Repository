<x-layout>
    @if($error)
        <p style="color: red;">{{ $error }}</p>
    @endif
    
    <form action="" method="post">
        @csrf
        <input type="email" name="email" placeholder="введите email" required>
        <input type="submit" value="отправить">
    </form>
</x-layout>