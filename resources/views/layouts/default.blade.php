<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>

    @stack('before-style') <!-- menyisipkan style  -->
    @include('includes.style')
    @stack('after-style') 
</head> 
<body>
    <div class="container-fluid">
        <div class="row">
            @stack('before-content')
            @yield('content') <!-- tinggal add section ketika ingin menyisipkan content -->
            @stack('after-content')
        </div>
    </div>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</body>
</html>