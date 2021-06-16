@extends('app')

@section('title', '記事一覧')

@section('content')
  @include('nav')
  <div class="container">
    @foreach($articles as $article)
      {{-- ここから削除 --}}    

      {{--略--}}

      {{-- ここまで削除 --}}
      @include('articles.card') {{-- この行を追加 --}}      
    @endforeach
  </div>
@endsection
