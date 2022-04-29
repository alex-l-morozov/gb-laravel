<div>
    {{ $category['title'] }}
    <br />
    <p>{!! $category['description'] !!}</p>
    <br />
    <br />
    <br />
    @forelse($category['news'] as $news)
        <a href="{{ route('news.show', ['id' => $news['id']]) }}">{{ $news['title'] }}</a><br />
        <img src="{{ $news['image'] }}" style="width:200px;"><br />
        <a href="{{ route('news.show', ['id' => $news['id']]) }}">Подробнее</a><br />
        <small class="text-muted"><strong>Автор:</strong> {{ $news['author'] }}</small><br />
        <br />
    @empty
        <p>Новостей нет!</p>
    @endforelse
</div>
