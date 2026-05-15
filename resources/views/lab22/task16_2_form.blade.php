<x-layout>
    <form action="" method="post">
        @csrf
        <input type="number" name="num1" placeholder="число 1" required><br>
        <input type="number" name="num2" placeholder="число 2" required><br>
        <input type="number" name="num3" placeholder="число 3" required><br>
        <input type="number" name="num4" placeholder="число 4" required><br>
        <input type="number" name="num5" placeholder="число 5" required><br>
        <input type="submit" value="отправить">
    </form>
</x-layout>