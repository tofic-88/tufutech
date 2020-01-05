
<div class="jumbotron" style="margin-bottom: 0px; padding-top: 10px; padding-right: 0px; background: white;">
    <div class="container-fluid topbar-elements">
        <div class="row">
            <div class="col-md-6">
                <!-- <p>Responsive Navbar with Bootstrap 4</p> -->
            </div>
            <div class="col-md-6" style="text-align: right; padding: 0px; margin: 0px;">
                <div>
                     <span>EN</span>&nbsp;
                     <a class="topbar-img-elements"><img src="images/icons8-notification-48.png" width=30px height=28px></a>&nbsp;
                     <a class="topbar-img-elements"><img src="images/icons8-read-message-64.png" width=30px height=30px></a>&nbsp;
                     <a class="topbar-img-elements"><img src="images/icons8-favorite-folder-48.png" width=29px height=30px></a>&nbsp;
                     <a class="topbar-img-elements"><img src="images/icons8-notification-48.png" width=30px height=28px></a>&nbsp;
                     <span>Welcome Mr.Username.</span>&nbsp;
                     <a href="afficher.php"><button class="btn btn-success">Afficher une Annonce</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>
    <h1>Moteur de recherche</h1>
    <p>Responsive Navbar with Bootstrap 4</p>
</div>



<nav class="navbar navbar-expand-md navbar-dark bg-info sticky-top">

    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapse_target">
        <a class="navbar-brand"><img src="images/logo.png" width=50px height=40px></a>
        <!-- <span class="navbar-text">Menu</span> -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
    <!--Form in navbar-->
                        <form class="form-inline" action="#">
                            <input type="tetx" class="form-control" id="faire_une_recherche" placeholder="Faire une recherche:">&nbsp;&nbsp;&nbsp;&nbsp;
                            <select class="form-control" id="categorie">
                                <option value="0">Toutes les catégories:</option>
                                <option value="1">Service</option>
                                <option value="2">Automobile</option>
                                <option value="3">Immobilier</option>
                            </select>&nbsp;&nbsp;&nbsp;&nbsp;
                            <select class="form-control" id="location">
                                <option value="">Location:</option>
                                <option value="1">Montreal</option>
                                <option value="2">Laval</option>
                                <option value="3">Longeuil</option>
                                <option value="4">Québec-city</option>
                                <option value="5">Sherbrooke</option>
                                <option value="6">Granby</option>
                            </select>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-warning" id="recherche-btn">Recherche</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        </form>
</nav>
