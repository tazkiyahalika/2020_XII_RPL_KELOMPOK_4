<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ url('account/profile/'.Auth::User()->usr_id.'/')}}" method="POST">
@csrf
	<tr>
		<td>{{$user->usr_name}}</td>
		<td>{{$user->usr_email}}</td>
		<td></td>
	</tr>
</form>

</body>
</html>