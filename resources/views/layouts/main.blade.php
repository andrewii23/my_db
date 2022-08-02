<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <title>Andrew's Controller - @yield('title')</title>
</head>

<body>
    <header>
        <h1>Product :  @yield('title')</h1>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('product-list') }}">Product</a>
                </li>
                <li>
                    <a href="{{ route('shop-list') }}">Shop</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        Copyright Andrew's Database
    </footer>
</body>

</html>