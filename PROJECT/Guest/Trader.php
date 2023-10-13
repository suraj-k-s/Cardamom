<?php
ob_start();
include("../Assets/Connection/Connection.php");
$trader="";
if(isset($_POST['btn_submit']))
{
	
	$name=$_POST['txt_name'];
	$contact=$_POST['txt_contact'];
	$email=$_POST['txt_email'];
	$address=$_POST['txt_address'];
	$password=$_POST['txt_password'];
	$place=$_POST['sel_place'];
	$licenseno=$_POST['txt_licno'];
	$license_date=$_POST['txt_licdate'];
	$rc=$_POST['txt_rc'];
	$gst=$_POST['txt_gst'];
	
	$photo=$_FILES['txt_photo']['name'];
	$path=$_FILES['txt_photo']['tmp_name'];
	move_uploaded_file($path,"../Assets/Files/Traderphoto/".$photo);
	
	$ins="insert into tbl_trader(trader_name,trader_contact,trader_email,trader_address,trader_licenseno,trader_license_date,trader_rc,trader_gst,place_id,trader_photo,trader_doj,trader_password)values('".$name."','".$contact."','".$email."','".$address."','".$licenseno."','".$license_date."','".$rc."','".$gst."','".$place."','".$photo."',curdate(),'".$password."')";
	
	if($conn->query($ins))
	{
		?>
        <script>
			alert("Query Inserted")
			window.location="trader.php";
		</script>
        <?php
	}
	else
	{
		echo "Insert Failed";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trader</title>
</head>

<body>
<div style="  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkkf9KwSX7eP7Qk6KFzRb7kwrWxZTNHnsA2Q&usqp=CAU'); padding-bottom:150px;
">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cardamom Auction Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="../Assets/Template/User/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../Assets/Template/User/Dashboard/css/fontawesome.css">
    <link rel="stylesheet" href="../Assets/Template/User/Dashboard/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="../Assets/Template/User/Dashboard/css/animated.css">
    <link rel="stylesheet" href="../Assets/Template/User/Dashboard/css/owl.css">
    <link rel="stylesheet" href="../Assets/Template/form.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">  

<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->

<style>
  .hlogo{
    font-size: 50px;
    font-weight: 700;
    color: #2a2a2a;
    line-height: 72px;
    font-family: "Audiowide", sans-serif;
  }
  .hlogo>span{
    color:#ff695f;
  }
  .logo{
    margin-top: 15px;
  }
  .modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fff;
  padding: 30px;
  border-radius: 15px;
  max-width: 600px;
  margin: 100px auto;
}


/* Button styling */
#openTraderModalButton {
  background-color: #5663e1; /* Green background color */
  color: #ffffff; /* White text color */
  border: none; /* No border */
  padding: 10px 20px; /* Padding around the text */
  font-size: 16px; /* Font size */
  border-radius: 5px; /* Rounded corners */
  cursor: pointer; /* Display cursor as a pointer */
  transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition for hover effect */
}

/* Button hover effect */
#openTraderModalButton:hover {
  background-color: #4650b7; /* Darker green background color on hover */
  color: #fff; /* White text color on hover */
}

/* Button selection effect */
#openTraderModalButton:focus {
  outline: none; /* Remove default focus outline */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); /* Add a subtle shadow on focus */
}


/* Styling for the h1 tag */
.modal-content h1 {
  font-size: 35px;
  margin-bottom: 15px;
  color: #222;
}

/* Styling for the p tag */
.modal-content p {
  font-size: 18px;
  color: #444;
  line-height: 1.6;
}

  </style>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <div class="logo">
              <div class="item header-text">
              <a href="../Index.php">

                <div style="display: flex;margin-right: 30px;">
          <img src="../Assets/Template/Admin/Dashboard/images/logos/vector-cardamom-ribbon-badge.png"width="70" height="70">
          <h2 class="hlogo">  
            C<span>A</span>M<span>S</span></h2>
          </div>
</a>
              </div>
             </div>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            
              <li class="scroll-to-section"><a href="../">Home</a></li> 
              <li class="scroll-to-section"><div class="login-btn-main"><a href="Login.php">Login</a></div></li> 
            </ul>  
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="tab" class="our-services section" align="center">
  <div id="traderModal" class="modal">
  <div class="modal-content">
  
    <h1><u>Traders</u></h1>
    <p>Traders are the lifeblood of the cardamom auction ecosystem.
     They are the individuals who actively engage in the buying and selling of cardamom within the marketplace.
      With a keen eye for quality and a deep understanding of market trends,
       traders play a pivotal role in determining the value of cardamom lots. 
       </p><br/><br/>
       
    <button id="openTraderModalButton">I Understand</button>
    
  </div>
