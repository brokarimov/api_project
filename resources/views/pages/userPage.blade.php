@extends('layouts.user')

@section('content')

@php
$lang = session('lang');
@endphp

<div class="row">
    @foreach ($news as $new)
    <div class="col-4 mt-2">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                
                <h5 class="card-title">{{ $new->title[session('lang')] }}</h5>
                <p class="card-text">{{ $new->description[session('lang')] }}</p>
                <a href="#" class="btn btn-primary">@lang('menu.more')</a>
            </div>
        </div>
    </div>
    @endforeach
</div>


<div class="mt-2">
    {{$news->links()}}
</div>
@endsection