<?php
ob_start();
session_start();
include("../Assets/Connection/Connection.php");

// Check if 'aid' and 'cid' are set in the GET parameters
if (isset($_GET['aid']) && isset($_GET['cid'])) {
    $_SESSION['comp_id'] = $_GET['cid'];
    $_SESSION['head_id'] = $_GET['aid'];
    ?>
    <script>
        window.location = "Auction.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <title>Cardamom Auction Manage System</title>

        <!-- Bootstrap core CSS -->
        <link href="../Assets/Template/User/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="../Assets/Template/User/Dashboard/css/fontawesome.css">
        <link rel="stylesheet" href="../Assets/Template/User/Dashboard/css/templatemo-onix-digital.css">
        <link rel="stylesheet" href="../Assets/Template/User/Dashboard/css/animated.css">
        <link rel="stylesheet" href="../Assets/Template/User/Dashboard/css/owl.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->

        <style>
            .hlogo {
                font-size: 50px;
                font-weight: 700;
                color: #2a2a2a;
                line-height: 72px;
                font-family: "Audiowide", sans-serif;
            }

            .hlogo>span {
                color: #ff695f;
            }

            .logo {
                margin-top: 15px;
            }
            .model-box {
                position: absolute ;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                color: black;
                padding: 1rem;
                background-color: #ffffffe6;
                border-radius: .8rem;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                display: none;
            }
        </style>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

        <!-- JavaScript -->


        <link rel="another stylesheet" href="../Assets/Template/User/vendor/bootstrap/css/auctionstyle.css">


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Auction</title>


        <?php
        $selQry34 = "SELECT * FROM tbl_lot WHERE company_id = " . $_SESSION['comp_id'] . " AND lot_status = '0'";
        $result34 = $conn->query($selQry34);

        if ($row34 = $result34->fetch_assoc()) {

        }
        ?>
    </head>

    <body onLoad="countdown(),milereload(<?php echo $row34['lot_id'] ?>)">
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
                    <div class="col-4">
                    <ul class="nav">
                                <div style="margin-bottom:1px">
                                    <div class="clock" id="timer">
                                        <div class="end-date" id="end-date">
                                            Date<!-- This will be filled dynamically by JavaScript --></div>
                                        <div class="countdown-time" id="countdown-time">00:00:00</div>
                                    </div>
                                </div>


                            </ul>
                  </div>
                    <div class="col-6">

                        <nav class="main-nav">

                            <!-- ***** Logo Start ***** -->
                            <div class="logo">
                                <div class="item header-text">
                                    <div style="display: flex; ">
                                        <img src="../Assets/Template/Admin/Dashboard/images/logos/vector-cardamom-ribbon-badge.png"
                                            width="70" height="70">
                                        <h2 class="hlogo">
                                            C<span>A</span>M<span>S</span></h2>
                                    </div>
                                </div>

                            </div>


                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->

                            
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                    <div class="col-2">
                    <div class="countdown">
                            <div id="time" class="countdown-text"></div>
                        </div>
    </div>
                </div>
            </div>
        </header>
        <div id="tab" class="our-services section">
            <div class="main">

            <!-- ***** Header Area End ***** -->


            <?php
            //  include("Head.php");
            ?>

            <br /><br />

            <?php
            // Get the list of lots for the company
            $selQry = "SELECT * FROM tbl_lot WHERE company_id = " . $_SESSION['comp_id'] . " and lot_status = 0";
            $result = $conn->query($selQry);

            if ($result->num_rows > 0) {
                ?>
                
                    <div class="b" >
                        <!-- Auction Details -->
                        <table id="lotTable" width="80%" border="1">
                            <thead>
                                <tr>
                                    <th>Lot Number</th>
                                    <th>LitreWeight</th>
                                    <th>Quantity</th>
                                    <th>QualityDetails</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['lot_number']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['lot_litreweight']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['lot_quantity']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['lot_qualitydetails']; ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>

                    <?php
            }

            $selQry6 = "SELECT 
                        COUNT(CASE WHEN lot_status = '0' THEN lot_id END) AS rem,
                        COUNT(lot_id) AS total,
                        COUNT(CASE WHEN lot_status = '1' THEN lot_id END) AS sold
                    FROM 
                        tbl_lot
                    WHERE 
                        company_id ='" . $_SESSION['comp_id'] . "'";

            $result6 = $conn->query($selQry6);
            $row5 = $result6->fetch_assoc();


            // Get the list of lots for the company
            $selQry = "SELECT * FROM tbl_lot WHERE company_id = " . $_SESSION['comp_id'] . " AND lot_status = '0'";
            $result = $conn->query($selQry);

            if ($row = $result->fetch_assoc()) {
                ?>
                   
                   <div class="d">
                    <!-- Current Lot Details -->
                    <table>
                        <tr>
                            <td colspan="2">
                            <img src="../Assets/Files/Lotphoto/<?php echo $row['lot_photo'] ?>" alt="Lot Photo" width="150" height="150"/>
                             </td>
                         </tr>
                        

                            <tr>
                                <th>Lot Number</th>
                                <td>
                                    <input type="hidden" name="mylot" value="<?php echo $row['lot_id']; ?>" />
                                    <?php echo $row['lot_number'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Litre Weight</th>
                                <td>
                                    <?php echo $row['lot_litreweight'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td>
                                    <?php echo $row['lot_quantity'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Bag</th>
                                <td>
                                    <?php echo $row['lot_bag'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Quality Details</th>
                                <td>
                                    <?php echo $row['lot_qualitydetails'] ?>
                                </td>
                            </tr>
                        </table>
            </div>

               
                <?php
            } else {
                $sel = "select * from tbl_lot l inner join tbl_auctionhead a on l.company_id = a.company_id WHERE auctionhead_date=curdate()";
                $res = $conn->query($sel);
                if ($res->num_rows > 0) {
                    header("location:AuctionHistory.php");
                } else {
                    header("location:ViewAuction.php");
                }
            }

            $selQry1 = "SELECT * FROM tbl_lot WHERE lot_id = " . $row['lot_id'];
            $result1 = $conn->query($selQry1);
            $row1 = $result1->fetch_assoc();
            ?>

            <br /><br />
            <script>
                <?php
                echo "var price = " . json_encode($row['lot_startingprice']) . ";";
                echo "var remlot = " . json_encode($row5['rem']) . ";";
                echo "var totlot = " . json_encode($row5['total']) . ";";
                echo "var sold = " . json_encode($row5['sold']) . ";";

                ?>

                // Add an event listener for the DOMContentLoaded event
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById('txt_price').value = price;
                    document.getElementById('txt_price').textContent = price;
                    document.getElementById('txt_highPrice').value = price;
                    document.getElementById('txt_highPrice').textContent = price;
                    document.getElementById('txt_remlot').textContent = remlot;
                    document.getElementById('txt_remlot').value = remlot;
                    document.getElementById('txt_total').textContent = totlot;
                    document.getElementById('txt_sold').textContent = sold;
                });
            </script>
          
                <div id="modelBox" class="model-box"></div>
                <div class="e">
                    <div class="auction-status">
                        <!-- Auction Status -->
                        <table>
                            <tr>
                                <td>Highest Price</td>
                                <td>
                                    <span id="txt_highPrice"></span>
                                </td>
                                <td>Remaining lot</td>
                                <td>
                                    <span id="txt_remlot"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Total lot</td>
                                <td>
                                    <span id="txt_total"></span>
                                </td>
                                <td>Sold lot</td>
                                <td>
                                    <span id="txt_sold"></span>
                                </td>
                            </tr>
                        </table>

                        <form method="post">
                            <table class="add_table">
                                <tr>
                                    <td>
                                        <span id="txt_price"></span>
                                    </td>
                                    <td>
                                        <input type="button" name="btn_price" id="btn_price" value="+2"
                                            onClick="addprice(document.getElementById('txt_highPrice').value, <?php echo $row1['lot_id'] ?>),callAddLot(<?php echo $row1['lot_id'] ?>)">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                
            </div>
        
            </div>
        </div>
       
        <!-- Scripts -->
        <script src="../Assets/Template/User/vendor/jquery/jquery.min.js"></script>
        <script src="../Assets/Template/User/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../Assets/Template/User/Dashboard/js/owl-carousel.js"></script>
        <script src="../Assets/Template/User/Dashboard/js/animation.js"></script>
        <script src="../Assets/Template/User/Dashboard/js/imagesloaded.js"></script>
        <script src="../Assets/Template/User/Dashboard/js/custom.js"></script>
    </body>

    <?php ob_flush(); ?>
    <script src="../Assets/JQuery/jQuery.js"></script>
    <script>
        function lastTime(lotId) {
            setInterval(function () {


                $.ajax({
                    url: "../Assets/AjaxPages/AjaxCount.php?action=fetch&lot=" + lotId,
                    success: function (returntime) {
                        returntime = returntime.trim();
                        if (returntime == 1) {

                            setTimeout(function () {
                                addlot(lotId);
                            }, 2000); // 2000 milliseconds = 2 seconds delay

                        }

                        document.getElementById('time').innerHTML = returntime;


                    }
                });


            }, 1000); // Update every second
        }

        function callAddLot(lotId) {


            $.ajax({
                url: "../Assets/AjaxPages/AjaxCount.php?action=check&lot=" + lotId,
                success: function (html) {

                }
            });


        }

        function countdown() {
            var now = Date.now(); // Get current timestamp in milliseconds
            var startTime1 = new Date(); // Set the start time for the first time period (10:00 AM)
            startTime1.setHours(10, 0, 0);
            var endTime1 = new Date(); // Set the end time for the first time period (02:00 PM)
            endTime1.setHours(14, 0, 0);
            var startTime2 = new Date(); // Set the start time for the second time period (02:30 PM)
            startTime2.setHours(14, 30, 0);
            var endTime2 = new Date(); // Set the end time for the second time period (06:30 PM)
            endTime2.setHours(18, 30, 0);

            var endTime, message;

            if (now >= startTime1 && now < endTime1) {
                // If the current time is within the first time period
                endTime = endTime1;
                message = "Countdown for the first time period finished!";
            } else if (now >= startTime2 && now < endTime2) {
                // If the current time is within the second time period
                endTime = endTime2;
                message = "Countdown for the second time period finished!";
            } else {
                // If the current time is outside both time periods
                document.getElementById('timer').innerHTML = "No countdown at the moment.";
                return null;
            }

            var timer = setInterval(function () {
                var currentTime = Date.now(); // Get current timestamp in milliseconds
                var remainingTime = endTime - currentTime; // Calculate remaining time in milliseconds

                if (remainingTime <= 0) {
                    clearInterval(timer);
                    document.getElementById('timer').innerHTML = message;
                } else {
                    var hours = Math.floor(remainingTime / (1000 * 60 * 60));
                    var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                    // Create a Date object from the end time to get the date in the timer
                    var endDateObj = new Date(endTime);
                    var endDateString = endDateObj.toDateString(); // Get the end date in a readable format

                    // Display the countdown and the end date in the 'timer' element
                    document.getElementById('countdown-time').innerHTML = hours + ":" + minutes + ":" + seconds;
                    document.getElementById('end-date').innerHTML = endDateString;
                }
            }, 1000); // Update every second

        }

        function milereload(id) {
            lastTime(id);
            setInterval(function () {

                $.ajax({
                    url: "../Assets/AjaxPages/AjaxBidding.php?action=fetch&lot=" + id,
                    success: function (html) {
                        var response = JSON.parse(html);
                        var value1 = response.value1; // Access the first value
                        var value2 = response.value2; // Access the second value
                        var value3 = response.value3; // Access the third value

                        $("#time").html(value1);
                        $("#txt_highPrice").html(value2);
                        $("#txt_remlot").html(value3);
                    }
                });

            }, 100);

        }


        function addprice(price, id) {
            price = price.trim();
            $.ajax({
                url: "../Assets/AjaxPages/AjaxBidding.php?action=add&price=" + price + "&lot=" + id,
                success: function (html) {
                    var response = JSON.parse(html);
                    var value1 = response.value1; // Access the first value
                    var value2 = response.value2; // Access the second value
                    var value3 = response.value3; // Access the third value

                    $("#txt_price").html(value1);
                    document.getElementById('txt_price').value = value1;
                    $("#txt_highPrice").html(value2);
                    document.getElementById('txt_highPrice').value = value2;
                    $("#txt_remlot").html(value3);
                    document.getElementById('txt_remlot').value = value3;
                }
            });
        }

        function addlot(id) {
            $.ajax({
                url: "../Assets/AjaxPages/AjaxAddLot.php?lot=" + id,
                success: function (html) {
                    var returnedValue = html;  // Store the returned value in a variable

                    showModelBox(returnedValue); // Pass the returned value to the showModelBox function
                }
            });
        }

        function showModelBox(n) {
            var modelBox = document.getElementById("modelBox");
            var seconds = 3;
            if (n == 1) {
                modelBox.innerHTML = "<strong>Congratulations You won the Lot!</strong><br> Next lot starts in " + seconds + " seconds";
            }
            else if (n == 2) {
                modelBox.innerHTML = "<strong>Congratulations You won the Lot!</strong><br> The Auction Ended";
            }
            else if (n == 3) {
                modelBox.innerHTML = "<strong>Better Luck Next time!</strong><br> Next lot starts in " + seconds + " seconds";
            }
            else {
                modelBox.innerHTML = "<strong>Better Luck Next time!</strong><br> The Auction Ended";
            }
           modelBox.style.display = "block";

            var countdown = setInterval(function () {
                seconds--;

                if (n == 1) {
                    modelBox.innerHTML = "<strong>Congratulations You won the Lot!</strong><br> Next lot starts in " + seconds + " seconds";
                }
                else if (n == 2) {
                    modelBox.innerHTML = "<strong>Congratulations You won the Lot!</strong><br> The Auction Ended";
                }
                else if (n == 3) {
                    modelBox.innerHTML = "<strong>Better Luck Next time!</strong><br> Next lot starts in " + seconds + " seconds";
                }
                else {
                    modelBox.innerHTML = "<strong>Better Luck Next time!</strong><br> The Auction Ended";
                }
                if (seconds <= 0) {
                    clearInterval(countdown);
                   modelBox.style.display = "none";
                    location.reload();
                }
            }, 1000);
        }
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#lotTable').DataTable();
        });






    </script>

</html>