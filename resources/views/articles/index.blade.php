@extends('app')

@section('title', '記事')

@section('content')
<div class="container">
  @include('nav')
    @foreach($articles as $article)
      @include('articles.card') {{-- この行を追加 --}}
    @endforeach
</div>
@endsection
