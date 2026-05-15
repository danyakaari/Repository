<x-layout>
    <p>адрес: <strong>/test/method?param=1</strong></p>
    
    <h2>результаты:</h2>
    <ul>
        <li><strong>path()</strong> (путь без параметров): {{ $path }}</li>
        <li><strong>url()</strong> (URL без GET-): {{ $url }}</li>
        <li><strong>fullUrl()</strong> (полный URL): {{ $fullUrl }}</li>
        <li><strong>fullUrlWithQuery(['page' => 1])</strong>: {{ $newUrl }}</li>
    </ul>
    
    <a href="/test/method?param=1">Перейти с param=1</a>
</x-layout>