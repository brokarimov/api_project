<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/userPage">@lang('menu.all')</a>
                    </li>
                    @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/categoryFilter/{{$category->id}}">{{$category->name[session('lang')]}}</a>
                    </li>

                    @endforeach

                    <li class="nav-item">
                        <select class="form-select" onchange="window.location.href=this.value;">
                            <option value="{{ url('/lang/uz') }}" {{ app()->getLocale() == 'uz' ? 'selected' : '' }}>UZ</option>
                            <option value="{{ url('/lang/ru') }}" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>RU</option>
                            <option value="{{ url('/lang/en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                        </select>
                    </li>


                </ul>
                <ul class="navbar-nav me mb-2 mb-lg-0">
                    @if (auth()->check())
                    <li class="nav-item"><a class="nav-link" href="/logout">@lang('menu.logout')</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="/login">@lang('menu.login')</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register">@lang('menu.register')</a></li>
                    @endif


                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>