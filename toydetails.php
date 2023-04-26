<?php
require 'dbcon.php';

// echo $_SESSION['username'];
// ob_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
} else {
  header('Location: index.php?option=login');
  exit;
}

if (isset($_GET['t_id'])) {
  $t_id = $_GET['t_id'];
} else {
  $t_id = 5;
  // echo $t_id;
}

$queryy = mysqli_query($conn, "select t_id,t_name,a_category,t_amt,image_path,image_desc from toys where t_id='$t_id'");

$query2 = mysqli_query($conn, "select * from userreg where username='$username'");

$userRow = mysqli_fetch_array($query2);
// echo $userRow['user_id'];

if (isset($_POST['submit'])) {

  $toyId = $_POST['toyId'];
  $total = $_POST['total'];
  $total1 = intval($total);
  $quantity = $_POST['quantity'];
  $quantity1 = intval($quantity);
  $subTotal = abs($total1 * $quantity1);
  $userId = $userRow['user_id'];
  $userAddress = $userRow['address'];
  $userCity = $userRow['city'];
  $userContact = $userRow['contact'];
  $useremail = $userRow['email'];
  $userFirstName = $userRow['first_name'];
  $userLastName = $userRow['last_name'];
  $date = date('d-m-y');

  $sql2 = "insert into orders(user_id,toy_id,user_firstname,user_lastname,user_address,user_contact,user_email,user_city,quantity,total_amount,pay_status,order_date) values ('$userId','$toyId','$userFirstName','$userLastName','$userAddress','$userContact','$useremail','$userCity',$quantity,'$subTotal','pending','$date')";

  if (!mysqli_query($conn, $sql2)) {
    echo 'Not Inserted';
    echo ("Error description: " . mysqli_error($conn));
  } else {
    $message = "Order Placed Successfully !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('location:invoice.php');
  }
}
require 'header.php';
?>



  <!-- shop section -->
  <form method="post" action="toydetails.php">
    <section class="shop_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Product Details
          </h2>
        </div>

        <div class="row">
          <?php
          $result = mysqli_num_rows($queryy);
          if ($result != 0) {
            $i = 1;
            while ($row = mysqli_fetch_array($queryy)) {
          ?>
              <input type="text" name="total" value="<?php echo $row['t_amt']; ?>" hidden>
              <input type="text" name="toyId" value="<?php echo $row['t_id']; ?>" hidden>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">

                  <div class="img-box">
                    <img src="images/<?php echo $row['image_path']; ?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      Name:<?php echo $row['t_name']; ?>
                    </h6>
                    <h6>
                      Toy description:<?php echo $row['image_desc']; ?>
                    </h6>
                    <h6>
                      Amount:<?php echo $row['t_amt']; ?>
                    </h6>
                    <h6>
                      Quantity:<select class="selectpicker" name="quantity" required>
                        <option>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>

                      </select>
                    </h6>

                    <input type="submit" value="Order" name="submit" class="btn btn-success">
                    <a href="http://localhost/toy%20(2)/toy/index.php?option=category"><button>Cancel</button></a>
                  </div>

                </div>
              </div>
          <?php
              echo "</tr>";
              $i++;
            }
          }
          ?>


    </section>
  </form>

  <!-- end shop section -->
<?php

require 'footer.php';