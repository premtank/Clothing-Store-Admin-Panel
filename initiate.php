<!DOCTYPE html>
<html>

<head>
  
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  
  <title>Clothing Store</title>
  
  <link rel='stylesheet' type='text/css' href='bootstrap-5.3.0-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="CSS/styles.css">

</head>

<style>

  .invalidfeedback {
    display: none;
    font-size: 13px;
    float: right;
  }

</style>

<body>
  
  <!-- Modal -->
  
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="insertCategory.php" method="post" class="needs-validation" novalidate>
            <label for="Category" class="form-label">Enter Category Name</label>
            <input required type="text" name="Category" class="form-control" id="Category" placeholder="Casual Shirt">
            <div class="invalid-feedback">
              Please Enter Value
            </div>
            <div class="mt-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Navbar -->

  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#">Fashion Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Navigate</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Categories.php">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Add.php">Add Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#staticBackdrop" data-bs-toggle="modal">Add
                Category</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- End of Navbar -->

