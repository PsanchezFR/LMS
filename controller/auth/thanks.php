<meta http-equiv="refresh" content="3;url=../dashboard">
<div id="containerLogin" class="row justify-content-center align-items-center container-fluid m-0">
    <div id="formLogin"class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-4 h-75 d-block d-sm-flex flex-column align-items-center">
        <i style="color: #005cbf" class="MaxSizedIconMd fas fa-hand-spock fa-6x my-auto d-none d-lg-block"></i>
        <h1 class="mb-5"> Welcome
            <?PHP

            if($USER->firstname != NULL){
                echo " " . $USER->lastname;
            }
            else{
                echo "user n° " . $_SESSION['user_id'];
            }

            ?>.
        </h1>
    </div>
</div>

