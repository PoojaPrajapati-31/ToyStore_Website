<?php
// require 'dbcon.php';
// $query=mysqli_query($conn,"select * from userreg where username=$username");
// $sql = mysqli_fetch_array($query); // fetch data
	// Check if form has been submitted
	if(isset($_POST['submit'])) {
		// Get form data
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone_no'];
		$question = $_POST['question'];

		// Insert form data into database
		$sql = "INSERT INTO contact (name, email, phone_no, question) VALUES ('$name', '$email', '$phone', '$question')";
    $result=mysqli_query($conn,$sql);
		if (isset($result)) {
		    // echo "question submitted successfully";
        $message = "Feedback Submitted Successfully..!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('location:/index.php?option=home');
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	// Close database connection
	mysqli_close($conn);
	?>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
            <img src="images/thetoy.jpg" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
            <div class="heading_container heading_center">
              <h2 class="">
                Contact Us
              </h2>
            </div>
            <form method="post" action="contact.php">
                <div>
                  <label for="name"></label>
              <input type="text" name="name" placeholder="Name" required>
            </div>
            <div>
              <input type="email" name="email" placeholder="Email"/>
            </div>
            <div>
            <label for="phone_no"></label>
<input type="tel" id="phone" name="phone_no" Maxlength="10" placeholder="Phone number">

            </div>
            <div>
            <input type="text" name="question" class="message-box" placeholder="Question"/>
            </div>
            <div class="d-flex">
            <input type="submit" name="submit" value="Send"/>
            </div>
            </form>
          </div>
        </div>
      </div> 
  </section>
  <!-- end contact section -->
</body>

  </html>