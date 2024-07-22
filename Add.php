<?php
include("initiate.php");
require("connectDB.php");

//<!-- Form -->
  echo '<div class="custom-container p-4">';
  echo '  <form action="insertProduct.php" class="needs-validation" novalidate method="post" enctype="multipart/form-data">';
  echo '   <div class="row g-3">';
  echo '      <div class="col-sm-6">';
  echo '       <label for="Category" class="form-label">Category</label>';
  echo '          <select class="form-select" name="category" id="Category" required="">';
  echo '          <option value="" disabled selected>Select Category</option>';

  $sql = "SELECT * FROM Category"; 
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while ($record = $result->fetch_assoc()) {
    echo '<option value="'.$record['name'].'">'.$record['name'].'</option>';
    }
  } else {
    echo "<p>No record found.</p>";
    }

  echo '          </select>  ';
  echo '          <span class="invalidfeedback text-danger">Please enter value</span>';
  echo '      </div>';
  echo '      <div class="col-sm-6">';
  echo '        <label for="Price" class="form-label">Price</label>';
  echo '        <input type="text" class="form-control" name="price" id="Price" placeholder="1000/-" value="" required="">';
  echo '        <span class="invalidfeedback text-danger">Please enter value</span>';
  echo '      </div>';
  echo '   </div>';

  echo '<div class="col-12">';
  echo '  <label for="Image" class="form-label">Image</label>';
  echo '  <input class="form-control form-control-sm" name="image" id="Image" type="file">';
  echo '  <span class="invalidfeedback text-danger">Please select Image</span>';
  echo '</div>';

  echo '<hr class="my-4">';

  echo '<h4>Pattern</h4>';

  echo '<div class="my-3 row px-4">';
  echo '  <div class="form-check col-4">';
  echo '    <input id="Solid" value="Solid" name="pattern" type="radio" class="form-check-input" checked="">';
  echo '    <label class="form-check-label" for="Solid">Solid</label>';
  echo '  </div>';
  echo '  <div class="form-check col-4">';
  echo '    <input id="Printed" value="Printed" name="pattern" type="radio" class="form-check-input">';
  echo '    <label class="form-check-label" for="Printed">Printed</label>';
  echo '  </div>';
  echo '  <div class="form-check col-4">';
  echo '    <input id="Striped" value="Striped" name="pattern" type="radio" class="form-check-input">';
  echo '    <label class="form-check-label" for="Striped">Striped</label>';
  echo '  </div>';
  echo '</div>';

  echo '<div class="row g-3">';
  echo '<div class="col-6">';
  echo '  <label for="Color" class="form-label">Color <span class="text-body-secondary">(Optional)</span></label>';
  echo '  <input type="text" class="form-control" name="color" id="Color" placeholder="Olive Green">';
  echo '</div>';

  echo '<div class="col-6">';
  echo '  <label for="Size" class="form-label">Size</label>';
  echo '  <input type="text" class="form-control" name="size" id="Size" placeholder="xl" required="">';
  echo '  <span class="invalidfeedback text-danger">Please enter value</span>';
  echo '</div>';
  echo '</div>';

  echo '<div class="row g-3">';
  echo '<div class="col-md-4">';
  echo '  <label for="Fit" class="form-label">Fit</label>';
  echo '  <select class="form-select" name="fit" id="Fit" required="">';
  echo '     <option value="" disabled selected>Select Fit Type</option>';

  $sql = "SELECT * FROM Fit"; 
  $result = $con->query($sql);
  
  if ($result->num_rows > 0) {
    echo "<p>User data found.</p>";
    while ($record = $result->fetch_assoc()) {
    echo '<option value="'.$record['fit_type'].'">'.$record['fit_type'].'</option>';
    }
  } else {
    echo "<p>No record found.</p>";
    }
  echo '  </select>';
  echo '</div>';

  echo '<div class="col-md-4">';
  echo '  <label for="Occasion" class="form-label">Occasion</label>';
  echo '  <select class="form-select" name="occassion" id="Occasion" required="">';
  echo '     <option value="" disabled selected>Select Occassion Type</option>';

  $sql = "SELECT * FROM Occassion"; 
  $result = $con->query($sql);
  
  if ($result->num_rows > 0) {
    echo "<p>User data found.</p>";
    while ($record = $result->fetch_assoc()) {
    echo '<option value="'.$record['occassion_type'].'">'.$record['occassion_type'].'</option>';
    }
  } else {
    echo "<p>No record found.</p>";
    }
  echo '  </select>';
  echo '</div>';

  echo '<div class="col-md-4">';
  echo '  <label for="Fabric" class="form-label">Fabric</label>';
  echo '  <select class="form-select" name="fabric" id="Fabric" required="">';
  echo '     <option value="" disabled selected>Select Fabric Type</option>';

  $sql = "SELECT * FROM Fabric"; 
  $result = $con->query($sql);
  
  if ($result->num_rows > 0) {
    echo "<p>User data found.</p>";
    while ($record = $result->fetch_assoc()) {
    echo '<option value="'.$record['fabric_type'].'">'.$record['fabric_type'].'</option>';
    }
  } else {
    echo "<p>No record found.</p>";
    }
  echo '  </select>';
  echo '</div>';
  echo '</div>';

  echo '<h4 class="my-3">Wash Care</h4>';

  $sql = "SELECT * FROM Washcare"; 
  $result = $con->query($sql);
  
  if ($result->num_rows > 0) {
    while ($record = $result->fetch_assoc()) {
      echo '<div class="form-check">';
      echo '  <input type="checkbox" class="form-check-input" name="washcare[]" id="'.$record['washcare_type'].'" value="'.$record['washcare_type'].'">';
      echo '  <label class="form-check-label" for="'.$record['washcare_type'].'">'.$record['washcare_type'].'</label>';
      echo '</div>';
    }
  } else {
    echo "<p>No record found.</p>";
    }

  echo '<hr class="my-4">';

  echo '<div class="col-md-12">';
  echo '  <label for="cc-name" class="form-label">Description</label>';
  echo '  <input type="text" class="form-control" name="description" id="Description" placeholder="..." required="">';
  echo '</div>';

  echo '<button type="submit" class="w-100 btn btn-success btn-lg" id="submit">Submit</button>';
  echo'</form>';
  echo '</div>';

  echo '<!-- End of Form -->';
 

  // require("disconnectDB.php");


  ?>
</body>
<script>

  var data = document.querySelectorAll(".form-control");

  data.forEach(element => {
    element.addEventListener("blur", function () {
      let nexttag = element.nextElementSibling;
      if (element.value == '') {
        nexttag.style.display = "block";
      }
      else {
        nexttag.style.display = "none";
      }
    })
  });
  // var sb = document.getElementById("submit");
  // sb.addEventListener('click', function (event) {
  //   data.forEach(element => {

  //     let nexttag = element.nextElementSibling;
  //     if (element.value == '') {
  //       nexttag.style.display = "block";
  //     }
  //     else {
  //       nexttag.style.display = "none";
  //     }

  //   });
  // })
  function valid() {
    'use strict'
    const form = document.querySelector('.needs-validation')
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  }
</script>

<!-- For Bootstrap based javascript -->
<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>

<!-- For Custom javascript
<script src="JS/main.js"></script> -->

</html>