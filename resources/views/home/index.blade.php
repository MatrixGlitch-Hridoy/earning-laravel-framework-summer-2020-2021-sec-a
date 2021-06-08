<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to home page {{$name}}</h1>
    <a href="{{route('createUser')}}">Create Users</a>
    <a href="{{route('userList')}}">View All Users</a>
    <a href="{{route('logout')}}">
        <input type="submit" name="logout" value="Logout"></input>
    </a>
</body>
</html>