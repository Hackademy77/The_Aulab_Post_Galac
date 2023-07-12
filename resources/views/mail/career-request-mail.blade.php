<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>We have received a request</h1>
    <h4>Job application for {{$info['role']}} role</h4>
    <p>Received from {{$info['email']}}</p>

    <h4>Message: </h4>
    <p>{{$info['message']}}</p>
</body>
</html>