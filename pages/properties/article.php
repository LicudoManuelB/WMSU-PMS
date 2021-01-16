<!-- header -->
<?php 
  session_start();
  $_SESSION['page'] = 'Articles';
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
                <img src="../../img/article.svg" alt="document icon" class="form-logo">
                <input type="text"  placeholder="Article">
                <input type="text"  placeholder="Useful Years">
                <input type="text"  placeholder="Account Title">
                <input type="text"  placeholder="Account Code">
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
              <a href="#" class="dropdown-item">Article</a>
              <a href="#" class="dropdown-item">Useful Years</a>
              <a href="#" class="dropdown-item">Account Title</a>
              <a href="#" class="dropdown-item">Account Code</a>
            </div>
            </div>
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle tools" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tools
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item btn-print" href="#" onclick="printThis('btn-print','article-table')"><span><i class="fas fa-print"></i></span> Print</a>
              <a class="dropdown-item btn-export" href="#" onclick="exportTableToExcel('article-table','articles')"><span><i class="fas fa-file-csv"></i></span> Export</a>
              <a class="dropdown-item btn-export" href="#"><span><i class="fas fa-file-csv"></i></span> Import</a>
            </div>
          
          </div>
          </div>
            </div>
          
         <div class="table-responsive table-container"> 
            <!-- table -->
          <table class="table table-hover table-striped table-dark" id="article-table">
              <tr>
                <th>Article</th>
                <th>Useful Years</th>
                <th>Account Title</th>
                <th>Account Code</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>Sewing Machine</td>
                <td>15</td>
                <td>Textbook and infrustructural materials</td>
                <td>1-08-23-1232</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>Sewing Machine</td>
                <td>15</td>
                <td>Textbook and infrustructural materials</td>
                <td>1-08-23-1232</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>Sewing Machine</td>
                <td>15</td>
                <td>Textbook and infrustructural materials</td>
                <td>1-08-23-1232</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>Sewing Machine</td>
                <td>15</td>
                <td>Textbook and infrustructural materials</td>
                <td>1-08-23-1232</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>Sewing Machine</td>
                <td>15</td>
                <td>Textbook and infrustructural materials</td>
                <td>1-08-23-1232</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>Sewing Machine</td>
                <td>15</td>
                <td>Textbook and infrustructural materials</td>
                <td>1-08-23-1232</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>Sewing Machine</td>
                <td>15</td>
                <td>Textbook and infrustructural materials</td>
                <td>1-08-23-1232</td>
                  <td col-span="2">
                    <a href=""><span class="p-2 edit"><i class="fas fa-pen"></i></span></a>
                    <a href=""><span class="p-2 delete"><i class="fas fa-trash-alt"></i></span></a>
                  </td>
              </tr>
              <tr>
                <td>Sewing Machine</td>
                <td>15</td>
                <td>Textbook and infrustructural materials</td>
                <td>1-08-23-1232</td>
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