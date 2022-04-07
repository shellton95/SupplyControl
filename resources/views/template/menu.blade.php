<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <img style="height: 30px; width: 45px;"  class="ms-1"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNuPfX0mp5n7qSJDcAjuTZCG5Gf0uhS4741w&usqp=CAU" alt="">
            <ul class="navbar-nav ms-4">
              <li id="usuario" onclick="toggleNav(usuario)" class="nav-item">
                <a  class="nav-link" aria-current="page" href="/usuarios">Usuarios</a>
              </li>
              <li id="carro" onclick="toggleNav(carro)" class="nav-item">
                <a  class="nav-link" href="/carros">Carros</a>
              </li>
              <li id="registro" onclick="toggleNav(registro)" class="nav-item">
                <a   class="nav-link" href="/relatorio">Abastecimentos</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    
    @yield('user')
    @yield('cars')
    @yield('abastecimento')
    @yield('cadastroUsuario')
    @yield('cadveiculo')
    @yield('cadAbastecimento')
      
</body>
</html>