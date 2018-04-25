<!DOCTYPE html>
<html lang="en">
<head>
	<title> Simplon LMS </title>
    <!--main style-->
    <link rel="stylesheet" href="/view/assets/css/style.css">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!--awesome font-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <!--    material design lite -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!--material design lite override-->
    <link rel="stylesheet" href="/view/assets/css/mdl-override.css">
<head>
    <body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color: silver; background-color: #4159c1;">
        <div class="logo my-1"><i style="color: #005cbf" class="fab fa-playstation fa-3x my-auto"></i></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--  Items on left-->
            <ul class="navbar-nav mr-auto px-5">
                <li class="nav-item active"><a class="nav-link" href="#">Placeholder<span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Placeholder</a></li>
            </ul>
            <!--  Items on right-->
            <ul class="navbar-nav ml-auto px-5">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Placeholder</a><a class="dropdown-item" href="#">Placeholder</a>
                        <?PHP if(isset($USER)){ ?>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="/auth/logout">Log out</a>
                        <?PHP } else {} ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>