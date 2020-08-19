@include('components.nav')
@include('sweetalert::alert')
<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
<title>@yield('title') - SIAMIK</title>

@yield('content')
