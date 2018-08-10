<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="styles__beer.js" type="text/javascript"></script>
    <script src="countries.js" type="text/javascript"></script>
    <script src="brewery.js" type="text/javascript"></script>
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
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name of the beer</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="for example bavaria">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Style of the beer</label>
                    <input type="text" class="form-control" id="style__beer" name="style__beer" placeholder="for example IPA">
                    <div class="result__style__beer"></div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name of the Brewery</label>
                    <input type="text" class="form-control" id="add__brewery" name="add__brewery"  placeholder="for example Van moll">
                    <div class="result__brewery"></div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Country</label>
                    <input type="text" class="form-control" id="add__country" name="add__country" placeholder="for example Netherlands">
                    <div class="result__countries"></div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Price of the beer</label>
                    <input type="number" class="form-control" id="add__price" name="add__price" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add beer to collection</button>
            </form>  
        </div>
    </div>
    <!-- container -->
</body>
</html>