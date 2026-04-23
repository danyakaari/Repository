<?php

namespace App\Http\Controllers;

use PHPUnit\Framework\TestSize\TestSize;

class CityController extends Controller
//lab6
<?php

// ==================== СОЗДАНИЕ КОЛЛЕКЦИЙ ====================

// Из массива
$collection = collect([1, 2, 3, 4, 5]);

// Пустая коллекция
$collection = collect([]);

// Диапазон чисел
$collection = collect()->range(1, 10);

// С помощью make
$collection = Collection::make(['a', 'b', 'c']);

// Повторяющиеся значения
$collection = Collection::times(5, fn($i) => $i * 2); // [2, 4, 6, 8, 10]

// ==================== БАЗОВЫЕ МЕТОДЫ ====================

// all() - получить массив
$array = $collection->all();

// count() - количество элементов
$count = $collection->count(); // 5

// isEmpty() / isNotEmpty() - проверка на пустоту
if ($collection->isEmpty()) { }
if ($collection->isNotEmpty()) { }

// contains() - проверяет наличие элемента
$collection->contains('value');
$collection->contains(fn($item) => $item > 10);

// first() / last() - первый и последний
$first = $collection->first();
$last = $collection->last();

// ==================== ПРЕОБРАЗОВАНИЕ ====================

// map() - преобразовать каждый элемент
$collection->map(fn($item) => $item * 2);

// filter() - отфильтровать
$collection->filter(fn($item) => $item > 3);

// reject() - удалить по условию (обратный filter)
$collection->reject(fn($item) => $item <= 3);

// flatMap() - преобразовать и сгладить
$collection->flatMap(fn($item) => [$item, $item * 2]);

// reduce() - свернуть в одно значение
$sum = $collection->reduce(fn($carry, $item) => $carry + $item, 0);

// ==================== РАБОТА С КЛЮЧАМИ ====================

// keys() - получить все ключи
$keys = $collection->keys();

// values() - сбросить ключи (0,1,2...)
$values = $collection->values();

// flip() - поменять ключи и значения местами
$flipped = $collection->flip();

// only() - оставить указанные ключи
$filtered = $collection->only(['name', 'email']);

// except() - удалить указанные ключи
$filtered = $collection->except(['password']);

// pluck() - извлечь значения по ключу
$names = $collection->pluck('name');
$keyed = $collection->pluck('name', 'id');

// ==================== МАССИВЫ ДАННЫХ ====================

// chunk() - разбить на части по N элементов
$chunks = $collection->chunk(3); // [[1,2,3], [4,5]]

// split() - разбить на N частей
$groups = $collection->split(3);

// collapse() - сгладить массив массивов
$flat = collect([[1,2], [3,4]])->collapse(); // [1,2,3,4]

// flatten() - полностью сгладить многомерный массив
$flat = collect([1, [2, [3,4]]])->flatten(); // [1,2,3,4]

// join() - объединить с разделителем
$result = collect(['a', 'b', 'c'])->join(', ', ' и '); // 'a, b и c'

// implode() - склеить в строку
$string = collect(['a', 'b', 'c'])->implode('-'); // 'a-b-c'

// ==================== ЧИСЛОВЫЕ МЕТОДЫ ====================

// sum() - сумма
$total = $collection->sum();

// avg() / average() - среднее
$average = $collection->avg();

// min() / max() - минимум и максимум
$min = $collection->min();
$max = $collection->max();

// median() - медиана
$median = $collection->median();

// ==================== СОРТИРОВКА ====================

// sort() - сортировка
$collection->sort()->values();

// sortBy() - сортировка по ключу
$collection->sortBy('price');

// sortByDesc() - обратная сортировка
$collection->sortByDesc('price');

// sortKeys() - сортировка по ключам массива
$collection->sortKeys();

// reverse() - обратный порядок
$reversed = $collection->reverse();

// shuffle() - перемешать случайно
$random = $collection->shuffle();

// ==================== УНИКАЛЬНОСТЬ ====================

// unique() - уникальные значения
$unique = $collection->unique();

// duplicates() - повторяющиеся значения
$duplicates = $collection->duplicates();

