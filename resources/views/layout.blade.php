<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link  href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link  href="style/bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <title>Application test</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- <a class="navbar-brand" href="#">Actif</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacter</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Connexion</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">cherche</button>
    </form>
  </div>
</nav>

<div class="container">
  <div class="starter-template" style="padding-top: 40px;">
     <div class="row">
        <div class="col-sm-6">
          @yield('content')
        </div> 
        
     </div>
    
  </div>
</div>
</body>
</html>