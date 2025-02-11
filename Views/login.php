<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="../img/favicon.png">

  <title>Dashboard BZ Algeria</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../css/style-dashbord.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />

  
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" method="post" action="../models/verifier_connexion.php">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input name="nom" type="text" class="form-control" placeholder="Nom d'utilisateur" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input name="pass" type="password" class="form-control" placeholder="Mot de passe">
        </div>
        <br>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Se connecter</button>
        <a class="btn btn-info btn-lg btn-block" href="inscription.php">S'inscrire</a>
        
      </div>
    </form>
   
  </div>


</body>

</html>
