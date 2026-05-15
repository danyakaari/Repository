<x-layout>

    @if($result !== null)
        <p>Сумма: <strong>{{ $result }}</strong></p>
        <a href="/task12_4">Новый счет</a>
    @else
        <form action="" method="POST">
            @csrf
            <input type="number" name="num1" placeholder="Число 1" required>
            <input type="number" name="num2" placeholder="Число 2" required>
            <input type="submit" value="Сложить">
        </form>
    @endif
</x-layout>