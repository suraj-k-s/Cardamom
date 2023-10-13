<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
ob_start();
include("../Assets/Connection/Connection.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <title>Untitled Document</title>
</head>

<body>
  <?php
  include("Head.php");
  ?>
  <?php
  $selQry = "select * from tbl_trader where trader_id=" . $_SESSION['tid'];
  $res = $conn->query($selQry);
  $data = $res->fetch_assoc();
  ?>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0" style="width: 699px;">
        <div class="card mb-3" style="border-radius: .5rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
            <h1 style="text-align:center;margin:10px;font-family: 'Audiowide', sans-serif;">Profile</h1>
            <div class="row g-0" style="padding:20px">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;padding:20px">
                <img src="../Assets/Files/Traderphoto/<?php echo $data['trader_photo'] ?>" alt="Avatar"
                  class="img-fluid " style="width: 150px;height:150px;border-radius:20%;margin:20px" />
                <h3 style="color: black;">
                  <?php echo $data['trader_name'] ?>
                </h3>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8" style="padding:10px;">
                <div class="card-body p-4">
                  <h6>Bio</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">
                        <?php echo $data['trader_email'] ?>
                      </p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Phone</h6>
                      <p class="text-muted">
                        <?php echo $data['trader_contact'] ?>
                      </p>
                    </div>
                  </div>
                  <h6>Edits</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <a href="ChangePassword.php">
                        <h6>Change Password</h6>
                      </a>


                    </div>
                    <div class="col-6 mb-3">

                      <a href="EditProfile.php">

                        <h6>Edit Profile</h6>

                      </a>
                    </div>
                  </div>
                  <div class="d-flex justify-content-start">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include("Foot.php");
  ?>
</body>
<?php
ob_flush();
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>