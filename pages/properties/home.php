<!-- header -->
<?php 
  session_start();
  $_SESSION['page'] = 'Dashboard';
  require_once "../../common/header.php";
  require_once "../../common/nav.php";
?>
<!-- content -->
<div class="content">
<div class="container mt-2">
  <div class="card mainCard">
    <div class="card-header text-center bg-dark text-light">
      <h5>Record Overview</h5>
    </div>
    <div class="card-body">
      <!-- card row -->
        <div class="row justify-content-center">
            <!-- card -->
            <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-box-open"></i></span> 22</h2>
                    <h5>Properties</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-building"></i></span> 22</h2>
                    <h5>Buildings</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-bicycle"></i></span> 22</h2>
                    <h5>Vehicles</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
        </div>
         <!-- end of row -->
        <!-- card row -->
        <div class="row justify-content-center">
            <!-- card -->
            <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-level-up-alt"></i></span> 22</h2>
                    <h5>Land improvements</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-mountain"></i></span> 22</h2>
                    <h5>Landholdings</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-tools"></i> 22</h2>
                    <h5>Equipment</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
         </div>
           <!-- end of row -->
    <!-- card row -->
    <div class="row justify-content-center">
            <!-- card -->
            <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-user-circle"></i></span> 22</h2>
                    <h5>Accounts</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-user-tie"></i></span> 22</h2>
                    <h5>Personnel</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-user"></i></span> 22</h2>
                    <h5>Department Clerks</h5>
                </div>
            </div>
            </div>
            </div>
            <!-- end of card -->
            <!-- end of row -->
            <!-- card row -->
    <div class="row justify-content-center">
            <!-- card -->
            <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-user-cog"></i><pan> 22</h2>
                    <h5>Repairman</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-box-open"></i></span> 22</h2>
                    <h5>Request</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-box-open"></i></span> 22</h2>
                    <h5>Transactions</h5>
                </div>
            </div>
            </div>
            </div>
            <!-- end of card -->
            <!-- end of row -->
             <!-- card row -->
    <div class="row justify-content-center">
             <!-- card -->
            </div>
            <!-- end of card -->
            <!-- end of row -->
          
  </div>
</div>
        <div class="container mt-2">
            <!-- latest 5 data in the record using table -->
         <div class="row">
           <div class="col-lg-12">
           <div class="card">
            <div class="card-header text-center bg-dark text-light">
              <h5>Latest transactions</h5>
            </div>
            <div class="card-body transaction-data">
                <?php for($i=3; $i>0; $i--){ ?>

                    <div class="card mb-3">
                            <div class="row">
                                <div class="col-md-2">
                                <img src="../../img/users/user<?=$i?>.jpg" class="user-photo" alt="user-photo">
                                </div>
                                <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">user<?=$i?></h5>
                                    <p class="card-text">Returned the equipment.</p>
                                    <p class="card-text"><small class="text-muted"><?=$i*5?> minutes ago</small></p>
                                </div>
                                </div>
                            </div>
                    </div>
                <?php } ?>
            </div>
          </div>
           </div>
         </div>
        </div>
        <div class="container mt-2">
            <!-- latest 5 data in the record using table -->
         <div class="row">
           <div class="col-lg-12">
           <div class="card">
            <div class="card-header text-center bg-dark text-light">
              <h5>Latest Request</h5>
            </div>
            <div class="card-body transaction-data">
                <?php for($i=1; $i<=3; $i++){ ?>

                    <div class="card mb-3">
                            <div class="row">
                                <div class="col-md-2">
                                <img src="../../img/users/user<?=$i?>.jpg" class="user-photo" alt="user-photo">
                                </div>
                                <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">user<?=$i?></h5>
                                    <p class="card-text">Request to borrow equipment.</p>
                                    <p class="card-text"><small class="text-muted"><?=$i*5?> minutes ago</small></p>
                                </div>
                                </div>
                            </div>
                    </div>
                <?php } ?>
            </div>
          </div>
           </div>
         </div>
        </div>

</div>
<!-- footer -->
<?php require_once "../../common/footer.php"; ?>