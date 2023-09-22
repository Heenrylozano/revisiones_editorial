<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REVISIONES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/108d475e7b.js" crossorigin="anonymous"></script>
  </head>
<body>
    <h1 class= "text-center" p-3>RECORD DE REVISORES</h1>   
    
   
    <!-- NAVEGADOR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
       <img src="https://yt3.googleusercontent.com/ytc/AOPolaSTWmWp4xiawW3zm21l5Ov7cHrwppictSEo9vwn5g=s176-c-k-c0x00ffffff-no-rj" class="img-thumbnail img-fluid" alt="logo"  width="100px">  
  </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Todas las Revistas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">DESAFIOS</a></li>
            <li><a class="dropdown-item" href="#">RPCS</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">INNOVACION</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Artículos</a>
          
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/revision">Revisiones</a>
          
        
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/revisor">Revisores</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar revisor" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
    <!-- FIN NAVEGADOR-->
    <h3>REVISORES</h3>  
    <div class="p-5 table-responsive">         
        <table class="table table-striped table-bordered table hover">
            <thead class="bg-primary text-white">
                <tr>
                  <th scope="col">Codigo</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">ORCID</th>
                  <th scope="col">Especialidad</th>
                  <th scope="col">Temas de interes</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach ($revisores as $item)
                <tr>
                  <th>{{$item -> cod_revisor}}</th>
                  <td>{{$item -> nombre}}</td>
                  <td>{{$item -> ORCID}}</td>
                  <td>
                  <a href="" class="btn btn-warning btn-sm"> <i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></a>
                  </td>
                  
                </tr> 
                @endforeach             
                
              </tbody>
        </table>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>