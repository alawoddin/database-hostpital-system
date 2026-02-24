<!DOCTYPE html>
<html>
<head>
    <title>Activate License</title>
</head>
<body>

    <h2>Enter Product Key</h2>

    <form method="POST" action="/license">
        @csrf

        <input type="text" name="license_key" required>

        <button type="submit">Activate</button>
    </form>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

</body>
</html>