	<?php
	include 'mod2_opendb.php';
	include 'mod2_config.php';


               $lastname = (isset($_POST['last_name'])    ? $_POST['last_name']   : '');

$sql= "SELECT employeeid, managementid, first_name, last_name, age, employment_period FROM employees WHERE last_name = '$lastname' ";

$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
				echo "<b>Record found</b><br>";
				echo "<b>EmployeeID: " . $row["employeeid"]. "</b><br>";
        		echo "<b>ManagementID: " . $row["managementid"]. "</b><br>";
        echo "<b>Name: " . $row["first_name"]. " " . $row["last_name"]. "</b><br>";
				echo "<b>Age: " . $row["age"]. "</b><br>";
				echo "<b>Employment Period In Months: " . $row["employment_period"]. "</b><br>";
    }
} else {
    echo "Sorry there are no matches! Please check your entry and try again.";
}


mysqli_close($con);

?>
