<?php
$id = $_GET['del'];

$con = new mysqli('localhost', 'root', '','toystore');
$sql = "delete from toys where t_id='$id'";
if ($con->query($sql) === TRUE) { ?>
  <script type="text/javascript">location.href = 'manage.php';</script>
<?php } else {
  echo "Error deleting record: " . $con->error;
}
$con->close();
?>