<? include_once "init.php"; ?>
<!DOCTYPE html>
<html lang="en">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="style/login.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>

</head>

<!-- <div class="login-box">


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
</div> -->

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5">

      <form method="post" action="class/login.php" >

       <div class="mb-md-5 mt-md-4 pb-5">

          <h2 class="fw-bold mb-2 text-uppercase  text-center">Se connecter</h2>
          <?if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-times-circle me-3"></i></strong><?  echo $_SESSION['message'];?>
              </div>
            <?
             
              unset($_SESSION['message']);
            }
            ?>

          <div class="form-outline form-white mb-4">
          <label class="form-label" for="typeEmailX">Nom ou Numero de telephone</label>

            <input type="text" name="userId" id="userId" required placeholder="Votre nom ou numero de telephone" class="form-control form-control-lg" />
          </div>

          <div class="form-outline form-white mb-4">
          <label class="form-label" for="typePasswordX">Mot de passe</label>

            <input type="password" placeholder="Votre Mot de passe" required name="password" id="password" class="form-control form-control-lg" />
          </div>

          <p class="small mb-5 text-right pb-lg-2"><a class="text-white-50" href="#!">Mot de passe oublier ?</a></p>

          <button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">Login</button>

          </div>
       </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>


<!-- page-wrapper -->
<!--------pop-up and modal code--------------->

<!--------pop-up and modal code--------------->
        
    
</body>
</html>