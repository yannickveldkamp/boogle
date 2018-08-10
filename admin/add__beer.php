<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Welcome</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Breweries</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Add beers</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add beers styles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Bars</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Admin
                </span>
            </div>
        </nav>
    <!-- update info -->
    <div class="alert alert-primary text-center" role="alert">
        Admin panel 0.1
    </div>
    <!-- update info -->
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Latest Beer added</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>       
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Latest Brewery added</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>       
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Latest bar added</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>       
            </div>            
        </div>
    </div>
    <!-- container -->
</body>
</html>