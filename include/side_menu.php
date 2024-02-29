
<? include_once "init.php";
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT') ?>

<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="assujetti.php" title="Page d'accuiel">
        <img src="./img/data_science.png" class=" img-fluid" alt="home" id="btn"  ></span></a>

        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header" title="plus d'information" >
       <a href="admin.php">
       <div class="user-pic">
          <img src="./img/homme.png" alt="user">
        </div>
        <div class="user-info">

          <span class="user-name"><? echo $_SESSION['data']->nom?></span>
          <span class="user-role"><? echo $_SESSION['data']->role?></span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
        
       </a>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>PROCEDURE FISCALE</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fa fa-solid fa-user-tie"></i>
              <span>Utilisateur</span>
              <span class="badge top-2 text-bg-success border border-light rounded-circle">2</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="utilisateur.php">Gestion 1
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="#">Gestion 2</a>
                </li>
                <li>
                  <a href="#">Gestion 3</a>
                </li>
              </ul>
            </div>
            <li>

          <!-- <li>
            <a href="activite.php"><i class="fa fa-solid fa-sliders"></i>Centres</a>
          </li>
          <li> -->
            <a href="assujetti.php"><i class=" fa fa-solid fa-users-gear"></i>Assujetti</a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fa fa-solid fa-newspaper"></i>
              <span>Article Budgtaire</span>
              <span class="badge top-2 text-bg-danger border border-light rounded-circle">2</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="article_budgetaire.php">Gestion
                  </a>
                </li>
                <li>
                  <a href="#">En attente</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
            <i class="fa fa-solid fa-folder-tree"></i>
              <span>Repertoires</span>
              <span class="badge top-2 text-bg-success border border-light rounded-circle">5</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="rep1.php">Selon les quartier</a>
                </li>
                <li>
                  <a href="rep2.php">Activites dans les quartier</a>
                </li>
                <li>
                  <a href="rep3.php">Selon les recettes</a>
                </li>
                <li>
                  <a href="rep4.php">Proprieter fonciere</a>
                </li>
                <li>
                  <a href="rep5.php">Des Bailleurs,locataire etc</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li>
            <a href="addresse.php"><i class="fa fa-solid fa-location-dot"></i>Addresse</a>
          </li> -->
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fa-solid fa-clipboard"></i>
              <span>Note de perception</span>
              <!-- <span class="badge top-2 text-bg-danger border border-light rounded-circle">3</span> -->
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="note_de_perception.php" title="Impot foncier" >Gestion</a>
                </li>
                <li>
                  <a href="#">Gestion</a>
                </li>
                <li>
                  <a href="#" title="Releve de la retenue sur loyer" >Gestion</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Graphiques</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="sidebar-dropdown">
            <a href="#">
            <i class="fa fa-solid fa-layer-group"></i>
              <span>Bien recensser</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="bienImposable.php">Gestion</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Carte</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="header-menu">
            <span>Autre</span>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Docu</span>
              <span class="badge badge-pill badge-primary float-right">New</span>
            </a>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>calendrier</span>
            </a>
          </li> -->
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope" title="Notification"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="logout.php">
        <i class="fa fa-power-off" title="deconnecter" ></i>
      </a>
    </div>
  </nav>