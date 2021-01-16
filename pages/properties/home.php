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
            <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-box-open"></i></span> 22</h2>
                    <h5>Transfers</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
             <div class="col-lg-3 m-1">
            <div class="card text-center">
                <div class="card-body">
                    <h2><span><i class="fas fa-box-open"></i></span> 22</h2>
                    <h5>Logs</h5>
                </div>
            </div>
            </div>
            <!-- end of card -->
             <!-- card -->
            </div>
            <!-- end of card -->
            <!-- end of row -->
          
  </div>
</div>
        <div class="container mt-2">
            <!-- latest 5 data in the record using table -->
         <div class="row justify-content-center">
           <div class="col-lg-12">
           <div class="card">
            <div class="card-header text-center bg-dark text-light">
              <h5>Latest transactions</h5>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover table-responsive-sm">
                    <tr class="bg-secondary text-light">
                        <th>#</th>
                        <th>First name</th>
                        <th>Middle name</th>
                        <th>Last name</th>
                        <th>Lorem</th>
                        <th>Lorem</th>
                        <th>Lorem</th>
                    </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                        </tr>       
                        <tr>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                        </tr>    
                        <tr>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                            <td>Lorem</td>
                        </tr>    
                </table>
            </div>
          </div>
           </div>
         </div>
        </div>

</div>
<!-- footer -->
<?php require_once "../../common/footer.php"; ?>