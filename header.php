<header>
    <nav>
        <h2 class="vp-logo">
            <i href="index.php" class="fas fa-graduation-cap"></i>
            <a href="index.php">EDU-BTS</a>
        </h2>
        <div class="will">
            <div class="catalogue">
                <a href="#">CATALOGUE</a>
                <ol class="sub-themes">

                    <li>
                        <h1>MATIERES</h1>
                    </li>
                    <li>
                        <a href="#">Mathématique pour l'informatique</a>
                    </li>
                    <li>
                        <a href="#">Culture économique juridique et managerial</a>
                    </li>
                    <li>
                        <a href="#">Anglais</a>
                    </li>
                    <li>
                        <a href="#">Cybersécurité des services informatiques</a>
                    </li>
                    <li>
                        <a href="#">Option SLAM</a>
                    </li>
                    <li>
                        <a href="#">Atelier de professionnalisation</a>
                    </li>
                    <li>
                        <a href="#">Atelier de professionnalisation</a>
                    </li>


                </ol>
            </div>

            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Rechercher...">
                <button onclick="search()">Rechercher</button>
            </div>

            <div id="searchResults">
                <!-- Les résultats de la recherche seront affichés ici -->
            </div>

        </div>





        <div class="ion-icon">

            <div class="catalogue-sio">
                <li><a href="#">BTS SIO</a></li>
                <div class="sub-theme">
                <?php if (isset($_SESSION['choice']) && $_SESSION['choice'] == "slam"){?> 
                        <div class="subtheme">
                        <a href="formation_slam.php">
                            <ol>SLAM - 1ere & 2ème Année</ol>
                        </a>
                    </div>
                   <?php }else if(isset($_SESSION['choice']) && $_SESSION['choice'] == "sisr"){?>
                    <div class="subtheme">
                        <a href="formation_sisr.php">
                            <ol>SISR - 1ere & 2ème Année</ol>
                        </a>
                    </div>
                  <?php  } else if(!isset($_SESSION['users_id'])) { ?>
                    <div class="subtheme">
                        <a href="formation_slam.php">
                            <ol>SLAM - 1ere & 2ème Année</ol>
                        </a>
                    </div>
                    <div class="subtheme">
                        <a href="formation_sisr.php">
                            <ol>SISR - 1ere & 2ème Année</ol>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var choixFormation = document.querySelector('select[name="choice"]');
                    var formationSlam = document.getElementById('formation_slam');
                    var formationSisr = document.getElementById('formation_sisr');

                    choixFormation.addEventListener('change', function() {
                        if (choixFormation.value === 'slam') {
                            formationSlam.style.display = 'block';
                            formationSisr.style.display = 'none';
                        } else if (choixFormation.value === 'sisr') {
                            formationSlam.style.display = 'none';
                            formationSisr.style.display = 'block';
                        } else {
                            formationSlam.style.display = 'none';
                            formationSisr.style.display = 'none';
                        }
                    });
                });
            </script>

            <ul>
                <li><a href="mon_activite.php">MON ACTIVITE</a></li>
                <li><a href="aide.php">BESOIN D'AIDE?</a></li>
                <li><a href="a_propos.php">A PROPOS</a></li>
                <?php if (!isset($_SESSION['users_id'])) : ?>
                    <li><a href="login.php">SERVICE CLIENT</a></li>
                <?php else : ?>
                    <li><a href="boutique.php">BOUTIQUE</a></li>
                <?php endif; ?>
            </ul>

            <button>
                <div class="bell">
                    <a href="">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                    <div class="notification">
                        <h5>Aucune nouvelle notification</h5>
                    </div>
                </div>

            </button>

            <button>
                <div class="button-panier">
                    <a href="panier.php">
                        <?php
                        // Vérifier si la variable de session est définie avant de l'utiliser
                        if (isset($_SESSION['edu_bts'])) { ?>
                            <!--     
        // Si la variable de session 'edu_bts' est définie, afficher la somme de ses éléments -->
                            <em class="total_panier"><?= array_sum($_SESSION['edu_bts']); ?></em>
                        <?php }
                        ?>

                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <div class="contenu-panier">
                        <h5>Votre panier est vide</h5>
                    </div>
                </div>
            </button>

        </div>
    </nav>
</header>