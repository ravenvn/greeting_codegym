<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Translation</title>
</head>
<body>
    @if ($translation)
        <div style="color: green;font-weight: bold; font-size:40px;">{{ $translation }}</div>
        <div>{{ $age }}</div>
    @else
        <div style="color: red;">Not Found!</div>
    @endif
    @php
        $keyword = 'hello'; $age = 44;
    @endphp
<div><a href="{{ route('Vinh', ['search' => $keyword, 'age' => $age]) }}">Link</a></div>
<div><a href="{{ '/translation/' . $keyword . '/'. $age }}">Link3</a></div>
</body>