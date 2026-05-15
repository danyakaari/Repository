<x-layout>
    @if($result !== null)
        <p>Квадрат числа: <strong>{{ $result }}</strong></p>
    @endif
    
    <form action="" method="GET">
        <input type="number" name="num" placeholder="Введите число" required>
        <input type="submit" value="Вычислить">
    </form>
</x-layout>