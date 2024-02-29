<? include_once "init.php"; ?>
<!DOCTYPE html>
<html lang="en">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="style/login.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>

</head>
<?

if(isset($_SESSION['message'])){
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><i class="fa-solid fa-circle-check"></i></strong><?  echo $_SESSION['message'];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?
 
  unset($_SESSION['message']);
}

?>
<div class="login-box">


  <h2>Se connecter</h2>
  <form method="post" action="class/login.php" >
    <div class="user-box">
      <input type="text" name="userId" value=""  required="yes">
      <label>Nom d'utisateur</label>
    </div>
    <div class="user-box">
      <input type="password" value="" name="password" autocomplete="no" required="yes">
      <label>Mot de passe</label>
    </div>
    <input type="submit" name="login" >
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Connection
  </input>
  </form>
</div>

<!-- page-wrapper -->
<!--------pop-up and modal code--------------->

<!--------pop-up and modal code--------------->
        
    
</body>
</html>