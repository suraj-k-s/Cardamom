<?php
session_start();
ob_start();
include("../Assets/Connection/Connection.php");
$selQry = "select * from tbl_company where company_id=" . $_SESSION['cid'];
$res = $conn->query($selQry);
$data = $res->fetch_assoc();
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>company profile</title>
</head>

<body>
  <?php
  include("Head.php");
  ?>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col col-lg-6 mb-4 mb-lg-0"style="width: 699px;">
        <div class="card mb-3" style="border-radius: .5rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
            <h1 style="text-align:center;margin:10px;font-family: 'Audiowide', sans-serif;">Profile</h1>
            <div class="row g-0" style="padding:10px">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;padding:15px">
                <img src="../Assets/Files/companyproof/<?php echo $data['company_proof'] ?>" alt="Avatar"
                  class="img-fluid " style="width:150px;height:150px;border-radius:20%;margin:20px" />
                <h3 style="color: black;">
                  <?php echo $data['company_name'] ?>
                  </td>
                </h3>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8" style="padding:10px;">
                <div class="card-body p-4">
                  <h6><strong>Bio</strong></h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">
                        <?php echo $data['company_email'] ?>
                        </td>
                      </p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Phone</h6>
                      <p class="text-muted">
                        <?php echo $data['company_contact'] ?>
                      </p>
                    </div>
                  </div>
                  <h6><strong>Edits</strong></h6>
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

</html>