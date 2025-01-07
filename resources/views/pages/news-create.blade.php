@extends('layouts.main')

@section('content')
<h1>@lang('menu.create')</h1>
<form action="/news-store" method="POST">
    @csrf
    <label for="category_id">@lang('menu.category')</label>
    <select name="category_id" class="form-control mt-2">
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name[session('lang')]}}</option>
        @endforeach
    </select>

    <!-- UZ -->
    <label for="title-uz">(UZ)</label>
    <input type="text" id="title-uz" name="title[uz]" class="form-control mt-2" placeholder="@lang('menu.title')">
    <input type="text" name="description[uz]" class="form-control mt-2" placeholder="@lang('menu.description')">

    @error('title.uz')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <!-- RU -->
    <label for="title-ru">(RU)</label>
    <input type="text" id="title-ru" name="title[ru]" class="form-control mt-2" placeholder="@lang('menu.title')">
    <input type="text" name="description[ru]" class="form-control mt-2" placeholder="@lang('menu.description')">

    @error('title.ru')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <!-- EN -->
    <label for="title-en">(EN)</label>
    <input type="text" id="title-en" name="title[en]" class="form-control mt-2" placeholder="@lang('menu.title')">
    <input type="text" name="description[en]" class="form-control mt-2" placeholder="@lang('menu.description')">

    @error('title.en')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary mt-2">@lang('menu.submit')</button>
</form>




@endsection