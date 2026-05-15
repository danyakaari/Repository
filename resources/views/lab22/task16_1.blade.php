<x-layout>
    @if($message)
        <p style="background: red; color: white; padding: 10px;">{{ $message }}</p>
    @endif
    
    <p>обновите страницу</p>
     
    <a href="/task16_1/set"> новое сообщение</a>
</x-layout>