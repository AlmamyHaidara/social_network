<?php
require 'partials/header.php';

require 'partials/navabar.php';?>
    <h2 class="text-center">

    </h2>
    <div class="row">
        <div class="col-8">
            <?php
            var_dump( $_POST)
            ?>
        </div>
        <div class="col-4">
            <div class="bg-light mt-2 p-3">
                <div class="text-center">
                    <i class="fa fa-user fa-4x"></i>
                    <h2>
                        Se Connecter
                    </h2>
                </div>
                <form action="register.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="name">Identifiant :</label>
                        <input type="text" name="username" placeholder="Identifiant" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Mot de passe :</label>
                        <input type="password" name="password" placeholder="Prenom" class="form-control">
                    </div>
                    <div class="text-center mt-2">
                        <input type="submit" value="Connexion" name="login" class="btn btn-success btn-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
require 'partials/footer.php';