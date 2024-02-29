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



<body>
<div class="container-fluid">
  
  <div class="row">
    <div class="col-md-12">
      <strong  class="fs-1" >Gestion des Utlisateurs</strong>
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
           

            <div class="row titre">
            <span class="ajoutter" ><h3>Ajouter un nouveau Utlisateur </h3><a href="#"><i class="fa-solid fa-circle-plus btn primary "title="Ajouter Nouveau Agent" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i></a></span>
          <!-- <? include_once("CRUD/singIn.php"); ?> -->

            </div>

              
          <div class="container-fluid">
          </div>
            <table id="example" class="display2 nowrap" style="width:100%">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>N dossier</th>
                  <th>Nom ou Raison social</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>forme juridique</th>
                  <th>Action</th>

              </tr>
          </thead>
          <tbody>
          
            <tr>
                <td>1</td>
                <td>46468622</td>
                <td>TMK</td>
                <td>tmk@congo.fr</td>
                <td>068998599889</td>
                <td>personne moral</td>
                
                <!-- <td><span class="badge bg-success">new</span>
                <a href=""><i class="fa-solid fa-user-check"></i></a>
                <a href=""><i class="fa-solid danger fa-user-xmark"></i></a>

              </td> -->
                <td>
                  <!-- <a href="" type="button" data-bs-toggle="modal" title="plus de details" ><i class="fa-solid pink fa-user-plus btn"></i></a> -->
                <a href="#edit_<? echo $user['id'];  ?>" type="button" data-bs-toggle="modal"><i class="fa-solid success fa-pen-to-square btn "title="Modifier Assujetti" ></i></a>
                <!-- <a href="#delete_<?echo $user['id'];  ?>" type="button" data-bs-toggle="modal"><i class="fa-solid btn fa-share-from-square" title="conserver" style="color: #fe7171; " ></i></a> -->
                </td>
                <!-- <? include("CRUD/update_deleteModal.php");?> -->
                
            </tr>
            <tr>
                <td>2</td>
                <td>6419a4s9d84as</td>
                <td>fly  gongo</td>
                <td>gongo@congo.fr</td>
                <td>0355989887</td>
                <td>personne physique</td>
                
                <!-- <td><span class="badge bg-success">new</span>
                <a href=""><i class="fa-solid fa-user-check"></i></a>
                <a href=""><i class="fa-solid danger fa-user-xmark"></i></a>

              </td> -->
                <td>
                  <!-- <a href="" type="button" data-bs-toggle="modal" title="plus de details" ><i class="fa-solid pink fa-user-plus btn"></i></a> -->
                <a href="#edit_<? echo $user['id'];  ?>" type="button" data-bs-toggle="modal"><i class="fa-solid success fa-pen-to-square btn "title="Modifier Assujetti" ></i></a>
                <!-- <a href="#delete_<?echo $user['id'];  ?>" type="button" data-bs-toggle="modal"><i class="fa-solid btn fa-share-from-square" title="conserver" style="color: #fe7171; " ></i></a> -->
                </td>
                <!-- <? include("CRUD/update_deleteModal.php");?> -->
                
            </tr>
            <tr>
                <td>3</td>
                <td>64949asd</td>
                <td>julien mwiza</td>
                <td>julien@gmail.fr</td>
                <td>0355989888899</td>
                <td>personne vendeur</td>
                
                <!-- <td><span class="badge bg-success">new</span>
                <a href=""><i class="fa-solid fa-user-check"></i></a>
                <a href=""><i class="fa-solid danger fa-user-xmark"></i></a>

              </td> -->
                <td>
                  <!-- <a href="" type="button" data-bs-toggle="modal" title="plus de details" ><i class="fa-solid pink fa-user-plus btn"></i></a> -->
                <a href="#edit_<? echo $user['id'];  ?>" type="button" data-bs-toggle="modal"><i class="fa-solid success fa-pen-to-square btn "title="Modifier Assujetti" ></i></a>
                <!-- <a href="#delete_<?echo $user['id'];  ?>" type="button" data-bs-toggle="modal"><i class="fa-solid btn fa-share-from-square" title="conserver" style="color: #fe7171; " ></i></a> -->
                </td>
                <!-- <? include("CRUD/update_deleteModal.php");?> -->
                
            </tr>
           
          </tbody>
      </table>
          </div>
          
          </div>
        </div>
      </div>



      <!------------mes declarations-------------->
    
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js" ></script>
<script type="text/javascript">
  var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
  trigger: 'focus'
})
</script>
<script>
  new DataTable('#example, #example1', {
    responsive: {
        details: {
            renderer: function (api, rowIdx, columns) {
                let data = columns.map((col, i) => {
                    return col.hidden
                        ? '<tr data-dt-row="' +
                                col.rowIndex +
                                '" data-dt-column="' +
                                col.columnIndex +
                                '">' +
                                '<td>' +
                                col.title +
                                ':' +
                                '</td> ' +
                                '<td>' +
                                col.data +
                                '</td>' +
                                '</tr>'
                        : '';
                }).join('');
 
                let table = document.createElement('table');
                table.innerHTML = data;
 
                return data ? table : false;
            }
        }
    }
});
</script>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</body>
</main>