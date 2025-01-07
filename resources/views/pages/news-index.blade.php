@extends('layouts.main')

@section('content')

@php
$lang = 'uz';
if(session('lang')){
$lang = session('lang');
}
@endphp
<a href="/news-create" class="btn btn-primary mt-3">@lang('menu.create')</a>
<table class="table table-striped table-bordered mt-3">
    <thead>
        <tr>
            <th>@lang('menu.id')</th>
            <th>@lang('menu.title')</th>
            <th>@lang('menu.description')</th>
            <th>@lang('menu.category')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($models as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->title[$lang]}}</td>
            <td>{{$model->description[$lang]}}</td>
            <td>{{$model->categories->name[$lang]}}</td>


        </tr>
        @endforeach

    </tbody>
</table>
<div>
    {{$models->links()}}
</div>
@endsection