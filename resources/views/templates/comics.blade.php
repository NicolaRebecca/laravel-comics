
@foreach ($comicsList as $comic)
    <div class="comic">
        <img src="{{ $comic['thumb'] }}" alt="">
            <h4>{{ $comic['series']}}</h4>
        </div>
@endforeach
























        



