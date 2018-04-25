<div id="containerLogin" class="row justify-content-center align-items-center container-fluid m-0">
    <form id="formLogin" method="post" class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-4 h-75 d-block d-sm-flex flex-column align-items-center">
        <i style="color: #005cbf" class="MaxSizedIconMd fas fa-lock fa-6x my-auto d-none d-lg-block"></i>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input p-2" type="text" name="email" id="email" required>
            <label class="mdl-textfield__label" for="email">email</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input p-2" type="text" name="password" id="password" required>
            <label class="mdl-textfield__label" for="password">Password</label>
        </div>
        <label id="remember" class="mdl-switch mdl-js-switch mdl-js-ripple-effect d-flex m-auto w-25 justify-content-center" for="switch-1">
            <input type="checkbox" id="switch-1" class="mdl-switch__input" unchecked>
            <span class="mdl-switch__label"> Remember me</span>
        </label>
        <div class="mdl-tooltip mt-3" for="remember">
            Remember my email and password<br>for future connections.
        </div>
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mt-3">Connect !</button>
        <a href="/auth/register" type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">Register</a>

        <!--PHP LOGIC-->
        <?php
        if(isset($_POST)){

            if(!empty($_POST['email']) && !empty($_POST['password'])){

                try{
                    //Check the email and password submitted in the DB
                    $request = $bdd->prepare('SELECT id, email, password FROM user WHERE email=:email AND password=:password');
                    $request->bindParam('email', $_POST['email'], PDO::PARAM_STR);
                    $request->bindParam('password', hash('sha256', $_POST['password']), PDO::PARAM_STR);
                    $result = $request->execute();
                    $currentUser = $request->fetch();

                    //if there is a matching user redirect to thanking page.
                    if( $currentUser != false ){

                        $userId = $currentUser['id'];

                        //update the last login dateTime
                        $request = $bdd->prepare('UPDATE user SET last_login=CURRENT_TIMESTAMP WHERE id=:id');
                        $request->bindParam('id', $userId, PDO::PARAM_INT);
                        $request->execute();

                        echo "<i style='color: #005cbf' class='fas fa-spinner fa-spin fa-pulse fa-2x my-2'></i>";
                        $_SESSION['user_id'] = $userId;
                        header("Location: /auth/thanks");
                    }
                    else{
                        $logger->log("Failed connection");
                        echo "<i style='color:red' class='fas fa-times fa-2x my-2'></i>";
                    }
                }
                catch(PDOException $e){
                    $logger->log($e->getMessage());
                    echo "<i style='color: red' class='fas fa-times fa-2x my-2'></i>";
                }

            }
        }
        ?>
    </form>
</div>


