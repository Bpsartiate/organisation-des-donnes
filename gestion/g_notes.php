<? include_once "init.php";
include_once "class/note.php";
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
        <div class="row">
          <div class="col-md-8">
            <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label text-uppercase">territoire ou ville :</label>
            </div>
            <div class="col-auto">
            <span id="passwordHelpInline" class="form-text">
                <? echo $_SESSION['note']->ville ?>
              </span>
            </div>
            </div>
            <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label text-uppercase">centre ou antenne :</label>
            </div>
            <div class="col-auto">
            <span id="passwordHelpInline" class="form-text">
                <? echo $_SESSION['note']->centre  ?>
              </span>  </div>

            </div>

          </div>
          <div class="col-md-4">
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <label for="inputPassword6" class="col-form-label text-uppercase">date :</label>
              </div>
              <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                  <? echo $_SESSION['note']->dateNote ?>
                </span>  </div>
            </div>
            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <label for="inputPassword6" class="col-form-label text-uppercase">Numero :</label>
              </div>
              <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
              <? echo $_SESSION['note']->numNote ?>
                </span>  </div>

            </div>
          </div>
        </div>

        <!-- body -->
        <div class="row justify-content-center">
          <div class="col-md-4"><h3 class="text-uppercase" >note de perception</h3>

          </div>            
        </div>
        <ol>
          <!-- service taxateur -->
          <div class="taxateur" id="taxateur" >
            <li class="text-uppercase">A remplire par le service taxateur</li>
            <div class="row">
              <div class="col-md-6">

                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Note de debit ou de taxation</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" value="<? echo $_SESSION['note']->noteDebit ?>" class="form-control" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Acte generateur(libelle)</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" value=" <? echo $_SESSION['note']->acteGenerateur ?>" class="form-control" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Acticle budgetaire</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->article ?>"  aria-describedby="passwordHelpInline">
                  </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Nombre de piece justificatives</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->acteGenerateur ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Taux et reference du texte</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->tauxRefTexte ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Montan a payer</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" placeholder="Montan a paye en chiffre" class="form-control" value=" <? echo $_SESSION['note']->montantTaxateur ?> <? echo $_SESSION['note']->monnaieTaxateur ?> " aria-describedby="passwordHelpInline">
                  </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Montan a paye en Lettre</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control" value=" <? echo $_SESSION['note']->enLettre ?>" placeholder="Montant a payer en toute lettre" ></input>                  </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Nom de l'Agent taxateur</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->nomTaxateur ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                <br>
                   <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Qualite</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->qualite ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                <br>

              </div>
              <!-- second side -->
              <div class="col-md-6">
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Nom ou raison social</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->nomOuRaisonSocial ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Pour compte</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->assujettiCompte ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Ville</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->ville ?>" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Commune</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->commune ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Quartier</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->quartier ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Avenue</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->avenue ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="number" class="col-form-label">Numero</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->numParc ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">B.P</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->acteGenerateur ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="tel" class="col-form-label">Telephone</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->tel ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Email</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value="" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Precision</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->precision ?>" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
              </div>
          </div>
          <br>
          <br>
          <!-- service ordonnateur -->
          <div class="ordonnateur" id="ordonnateur" >
            <li class="text-uppercase">A remplire par le service ordonnateur</li>
            <div class="row">
              <div class="col-md-12">
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Date de recpetion</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                  <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Avis motive de l'ordonnateur</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->avisMotiveOrdo ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                  <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Montant viser en chiffre </label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->montantOrdo ?><? echo $_SESSION['note']->monnaieOrdo ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                  <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Montant viser en lettre</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->enLettreOrdo ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                  <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Date visa</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->dateVisaOrdo ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                  <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Nom et signature de l'ordonnateur</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value="" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                
              </div>

            </div>
          </div>
          <!-- service comptable -->
          <div class="div" id="comptable" >
            <li class="text-uppercase">A remplire par service comptable</li>
            <div class="row">
              <div class="col-md-12">
                <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="date" class="col-form-label">Date de pris en charge</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->dateApurement ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                  <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">Code de designation du bureau comptable</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value="" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                  <div class="row g-3 align-items-center">
                  <div class="col-md-4">
                    <label for="text" class="col-form-label">En lettre</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="text" class="form-control" value=" <? echo $_SESSION['note']->enLettreBanque ?>" aria-describedby="passwordHelpInline">
                  </div>
                </div>
                  <br>
                  <h3 class="text-uppercase" >Mode de payement</h3>
                  <ul>
                    <li>
                      <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                          <label for="text" class="col-form-label">Especes</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" id="text" class="form-control" value="" aria-describedby="passwordHelpInline">
                        </div>
                      </div>
                      <br>
                    </li>
                    <li>
                      <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                          <label for="text" class="col-form-label">Cheque bancaire</label>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4">Numero
                              <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                            </div>
                            <div class="col-md-4">du
                              <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                            </div>
                            <div class="col-md-4">de la banque
                              <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                    </li>
                    <li>
                      <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                          <label for="text" class="col-form-label">Cheque postal</label>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4">Numero
                              <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                            </div>
                            <div class="col-md-4">du
                              <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                            </div>
                            <div class="col-md-4">de la banque
                              <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                    </li>
                  </ul>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Numero de quitance</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Date de perception</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Nom du comptable</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>
                  <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                      <label for="text" class="col-form-label">Date</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" id="text" class="form-control" value=" " aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <br>

              </div>

            </div>
          </div>

          </ol>
            
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