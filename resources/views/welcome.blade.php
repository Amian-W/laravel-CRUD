<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav>
        <ul class="nav justify-content-center bg-secondary">
            <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('products.index') }}" aria-current="page">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('clients.index') }}">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('sales.index') }}">Sales</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
