<!-- header -->
<?php 
  session_start();
  $_SESSION['page'] = 'Request';
  require_once "../common/header.php";
  require_once "../common/nav2.php";
?>
<div class="content mb-5">
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item"><a class="nav-link active" href="#1" data-toggle="tab">Pending</a></li>
        <li class="nav-item"><a class="nav-link" href="#2" data-toggle="tab">Confirmed</a></li>
      </ul> 
  <div class="container">

    <div class="tab-content">
        <div class="tab-pane active" id="1">
        <?php 
                  for($i = 5; $i >= 0; $i--){
            ?>
      
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img class="card-image" src="../../img/equipment-sample.jpg" alt="building">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="submit" class="btn btn-success">Accept</button>
                                <button type="submit" class="btn btn-danger">Deny</button>
                              </div>
                            </div>
                          </div>
                       </div>
                        </div>
      
                        <div class="col-md-6 col-sm-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img class="card-image" src="../../img/no-image.png" alt="building">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  <button type="submit" class="btn btn-success">Accept</button>
                                <button type="submit" class="btn btn-danger">Deny</button>
                                </div>
                              </div>
                            </div>
                         </div>
                        </div>
                  </div>
            <?php } ?>
        </div>
        <div class="tab-pane" id="2">
        <?php 
                  for($i = 5; $i >= 0; $i--){
            ?>
      
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img class="card-image" src="../../img/equipment-sample.jpg" alt="building">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                              </div>
                            </div>
                          </div>
                       </div>
                        </div>
      
                        <div class="col-md-6 col-sm-12">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img class="card-image" src="../../img/no-image.png" alt="building">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
                              </div>
                            </div>
                         </div>
                        </div>
                  </div>
            <?php } ?>
        </div>
    </div>
            
  </div>
</div>
<!-- footer -->
<?php require_once "../common/footer.php"; ?>