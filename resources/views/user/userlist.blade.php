<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{route('homepage')}}">Back</a>
<a href="{{route('logout')}}">Logout</a>

<h1>User List</h1>
	<table border="1">
		<tr>
            <th>ID</th>
			<th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Type</th>
            <th>Action</th>
		</tr>

        @foreach($userlist as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['username']}}</td>
                <td>{{$user['password']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['type']}}</td>
                <td>
                    <a href="/user/details/{{$user['id']}}">Details</a>
                    <a href="/user/edit/{{$user['id']}}">Edit</a>
                    <a href="/user/delete/{{$user['id']}}">Delete</a>
                </td>
            </tr>
        @endforeach
	</table>

</body>
</html>