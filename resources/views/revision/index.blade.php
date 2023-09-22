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
     
    
   <!--  @if (session("correcto"))
      <div class="alert alert-success">{{session("correcto")}}</div>
      @endif
      @if (session("incorrecto"))
      <div class="alert alert-danger">{{session("incorrecto")}}</div>
      @endif 
      <script>
        var res=function(){
          var not=confirm("¿Estas seguro de eliminar?");
          return not;
        }
      </script>-->
 
    
    
      
      <!--<button class="btn btn-success" btn-sm data-bs-toggle= "modal" data-bs-target="#modalregistrar">Asignar revisor </button> -->
      
      <!-- Modal registro de datos
      <div class="modal fade" id="modalregistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Asignar los revisores</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            
                          </div>
                          <div class="modal-body">
                            <form action="{{route("crud.create")}}" method="post">
                              @csrf
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Codigo del artículo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                name="txtcodigo">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Titulo del artículo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                name="txtnombre">
                              </div><div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">nombre del revisor</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                name="txtprecio">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">fecha de asignasión</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                name="txtcantidad">
                              </div>                             
                              <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                          </div>
                            </form>
                          </div>                          
                        </div>
                      </div>
                    </div>-->
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
          <!-- <button class="btn btn-success" btn-sm data-bs-toggle= "modal" data-bs-target="#modalregistrar">Añadir Artículo </button>-->
        
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/revisor">Revisores</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar artículo" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
    <!-- FIN NAVEGADOR-->
    <h3>REVISIONES</h3>
      <div class="p-5 table-responsive">         
        <table class="table table-striped-columns">
            <thead class="table table-primary">
                <tr>
                  <th scope="col">Titulo</th>
                  <th scope="col">revisor</th>
                  <th scope="col">fecha de recepción</th>
                  <th scope="col">fecha de devolución</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach ($revisiones as $item)
                <tr>
                  <th>{{$item->Titulo}}</th>
                  <td>{{$item->nombre}}</td>
                  <td>{{$item->fecha_entrega}}</td>
                
                </tr> 
                @endforeach             
                
              </tbody>
        </table>
    </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>