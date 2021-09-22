<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PRODUCTS</h1>
      {{-- <p> {{ $title }}</p>
    <p>{{ $description }}</p> compact functions--}}


{{-- 
    {{-- Loop through array wtih foreach --}}
{{-- @foreach($data as $item) 
{{-- Loops though data as an item --}}
{{-- <p>{{ $item }}</p>
@endforeach --}}

{{-- <p> {{ $products }}</p> --}}
    <a href="{{ route('products') }}"> Products</a>
    {{-- The above is for named routes. Pretty neat --}}
</body>
</html>