// diff() - разница с другим массивом
$diff = $collection->diff([1, 2, 3]);

// intersect() - пересечение
$intersect = $collection->intersect([2, 4, 6]);

// ==================== ОПЕРАЦИИ С ДРУГИМИ КОЛЛЕКЦИЯМИ ====================

// merge() - объединить (повторяющиеся ключи перезаписываются)
$merged = $collection->merge(['d' => 4]);

// concat() - добавить в конец (числовые ключи переиндексируются)
$concatenated = $collection->concat([4, 5, 6]);

// combine() - сделать ключи из одной коллекции, значения из другой
$combined = collect(['name', 'age'])->combine(['Danil', 25]);

// zip() - объединить по индексам
$zipped = collect([1, 2])->zip(['a', 'b']); // [[1, 'a'], [2, 'b']]

// ==================== РАБОТА С КЛЮЧАМИ ====================

// keyBy() - переиндексировать по ключу
$keyed = $collection->keyBy('id');

// groupBy() - сгруппировать по ключу
$grouped = $collection->groupBy('category_id');

// ==================== РАБОТА С ЭЛЕМЕНТАМИ ====================

// each() - пройти по всем элементам
$collection->each(fn($item) => echo $item);

// mapWithKeys() - преобразовать в пары ключ-значение
$collection->mapWithKeys(fn($item) => [$item['id'] => $item['name']]);

// get() - получить элемент с дефолтом
$value = $collection->get('key', 'default');

// has() - проверить существование ключа
$collection->has('name');

// push() - добавить в конец
$collection->push(10);

// prepend() - добавить в начало
$collection->prepend(0);

// pull() - получить и удалить
$value = $collection->pull('key');

// forget() - удалить по ключу
$collection->forget('key');

// pop() - удалить и вернуть последний
$last = $collection->pop();

// shift() - удалить и вернуть первый
$first = $collection->shift();

// put() - положить элемент по ключу
$collection->put('key', 'value');

// ==================== УСЛОВНЫЕ МЕТОДЫ ====================

// when() - выполнить если true
$collection->when($condition, fn($c) => $c->push(100));

// unless() - выполнить если false
$collection->unless($condition, fn($c) => $c->push(100));

// pipe() - передать в замыкание
$result = $collection->pipe(fn($c) => $c->sum());

// tap() - перехватить, не меняя коллекцию
$collection->tap(fn($c) => logger($c->count()))->sum();

// ==================== ПРИМЕРЫ ЦЕПОЧЕК МЕТОДОВ ====================

// Обработка данных пачкой
$result = collect($data)
    ->filter(fn($item) => $item['active'])
    ->map(fn($item) => $item['name'])
    ->sort()
    ->unique()
    ->values()
    ->toArray();

// Группировка с подсчетом
$stats = collect($users)
    ->groupBy('city')
    ->map(fn($group) => $group->count())
    ->sortDesc();

// ==================== ОТЛОЖЕННЫЕ КОЛЛЕКЦИИ (для больших данных) ====================

use Illuminate\Support\LazyCollection;

// Для огромных файлов
LazyCollection::make(function () {
    $handle = fopen('huge.log', 'r');
    while (($line = fgets($handle)) !== false) {
        yield $line;
    }
})->chunk(1000)->each(function ($chunk) {
    // обрабатываем кусок
});

// Вместо all() используем cursor() для моделей
$users = User::cursor()->filter(fn($user) => $user->id > 500);

// ==================== ИЗМЕНЯЕМЫЕ vs НЕИЗМЕНЯЕМЫЕ ====================

// ❌ НЕ изменяют исходную коллекцию (возвращают новую)
$new = $collection->map(fn($item) => $item * 2);
$new = $collection->filter(fn($item) => $item > 2);
$new = $collection->sort();

// ⚠️ ИЗМЕНЯЮТ исходную коллекцию
$collection->transform(fn($item) => $item * 2);  // как map, но меняет текущую
$collection->push(10);      // добавить в конец
$collection->prepend(0);    // добавить в начало
$collection->forget('key'); // удалить по ключу
$collection->shift();       // удалить первый
$collection->pop();         // удалить последний это куда вставить