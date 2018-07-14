<?php
if($conn = mysqli_connect('localhost','root',''))
{
	mysqli_select_db($conn,'resultSystem');

	if($result = mysqli_query($conn,"SELECT * FROM result order by id"))
	{
		while ($rows = mysqli_fetch_assoc($result)) {
			# get the data from the database...
			echo 'id :'.$rows['id'];
			echo '<br/>Name : '.$rows['stdName'];
			echo '<br/>Collage : '.$rows['stdCollage'];
			echo '<br/>Department : '.$rows['stdDepartment'];
			echo '<br/>Degree : '.$rows['semDegree'];
			echo"<br/><hr>";

		}
	}
	else{
		echo mysqli_error($conn);
	}
}
?>