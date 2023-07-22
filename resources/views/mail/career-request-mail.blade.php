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
    
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ $titlePage ?? 'Pagina senza titolo' }}</title>

    {{-- @vite (['resources/css/app.css','resources/js/app.js']) --}}
    <style>
      
      .bg-custom{
        background-color: #ebd2cf;
      }

      .logo-mail{
        height: 70px;
        width: 70px;
      }

      .mail_button {
        padding: 0.75em 1.6em;
        width: fit-content;
        width: -moz-fit-content; /* Prefijo necesario para Firefox  */
        font-variant: small-caps;
        font-weight: bold;
        border-radius: 0.45em;
        background-color: hsl(0, 0%, 0%);
        font-family: "Montserrat", sans-serif;
        font-size: 0.9rem;
        color: #f8bdb6;
      }

      .bg-search:hover{
        background-color: #8f8f8f;
        color: black;
      }

      .text-footer{
        --bs-nav-link-color: #939397;
        --bs-nav-link-hover-color: #fff;
      }

      .bg-custom-dark{
          background-color: #28292d;
      }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
  <body>
    <div class="container-fluid bg-custom pb-5 text-center">
      <div class="text-center py-5">
        <img src="{{ $message->embed(public_path() . '/img/logo-mail.png') }}" class="logo-mail">
      </div>
      
      <h1>We have received a request</h1>
      <h4>Job application for {{$info['role']}} role</h4>
      <p>Received from {{$info['email']}}</p>
  
      <h4>Message: </h4>
      <p>{{$info['message']}}</p>
      <a href="{{route('admin.dashboard')}}" class="text-decoration-none mail_button bg-search">The Aulab Post</a>
    </div>
    
    

    <x-footer />
  </body>
</html>