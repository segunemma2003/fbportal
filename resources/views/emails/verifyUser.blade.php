<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>Welcome {{$user['name']}} to Ighub boost your business(BYB)</h2>
<br/>
Your registered email-id is {{$user['email']}} and your password is password, You are required to click on the below link to verify your email account
<br/>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a>
</body>
 
</html>