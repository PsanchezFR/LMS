<div id="containerLogin" class="row justify-content-center align-items-center container-fluid m-0">
    <form id="formLogin" method="post" class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-4 h-75 d-block d-sm-flex flex-column align-items-center">
        <i style="color: #005cbf" class="MaxSizedIconMd fas fa-address-card fa-6x my-auto d-none d-lg-block"></i>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input p-2" type="email" name="email" id="email">
            <label class="mdl-textfield__label" for="email">Email</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input p-2" type="password" name="password" id="password">
            <label class="mdl-textfield__label" for="password">Password</label>
        </div>
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mt-5">Register</button>

        <?php
        if(isset($_POST)){
            if(!empty($_POST['password']) && !empty($_POST['email'])){
                //Insert the informations into the DB
                try{
                    echo "<i style='color: #005cbf' class='fas fa-spinner fa-spin fa-pulse fa-2x'></i>";
                    $requette = $bdd->prepare('INSERT INTO user (email, password) VALUES (?, ?)');
                    $requette->bindValue(1, $_POST['email']);
                    $requette->bindValue(2, $_POST['password']);
                    $requette->execute();
                    header("Location: /auth/login");
                }
                catch(PDOException $e){
                    $logger->log($e->getMessage());
                    echo "<i style='color: red' class='fas fa-times fa-2x'></i>";
                }
            }
        }
        ?>

    </form>
</div>