</div>
 
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
<div style="background-color: white; width:600px;padding:15px; border-radius:10px;"> 

<h2  style="margin-top:20px;">Trader Registatrion</h2>
<br/>
  <table width="200" border="1" style="width:500px;margin-top:20px;">
 
    <tr>
      <th>Name</th>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" required pattern="{2,}" /></td>
    </tr>
    <tr>
      <th>Contact</th>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact"required="required" title="Number Must have 10 Digits"  pattern="[0-9]{10,10}" /></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><label for="txt_email"></label>
      <input type="email" name="txt_email" id="txt_email" required /></td>
    </tr>
     <tr>
      <th>Password</th>
      <td><label for="txt_password"></label>
      <input type="password" name="txt_password" id="txt_password" title="You must be enter 6 or more charaters" required pattern="[a-zA-Z0-9.@#$%^&*]{6,30}"/></td>
    </tr>
    <tr>
      <th>Address</th>
      <td><label for="txt_address"></label>
      <input type="text" name="txt_address" id="txt_address" required/></td>
    </tr>
    <tr>
      <th>Photo</th>
      <td><input type="file" name="txt_photo" id="txt_photo" required/></td>
    </tr>
    
    <tr>
      <th>State</th>
      <td><label for="sel_state"></label>
        <select name="sel_state" id="sel_state" onChange="getdistrict(this.value)" >
          <option>--select--</option>
           <?php
		$selQry="select * from tbl_state";
		$result=$conn->query($selQry);
		while($row=$result->fetch_assoc())
		{
		?>
        <option value="<?php echo $row['state_id']  ?>"><?php echo $row['state_name']  ?></option>
        <?php
		}
		?>
          
      </select></td>
    </tr>
    <tr>
      <th>District</th>
      <td><label for="sel_district"></label>
        <select name="sel_district" id="sel_district" onChange="getplace(this.value)">
          <option>--select--</option>
         
      </select></td>
    </tr>
    <tr>
      <th>Place</th>
      <td><label for="sel_place"></label>
        <select name="sel_place" id="sel_place">
          <option>--select--</option>
      </select></td>
    </tr>
    <tr>
      <th>License No</th>
      <td><label for="txt_licno"></label>
      <input type="text" name="txt_licno" id="txt_licno" required /></td>
    </tr>
    <tr>
      <th>License Date</th>
      <td><label for="txt_licdate"></label>
      <input type="date" name="txt_licdate" id="txt_licdate"  required="required"/></td>
    </tr>
    <tr>
      <th>RC</th>
      <td><label for="txt_rc"></label>
      <input type="text" name="txt_rc" id="txt_rc" required/></td>
    </tr>
    <tr>
      <th>GST</th>
      <td><label for="txt_gst"></label>
      <input type="text" name="txt_gst" id="txt_gst" required/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      <input type="reset" name="btn_cancel" id="btn_cancel" value="cancel" /></td>
    </tr>
  </table>
  </div>
</form>
  </div>
<?php
include("Foot.php");
?>
</body>
<script src="../Assets/JQuery/jQuery.js"></script>
<script>
  function getdistrict(did)
{
	$.ajax({
		url: "../Assets/AjaxPages/AjaxDistrict.php?did=" + did,
		success: function(html) {
		
			$("#sel_district").html(html);

		}
	});
}
 function getplace(cid)
{
	$.ajax({
		url: "../Assets/AjaxPages/AjaxPlace.php?cid=" + cid,
		success: function(html) {
		
			$("#sel_place").html(html);

		}
	});
}
window.addEventListener("load", function() {
  document.getElementById("traderModal").style.display = "block";
});

document.querySelectorAll(".close, .modal").forEach(function(element) {
  element.addEventListener("click", function() {
    document.getElementById("traderModal").style.display = "none";
  
  });
});
document.getElementById("closeTraderModalButton").addEventListener("click", function() {
  document.getElementById("traderModal").style.display = "none";
});

// Prevent modal content from closing modal when clicked
document.querySelector(".modal-content").addEventListener("click", function(event) {
  event.stopPropagation();
});


</script>
<?php
 ob_flush();
 ?>
</html>