@extends("layouts.app")
<!DOCTYPE html>
<html>
<head>
<title> Article List</title>
<meta charset="utf-8">
</head>
<body>
<h1 align="center">Article List </h1>
<ul>
@section("content")
<div class="container">
@if(session('info'))
<div class="alert alert-info">
{{session('info')}}
</div>
@endif
{{ $articles->links() }}
@foreach($articles as $article)
<div class="card mb-2">
<div class="card-body">
<h5 class="card-title">{{$article->title}}</h5>
<div class="card-subtitle mb-2 text-muted small">
{{$article->created_at->diffForHumans()}}
</div>
<p class="card-text">{{$article->body}}</p>

<a class="card-link" href="{{ url("/articles/detail/$article->id") }}">
View datail &raquo;
</a>
</div>
</div>
@endforeach
</div>
@endsection
</ul>
</body>
</html>