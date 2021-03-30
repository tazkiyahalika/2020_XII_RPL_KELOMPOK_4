<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@csrf
<form action="{{ url('account/profile/'.Auth::User()->usr_id.'/')}}" method="POST">
 @foreach($profile as $user)
	<tr>
		<td>{{$user->usr_name}}</td>
		<td>{{$user->usr_email}}</td>
		<td></td>
	</tr>
@endforeach
</form>

</body>
</html>