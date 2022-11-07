<!Doctype html>
<html>
    <body>
    <h2>List 1:</h2>
        @foreach ($name as $names)
            <p>{{ $names->name }}</p>
        @endforeach
    <h2>List 2:</h2>
        @foreach ($var as $vars)
            <p>{{ $vars->name }}</p>
        @endforeach
    </body>
</html>