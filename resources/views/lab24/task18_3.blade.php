<x-layout>
    
    @if($congrats)
        <p style="background: green; color: white; padding: 10px;">{{ $congrats }}</p>
    @endif
    
    @if($birthday)
        <p> день рождения: <strong>{{ $birthday }}</strong></p>
        <p>дата сохранена в cookie. наступит этот день — поздравлю!</p>
    @else
        <form action="" method="post">
            @csrf
            <input type="date" name="birthday" required>
            <input type="submit" value="сохранить дату рождения">
        </form>
    @endif
</x-layout>