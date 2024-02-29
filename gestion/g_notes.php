<? include_once "init.php";
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT') ?>
<main class="page-content">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="style/search.css">



<body>
<div class="container-fluid">
  
  <div class="row">
    <div class="col-md-12">
      <strong  class="fs-1" >Gestion des notes de perception</strong>
    </div>
    <br>
              <br>
              <br>
              <br>
  </div>
  <!-----------message-------->
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
  <div class="row">
            <div class="col-xl-12 col-md-12">
            <div class="card">
          <div class="card-content">
            <div class="card-body cleartfix">
           
<!-- 
            <div class="row titre">
            <span class="ajoutter" ><h3>Ajouter un nouvel Assujetti </h3><a href="#"><i class="fa-solid fa-circle-plus btn primary "title="Ajouter Nouveau Agent" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i></a></span>
          <? include_once("CRUD/singIn.php"); ?>

            </div> -->

              
          <div class="container-fluid ajoutter">
          </div>
        <div class="row justify-content-center ">
            <div class="col-md-4">
                <div class="container">
                    <input type="search" title="recherche une notes" placeholder="Rechecher...">
                <div class="search"></div>
                </div>
            
            </div>
            <div class="col-md-6">
                <div class="add">
                    <span class="ajoutter" ><h3>Ajouter une note Manuelle </h3><a href="#"><i class="fa-solid fa-circle-plus btn primary "title="Ajouter Nouveau Agent" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i></a></span>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="Text" class="form-control" id="inputPassword">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="Text" class="form-control" id="inputPassword">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="Text" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
            
        </div>
            
        <div class="row d-flex justify-content-end">
            <div class="col-md-6">
                <button type="submit" class="btn btn-lg btn-success">Enregister</button>
            </div>
        </div>
          </div>
          
          </div>
        </div>
      </div>



    
  </div>

</div>

</body>
</main>