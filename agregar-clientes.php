<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo-cliente.css">

    <title>Cliente</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    
    
   <form action="clientes.php" method="POST">
       <div class="container">
           <div class="row">
               <div class="col-6">
                   <input class="form-control" type="text" name="Nombre_Cliente" id="Nombre_Cliente" placeholder="Nombre Completo">
               </div>
               <div class="col-6">
                   <input class="form-control" type="text" name="Numero_Documento" id="Numero_Documento" placeholder="Documento">
               </div>
               
               <div class="row mb-3">
                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input type="email" class="form-control" name="Email" id="Email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Fecha_Nacimiento" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
                    <div class="col-9">
                        <input type="date" class="form-control" name="Fecha_Nacimiento" id="Fecha_Nacimiento">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="Fecha_Creacion" class="col-sm-2 col-form-label">Fecha Creacion</label>
                    <div class="col-9">
                        <input type="date" class="form-control" name="Fecha_Creacion" id="Fecha_Creacion">
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </div>
           </div>
       </div>
   </form>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
    
   
  </body>
</html>