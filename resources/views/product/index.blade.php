<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>This is product file</h3>
    {{-- <p>{{ $title }}</p>
    <p>{{ $credit }}</p> --}}


    {{-- @foreach ($data as $item)
        <p>
            {{ $item }}
        </p>
    @endforeach --}}

    <a href="{{ route('theuser') }} products">This is product</a>
</body>

</html>
