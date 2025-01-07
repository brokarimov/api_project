@extends('layouts.main')

@section('content')
<h1>@lang('menu.create')</h1>
<form action="/category-store" method="POST">
    @csrf
    <input type="text" name="name[uz]" class="form-control mt-2" placeholder="UZ">

    @error('name.uz') 
    <div class="text-danger">{{ $message }}</div> 
    @enderror

    <input type="text" name="name[ru]" class="form-control mt-2" placeholder="RU">

    @error('name.ru') 
    <div class="text-danger">{{ $message }}</div> 
    @enderror

    <input type="text" name="name[en]" class="form-control mt-2" placeholder="EN">

    @error('name.en')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary mt-2">@lang('menu.submit')</button>
</form>


@endsection