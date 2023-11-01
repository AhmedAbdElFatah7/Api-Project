<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add.add')}}" method="POST">
        @csrf
        <label for="name">first name:</label><br>
        <input type="text" name="name" id="name"><br> <br>
        <label for="email">E-mail</label><br>
        <input type="text" name="email" id="email"><br> <br>
        <label for="password">password:</label><br>
        <input type="password" name="password" id="password"><br> <br>
        <input type="submit" value="Add">
    </form>
</body>
</html>