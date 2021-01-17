<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#"><?php echo $_SESSION['page']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav mr-2">
      <li class="nav-item <?php if($_SESSION['page']=='Dashboard'){ echo 'active'; }; ?>">
        <a class="nav-link" href="properties/home.php"><span><i class="fas fa-chart-line"></i></span> Dashboard</a>
      </li>
      <li class="nav-item dropdown <?php if($_SESSION['page']=='Account Codes'||$_SESSION['page']=='Articles'||$_SESSION['page']=='Buildings'||$_SESSION['page']=='Equipments'||$_SESSION['page']=='Land holdings'||$_SESSION['page']=='Vehicles'||$_SESSION['page']=='Land improvements'){ echo 'active'; }; ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span><i class="fas fa-box-open"></i></span> Properties
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="properties/account_code.php">Account Title</a>
          <a class="dropdown-item" href="properties/article.php">Articles</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="properties/building.php">Buildings</a>
          <a class="dropdown-item" href="properties/vehicle.php">Vehicles</a>
          <a class="dropdown-item" href="properties/equipment.php">Equipment</a>
          <a class="dropdown-item" href="properties/land_improvement.php">Land improvements</a>
          <a class="dropdown-item" href="properties/land_holding.php">Landholdings</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span><i class="fas fa-user-circle"></i></span> Accounts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="accounts/personnel.php"><i class="fas fa-user"></i> Personnel</a>
          <a class="dropdown-item" href="accounts/department_clerk.php"><i class="fas fa-user"></i> Department Clerks</a>
          <a class="dropdown-item" href="accounts/repairman.php"><i class="fas fa-user"></i> Repairman</a>
        </div>
      </li>
      <li class="nav-item <?php if($_SESSION['page']=='Request'){ echo 'active'; }; ?>">
        <a class="nav-link" href="request.php"><span><i class="fas fa-bookmark"></i></span> Request</a>
      </li>
      <li class="nav-item <?php if($_SESSION['page']=='Transactions'){ echo 'active'; }; ?>">
        <a class="nav-link" href="transaction.php"><span><i class="fas fa-thumbtack"></i></span> Transactions</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span><i class="fas fa-address-book"></i></span> Others
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="others/profile.php"><i class="fas fa-user-circle"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="far fa-calendar-alt"></i> Events</a>
          <a class="dropdown-item" href="#"><i class="fas fa-info-circle"></i> Logs</a>
          <a class="dropdown-item" href="#"><i class="fas fa-history"></i> History</a>
        </div>
      </li>
      <button class="btn bg-danger text-light" type="button" data-toggle="modal" data-target="#staticBackdrop"><span><i class="fas fa-sign-out-alt"></i></span> Logout</button>
    </ul>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to logout now?</p>
      </div>
      <div class="modal-footer">
        <form action="../services/process.php" method="GET">
           <a type="submit" class="btn btn-primary" href="../../index.php" name="logout">Yes</a>
           <a type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>