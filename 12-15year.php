<?php 
require 'dbcon.php';

$queryy=mysqli_query($conn,"select t_id,t_name,a_category,t_amt,image_path,image_desc from toys where a_category='12-15y'");

require 'header.php';
?>
  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          12-15 year Category
        </h2>
      </div>
      
      <div class="row">
      <?php 
      $result=mysqli_num_rows($queryy);
      if($result !=0){
        $i=1;
        while($row=mysqli_fetch_array($queryy))
        {
      ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
              <img src="images/<?php echo $row['image_path'];?>" alt="">
              </div>
              <div class="detail-box">
                <a href="">
                <?php echo $row['t_name'];?>
                </a>
                <h6>
                <?php echo $row['t_amt'];?>
                </h6>
                  
                    <a href="toydetails.php?t_id=<?php echo $row['t_id']; ?>"><button>Add</button></a>
                  
              </div>
            </a>
          </div>
        </div>
        <?php
echo "</tr>";
$i++;
  }
}else {
?>

   <h2>Sorry..No Toys Avaible for this Category currently.</h2> 
   <style>
      h2{
        color: white;
      }
   </style>
   <?php } ?>    
      </div>
      <div class="btn-box">
        <a href="/index.php?option=category">
          View Category
        </a>
      </div>
    
  </section>

  <!-- end shop section -->

  <?php 

require 'footer.php';
?>