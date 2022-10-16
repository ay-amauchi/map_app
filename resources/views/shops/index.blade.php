@extends('layouts.main')
@section('title', '店舗一覧')
@section('content')
    <h1>店舗一覧</h1>

    <ul>
        @foreach ($shops as $shop)
            <li><a href="{{ route('shops.show', $shop) }}">{{ $shop->name }}</a></li>
        @endforeach
        <div id="map" style="height:50vh;"></div>
    </ul>

    <a href="{{ route('shops.create') }}">create</a>
@endsection

@section('script')
    @include('partial.map')
@endsection
