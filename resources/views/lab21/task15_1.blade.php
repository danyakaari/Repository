<x-layout>
    @if($error)
        <p style="color: red;">{{ $error }}</p>
    @endif
    
    <form action="" method="post">
        @csrf
        <input type="number" name="num" placeholder="введите число от 1 до 10" required>
        <input type="submit" value="отправить">
    </form>
</x-layout>