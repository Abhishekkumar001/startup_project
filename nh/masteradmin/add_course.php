<?php
require "beginadmin.php";
?>
<body>

<div class="container signbox">
<h4 class="text-center"><i class="fa fa-plus"></i> Add Course</h4>
<?php if(isset($_GET["success"])) echo "<h5 class=\"text-center\" style=\"color:green\">Course has been addded successfully</h5>";?>
<?php if(isset($_GET["failed"])) echo "<h5 class=\"text-center\" style=\"color:red\">Something went wrong. Try again after sometime.</h5>";?>

<form class="form" action="add_courseback.php" method="POST">
    	  <input required  required type="text" class="form-control"  placeholder="Course Name" name="course" ><br>

	<div align="center"><input required  required type="submit" class="inputButton"name="submit" value="Submit"></div>
	</form>
	</div>

</body>
</html>
