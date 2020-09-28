<?php include("inc/header.inc.php"); ?>

<!DOCTYPE html>
<html>



<body>
  <section class="resume-section p-3 p-lg-5 d-flex align-items-center">
    <div class="w-100">
      <h2 class="mb-5">Morning Eat's</h2>
      <div class="col-md-9 col-md-push-1 ">
        <div class="container">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
              <div class="input-group">
                <div class="input-group-btn search-panel">
                  <select class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <option>All</option>
                    <option>Boulangerie</option>
                    <option>Boucherie</option>
                    <option>Fast-Food</option>
                    <option>Japonais</option>
                    <option>Chinois</option>
                  </select>
                </div>

                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                  <input type="submit" value="Rechercher" name="submit" class="box-button">
                </span>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center">

        <div class="p-2 bd-highlight"><img class="img-fluid" src="img/img1.jpg" alt="Responsive image"></div>

        <div class="p-2 bd-highlight"><img class="img-fluid" src="img/img2.jpg" alt="Responsive image"></div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="p-2 bd-highlight"><img class="img-fluid" src="img/img3.jpg" alt="Responsive image"></div>

        <div class="p-2 bd-highlight"><img class="img-fluid" src="img/img4.png" alt="Responsive image"></div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="p-2 bd-highlight"><img class="img-fluid" src="img/img5.jpg" alt="Responsive image"></div>

        <div class="p-2 bd-highlight"><img class="img-fluid" src="img/img6.jpeg" alt="Responsive image"></div>

      </div>

    </div>
  </section>

</body>

</html>