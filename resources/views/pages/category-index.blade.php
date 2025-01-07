@extends('layouts.main')

@section('content')

@php
$lang = 'uz';
if(session('lang')){
$lang = session('lang');
}
@endphp
<a href="/category-create" class="btn btn-primary mt-3">@lang('menu.create')</a>
<table class="table table-striped table-bordered mt-3">
    <thead>
        <tr>
            <th>@lang('menu.id')</th>
            <th>@lang('menu.name')</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($models as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name[$lang]}}</td>
            
        </tr>
        @endforeach

    </tbody>
</table>

@endsection