<!-- header -->
<?php 
  session_start();
  $_SESSION['page'] = 'Buildings';
  require_once "../../common/header.php";
  require_once "../../common/nav.php";
?>
<!-- content -->
<div class="content mb-5">
  <ul class="nav nav-tabs bg-dark">
    <li class="nav-item"><a class="nav-link active" href="#1" data-toggle="tab">Overview</a></li>
    <li class="nav-item"><a class="nav-link" href="#2" data-toggle="tab">Manage</a></li>
    <li class="nav-item"><a class="nav-link" href="#3" data-toggle="tab">Maintenance</a></li>
  </ul>
  <div class="container">
    
    <div class="tab-content">
      <!-- building overview -->
      <div class="tab-pane active" id="1">
            
            <input type="text" class="form-control search-input m-2" placeholder="search">
      <?php 
            for($i = 5; $i >= 0; $i--){
      ?>

              <div class="row">
                  <div class="col-md-6 col-sm-12">
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img class="card-image" src="../../img/no-image.png" alt="building">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body building-data">
                          <h5 class="card-title">Building <?=$i?></h5>
                          <p>location: Normal Road Baliwasan Zamboanga City</p>
                          <p>floors: 2</p>
                          <p>floor area: 10sqm</p>
                          <p><small class="text-muted">Last updated 3 mins ago</small></p>
                          <button type="submit" class="btn btn-warning">Update</button>
                          <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              More Info
                            </button>
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
                        <div class="card-body building-data">
                          <h5 class="card-title">Building <?=$i?></h5>
                          <p>location: Normal Road Baliwasan Zamboanga City</p>
                          <p>floors: 2</p>
                          <p>floor area: 10sqm</p>
                          <p><small class="text-muted">Last updated 3 mins ago</small></p>
                          <button type="submit" class="btn btn-warning">Update</button>
                          <!-- Button trigger modal -->
                      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        More Info
                      </button>
                        </div>
                        </div>
                      </div>
                   </div>
                  </div>
            </div>
      <?php } ?>

       </div>

      <!-- manage building -->
      <div class="tab-pane" id="2">
      <div class="row">
        <div class="col-md-4">
          <!-- form -->
            <form action="" class="custom-form">
                <img src="../../img/building.svg" alt="document icon" class="form-logo">
                <input type="text"  placeholder="Building Name">
                <input type="text"  placeholder="Location">
                <input type="text"  placeholder="Number of Floors">
                <input type="text"  placeholder="Number of Rooms">
                <input type="text"  placeholder="Total Floor Area">
                <input type="text"  placeholder="Account Title">
                <input type="select"  placeholder="Account Code">
                <input type="text"  placeholder="Building Type">
                <div class="form-group pt-2">
                 <label>Date of Construction:</label>  
                 <input type="date"  placeholder="Date of Construction"> 
                </div>
                <input type="text"  placeholder="Cost of Construction">
                <button class="btn btn-primary" id="save">Save</button>
                <button class="btn btn-warning">Clear</button>
            </form>
          <!-- end of form -->
        </div>
        <div class="col-md-8 col-sm-12">
          <!-- search input -->
          <div class="tool-bar">
            <input type="text" class="form-control search-input" placeholder="search">
            <div class="custom-dropdown">
            <div class="dropdown">
            
            <button class="btn btn-secondary dropdown-toggle tools" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
              <a href="#" class="dropdown-item">Code</a>
              <a href="#" class="dropdown-item">Title</a>
            </div>
            </div>
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle tools" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tools
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item btn-print" href="#" onclick="printThis('btn-print','account-title-table')"><span><i class="fas fa-print"></i></span> Print</a>
              <a class="dropdown-item btn-export" href="#" onclick="exportTableToExcel('account-title-table','account_title')"><span><i class="fas fa-file-csv"></i></span> Export</a>
              <a class="dropdown-item btn-export" href="#"><span><i class="fas fa-file-csv"></i></span> Import</a>
            </div>
          
          </div>
          </div>
            </div>
          
         <div class="table-responsive table-container"> 
            <!-- table -->
          <table class="table table-hover table-striped table-dark" id="account-title-table">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Floors</th>
                <th>Rooms</th>
                <th>Area</th>
                <th>Account Title</th>
                <th>Account Code</th>
                <th>Building Type</th>
                <th>Date of Construction</th>
                <th>Cost of Construction</th>
                <th>Action</th>
              </tr>
              
             <?php for($i = 1; $i<=20; $i++){ ?>
              <tr>
                <td><?=$i;?></td>
                <td>Sample Building</td>
                <td>Campus A</td>
                <td>3</td>
                <td>7</td>
                <td>200sqm</td>
                <td>Building</td>
                <td>1-04-04-100</td>
                <td>Educational building</td>
                <td>11/01/2021</td>
                <td>1,000,000</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <?php } ?>
          </table>
          <!-- end of table -->
         </div>
         <button class="btn btn-danger" style="float: right">Delete all</button>
        </div>
    </div>
  </div>
  <!-- building maintenance -->
   <div class="tab-pane" id="3">
         <!-- manage building -->
      <div class="tab-pane" id="2">
      <div class="row">
        <div class="col-md-4">
          <!-- form -->
            <form action="" class="custom-form">
                <img src="../../img/building.svg" alt="document icon" class="form-logo">
                <input type="text"  placeholder="Building Name">
                <div class="form-group pt-2">
                 <label>Date of Construction:</label>  
                 <input type="date"  placeholder="Date of Construction"> 
                </div>
                <input type="text"  placeholder="Cost of Construction">
                <input type="text"  placeholder="Repair Description">
                <input type="text"  placeholder="How Acquired">

                <button class="btn btn-primary" id="save">Save</button>
                <button class="btn btn-warning">Clear</button>
            </form>
          <!-- end of form -->
        </div>
        <div class="col-md-8 col-sm-12">
          <!-- search input -->
          <div class="tool-bar">
            <input type="text" class="form-control search-input" placeholder="search">
            <div class="custom-dropdown">
            <div class="dropdown">
            
            <button class="btn btn-secondary dropdown-toggle tools" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
              <a href="#" class="dropdown-item">Code</a>
              <a href="#" class="dropdown-item">Title</a>
            </div>
            </div>
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle tools" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tools
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item btn-print" href="#" onclick="printThis('btn-print','account-title-table')"><span><i class="fas fa-print"></i></span> Print</a>
              <a class="dropdown-item btn-export" href="#" onclick="exportTableToExcel('account-title-table','account_title')"><span><i class="fas fa-file-csv"></i></span> Export</a>
              <a class="dropdown-item btn-export" href="#"><span><i class="fas fa-file-csv"></i></span> Import</a>
            </div>
          </div>
          </div>
            </div>
          
         <div class="table-responsive table-container"> 
            <!-- table -->
          <table class="table table-hover table-striped table-dark" id="account-title-table">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Floors</th>
                <th>Rooms</th>
                <th>Area</th>
                <th>Account Title</th>
                <th>Account Code</th>
                <th>Building Type</th>
                <th>Date of Construction</th>
                <th>Cost of Construction</th>
                <th>Action</th>
              </tr>
              
             <?php for($i = 1; $i<=20; $i++){ ?>
              <tr>
                <td><?=$i;?></td>
                <td>Sample Building</td>
                <td>Campus A</td>
                <td>3</td>
                <td>7</td>
                <td>200sqm</td>
                <td>Building</td>
                <td>1-04-04-100</td>
                <td>Educational building</td>
                <td>11/01/2021</td>
                <td>1,000,000</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <?php } ?>
          </table>
          <!-- end of table -->
         </div>
         <button class="btn btn-danger" style="float: right">Delete all</button>
        </div>
    </div>
  </div>
  <hr>
   </div>
  </div>
  
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title text-light" id="exampleModalLabel">Building Details</h5>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">&times;</button>
      </div>
      <div class="modal-body">
          <p>Location: Normal Road, Baliwasan, Zamboanga City.</p>
          <p>Floors: 2</p>
          <p>Floor area: 10sqm</p>
          <p>Rooms: 10</p>
          <p>Construction date: Aug, 10,2020</p>
          <p>Construction cost: Php 1,000,000</p>
          <p>Current use: ICS Building</p>
          <p>Type: Residential</p>
          <p>Useful Years: lifetime</p>
          <p>Current Value:</p>
          <p>Cost per area: Php 100,000</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->
<!-- footer -->
<?php require_once "../../common/footer.php"; ?>