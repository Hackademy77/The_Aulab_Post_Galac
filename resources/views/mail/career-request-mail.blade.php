{{-- <!DOCTYPE html>
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
    <x-footer />
</body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @vite (['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ $titlePage ?? 'Pagina senza titolo' }}</title>

</head>
  <body>
    <div class="container-fluid bg-custom pb-5 text-center">
      <div class="text-center py-5">
        <img src="{{asset('img/logo-mail.png')}}" class="logo-mail">
      </div>
      
      <h1>We have received a request</h1>
      <h4>Job application for {{$info['role']}} role</h4>
      <p>Received from {{$info['email']}}</p>
  
      <h4>Message: </h4>
      <p>{{$info['message']}}</p>
      <a href="{{route('admin.dashboard')}}" class="btn mail_button read">The Aulab Post</a>
    </div>
    
    

    <x-footer />
  </body>
</html>