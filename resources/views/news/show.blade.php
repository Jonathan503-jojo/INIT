<h1>{{ $news->title }}</h1>
<h2>{{ $news->subtitle }}</h2>
<p>{{ $news->body }}</p>
@if($news->image)
    <img src="{{ asset('storage/' . $news->image) }}" alt="News Image">
@endif
<a href="{{ url('adminpage/news')}}"></a>