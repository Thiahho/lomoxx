<!DOCTYPE html>
      <html lang="en">
      <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>LOMOX</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="../css/estilo.css" rel="stylesheet"/>  
      <?php include_once('./componentes/menu.php') ?>
      </head>
  <body>
    <div class="container">
        <div class="build text-center">
          <div class="row"><!--div conenido del button-->
            <div class="btn-group">
                
                <button type="button" class="btn btn-primary">VACA</button>
                <button type="button" class="btn btn-primary">CERDO</button>
                <button type="button" class="btn btn-primary">POLLO</button>
                <button type="button" class="btn btn-primary">PROCESADOS</button>
                <button type="button" class="btn btn-primary">ELABORADOS</button>
                
            </div>
          </div>
        </div>  
        
        <div class="table">
        <table>
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Precio</th>
              <th scope="col">Stock</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="">1</th>
              <td>...</td>
              <td>...</td>
              <td>...</td> 
            </tr>
            <tr>
              <th scope="">2</th>
              <td>...</td>
              <td>...</td>
              <td>...</td> 
            </tr>
            <tr>
              <th scope="">3</th>
              <td>...</td>
              <td>...</td>
              <td>...</td> 
            </tr>
          </tbody>       
        </table>
        </div>
     
       
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>