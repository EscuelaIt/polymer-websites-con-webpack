<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Polymer para sitios web</h1>
  <p>
    <?php
    echo phpversion();
    ?>
  </p>

  <contacto-card 
    nombre="pepe" 
    email="pepe@pepe.es"
    fecha="1545161625105"
  ></contacto-card>
  
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