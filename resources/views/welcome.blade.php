<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
<h1>1.<a href="{{ route('simple.calcolator') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Simple Calculator</a></h1>
<h1>2.<a href="{{ route('inventory.calculate') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Simple inventory</a></h1>
</body>

</html>
