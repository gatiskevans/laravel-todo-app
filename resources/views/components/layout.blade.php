<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tasks</title>
</head>
<body>

    @yield('contents')

    @if (session()->has('success'))
        <div style="color: green">
            {{ session()->get('success') }}
        </div>
    @endif

</body>
</html>
