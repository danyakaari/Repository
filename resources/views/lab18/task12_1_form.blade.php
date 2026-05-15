<x-layout>
    <form action="/task12_1/result" method="POST">
        @csrf
        <input type="text" name="text" placeholder="Введите текст" required>
        <input type="submit" value="Отправить">
    </form>
</x-layout>