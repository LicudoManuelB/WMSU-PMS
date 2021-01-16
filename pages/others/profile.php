<!-- header -->
<?php 
  session_start();
  $_SESSION['page'] = 'Others';
  require_once "../../common/header.php";
  require_once "../../common/nav.php";
?>

<div class="container">
    <img src="../../img/personnel.jpg" alt="personnel picture" class="profile-photo">
    <div class="profile-information">
        <h3>Munding, Akbar J.</h3>
        <p class="text-primary">Manager</p>
       <div class="text-secondary">
       <h5><i class="fas fa-phone-alt"></i> 09676816625</h5>
        <p><i class="fas fa-envelope"></i> akbar.munding@gmail.com</p>
        <p><i class="fas fa-map-marker-alt"></i> Salamat Village, San roque, Zamboanga City</p>
        <button type="submit" class="btn btn-dark">Edit Profile</button>
       </div>
    </div>
</div>

<!-- footer -->
<?php require_once "../../common/footer.php"; ?>