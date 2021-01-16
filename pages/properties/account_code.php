<!-- header -->
<?php 
  session_start();
  $_SESSION['page'] = 'Account Codes';
  require_once "../../common/header.php";
  require_once "../../common/nav.php";
?>
<!-- content -->
<div class="content mb-5">
  <div class="container">
    <div class="row">
        <div class="col-md-4">
          <!-- form -->
            <form action="" class="custom-form">
                <img src="../../img/document.svg" alt="document icon" class="form-logo">
                <input type="text"  placeholder="Account Code">
                <input type="text"  placeholder="Account Title">
                <input type="text"  placeholder="Account Type">
                <button class="btn btn-primary" id="save">Save</button>
                <button class="btn btn-warning">Clear</button>
            </form>
          <!-- end of form -->
        </div>
        <div class="col-md-8 col-sm-12">
          <!-- search input -->
          <div class="tool-bar">
            <input type="text" class="form-control search-input" placeholder="search">
            <div class="tool-bar-btn">
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
         </div>
          
         <div class="table-responsive table-container"> 
            <!-- table -->
          <table class="table table-hover table-striped table-dark" id="account-title-table">
              <tr>
                <th>Code</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1-04-04-100</td>
                <td>Textbooks and infrustructural Material</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>1-04-04-990</td>
                <td>Other Supplies Inventory</td>
                <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>1-06-01-010</td>
                <td>Landholdings</td>
                <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>1-06-01-010</td>
                <td>Landholdings</td>
                <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>1-06-01-010</td>
                <td>Landholdings</td>
                <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>1-06-01-010</td>
                <td>Landholdings</td>
                <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>1-06-01-010</td>
                <td>Landholdings</td>
                <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>1-06-01-010</td>
                <td>Landholdings</td>
                <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
            
          </table>
          <!-- end of table -->
         </div>
         <button class="btn btn-danger" style="float: right">Delete all</button>
        </div>
    </div>
  </div>
</div>
<script src="../../js/logic.js"></script>
<!-- footer -->
<?php require_once "../../common/footer.php"; ?>
