<!-- header -->
<?php 
  session_start();
  $_SESSION['page'] = 'Request';
  require_once "../common/header.php";
  require_once "../common/nav2.php";
?>
<div class="content mb-5">
  <div class="container">
<input type="text" class="form-control search-input m-2" placeholder="search">
            
            <?php 
                  $count = 1;
                  for($i = 5; $i > 0; $i--){
                    
            ?>
          <div class="data-content">
          <div class="row">
                        <div class="col-md-6 col-sm-12">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row g-0">
                            <div class="col-md-4 request-image">
                              <img class="card-image" src="../../img/users/user<?=$i?>.jpg" alt="building">
                              <img class="card-image user-request-img" src="../../img/equipments/projector.jpg" alt="building">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h6 class="card-title">User<?=$i?></h6>
                                <p class="card-text">Request to borrow <b>projector</b></p>
                                <p class="card-text"><small class="text-muted">3 minutes ago</small></p>
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
                            <div class="col-md-4 request-image">
                              <img class="card-image" src="../../img/users/user<?=$i?>.jpg" alt="building">
                              <img class="card-image user-request-img" src="../../img/users/user<?=$count==3?2:$count; ?>.jpg" alt="building">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h6 class="card-title">User<?=$i?></h6>
                                <p class="card-text">Request to transfer <b>projector</b> to <b>User<?=$count==3?2:$count; ?></b></p>
                                <p class="card-text"><small class="text-muted">3 minutes ago</small></p>
                                <button type="submit" class="btn btn-success">Accept</button>
                                <button type="submit" class="btn btn-danger">Deny</button>
                              </div>
                            </div>
                          </div>
                       </div>
                        </div>
                  </div>
            <?php $count++; } ?>
          </div>
</div>
                  </div>
<!-- footer -->
<?php require_once "../common/footer.php"; ?>