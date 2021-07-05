<?php

//include 'views/layout/loader.php';

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caldeiras Eit</title>
     <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <!-- Projeto Casa da Caldeira -->
      <link rel="shortcut icon" type="image/x-icon" href="src/caldeira.ico">
      <link href='assets/css/bootstrap.min.css' rel='stylesheet'>
      <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
      <link href='assets/css/main.css' rel='stylesheet'>
      <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">  

     <!-- google fonts -->
     <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap" rel="stylesheet">
      <script type='text/javascript' src='assets/js/jquery.min.js'></script>
      <script type='text/javascript' src='assets/js/index.js'></script>
      <script type='text/javascript' src='assets/js/bootstrap.bundle.min.js'></script>
      <script src="assets/js/TweenMax.min.js"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>







<?php

               //Header principal
              include 'views/layout/header/header.php' ; 
?>



<body>
<?php

               include 'views/layout/home/slide-img.php';
               
               //require_once './views/about.php';
               
               include 'views/layout/home/work.php';

               include 'views/layout/home/pilares.php';
               
               include 'views/layout/home/fornalha.php';
               
               include 'views/layout/home/project.php';

               
               
               include 'views/layout/home/why.php';
               
               include 'views/layout/home/faq.php';
               
               
               include 'views/layout/home/contato.php';
               //require_once './views/atendimento.php';
               
               
               include 'views/layout/footer/footer.php';
               
               include 'views/layout/home/bnds.php';
               
               include 'views/layout/footer/seo-footer.php' ; 
                
               include 'views/layout/js.php'
  ?>



  </body>
</html>


        
               
              
             
 