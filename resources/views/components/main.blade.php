<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])  
    <title>WebSite</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-light border border-bottom-5 border-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToUSkC-VWcC2rQW1QLZJqzq2zIp0dgfaxTaQ&s" style="cover no-repeat"></a>
          
          <div class="collapse navbar-collapse align-self-end" id="navbarNav">
            <ul class="navbar-nav d-flex space-between float-end">
              <li class="nav-item ">
                <a class="nav-link active fw-bold fs-2 text-warning " aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active fw-bold fs-2  text-warning" href="{{route('lista')}}">Articoli</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      {{$slot}}
</body>
</html>