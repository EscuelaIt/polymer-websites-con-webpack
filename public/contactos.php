<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>
  <header>
    <div class="superheader">
      <h1>Contactos</h1>
      <my-avatar src="https://desarrolloweb.com/archivoimg/general/1629.jpg"></my-avatar>
    </div>
    <my-nav>
      <ul>
        <li><a href="/">Portada</a></li>
        <li><a href="/contactos.php">Contactos</a></li>
        <li><a href="/panel.php">Panel</a></li>
      </ul>
    </my-nav>
  </header>
  
  <contacto-list></contacto-list>
  <!-- <contacto-card 
    nombre="pepelotes" 
    email="pepe@pepe.es"
    fecha="1545161625105"
  ></contacto-card> -->
  
  <script src="/js/webcomponentsjs/webcomponents-loader.js"></script>
  
  <?php
  $servidor_desarrollo = true;
  if($servidor_desarrollo) {
    echo '<script src="http://localhost:9009/scripts/index.js"></script>';
  } else {
    echo '
      <script type="text/javascript" src="js/index-es5.js" nomodule>
      </script><script type="module" src="js/index-es6.js"></script>
      ';
  }
  ?>
</body>
</html>