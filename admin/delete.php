<?php
$id = $_GET['del'];

require '../dbconn.php';
if (!isset($_SESSION['adminemail'])) {
	$_SESSION['error'] = 'Login to continue';
	header('location: /admin/');
}
$sql = "delete from toys where t_id='$id'";
if ($conn->query($sql) === TRUE) { ?>
  <script type="text/javascript">location.href = 'manage.php';</script>
<?php } else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>