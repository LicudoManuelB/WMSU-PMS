<!-- header -->
<?php 
  session_start();
  $_SESSION['page'] = 'Transfers';
  require_once "../common/header.php";
  require_once "../common/nav2.php";
?>
<div class="content mb-5">
  <div class="container">
  <div class="transaction-tools">
    <input type="text" class="form-control search-input m-2" placeholder="search">
    <button type="submit" class="btn btn-danger">Delete all</button>
  </div>
            
            <?php 
                  for($i = 5; $i >= 0; $i--){
            ?>
      
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img class="card-image" src="../../img/building-sample.jpg" alt="building">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </div>
                            </div>
                          </div>
                       </div>
                        </div>
      
                        <div class="col-md-6 col-sm-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img class="card-image" src="../../img/building-sample.jpg" alt="building">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                              </div>
                            </div>
                         </div>
                        </div>
                  </div>
            <?php } ?>
</div>
                  </div>
<!-- footer -->
<?php require_once "../common/footer.php"; ?>