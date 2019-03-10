<!DOCTYPE html>
<html>
<head>
    <title>
        @isset($title)
            {{ $title }} -
        @endisset
        {{ config('app.name') }}
    </title>
</head>
</html>