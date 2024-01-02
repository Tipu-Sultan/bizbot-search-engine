<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

    <div class="container text-center">
        <h1 class="mb-4">Product Search</h1>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-3">
                <div class="input-group">
                    <input type="text" id="searchInput" class="form-control rounded-pill"
                        placeholder="Search for products..." oninput="searchProducts()">
                    <button class="btn rounded-pill" type="button" id="searchIcon">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="card p-0 mt-2" id="resultsContainer">
                </div>
            </div>
        </div>
    </div>


    <script src="js/script.js"></script>
</body>

</html>