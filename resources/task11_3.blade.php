<x-layout>
    @if($showForm)
        <form action="" method="GET">
            <input type="number" name="num1" placeholder="Число 1" required>
            <input type="number" name="num2" placeholder="Число 2" required>
            <input type="submit" value="Сложить">
        </form>
    @else
        <p>Сумма: <strong>{{ $sum }}</strong></p>
        <a href="">Вернуться к форме</a>
    @endif
</x-layout>