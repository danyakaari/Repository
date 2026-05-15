<x-layout>
    <h1>{{ $post->title }}</h1>
    <p><strong>Дата:</strong> {{ $post->date }}</p>
    <p><strong>Описание:</strong> {{ $post->desc }}</p>
    <div>
        <strong>Текст:</strong>
        <p>{{ $post->text }}</p>
    </div>
</x-layout>