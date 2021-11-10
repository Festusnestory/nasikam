<?php
include("init.php");

$search_string = "";

if (isset($_GET["search_string"]))
{
	$found = true;
	$users = new users();
	$search_string = $_GET["search_string"];
	$all_users = $users->selectAllWhereG("ID like '%$search_string%'");
	// $all_users = $users->selectAll();
	
	if (count($all_users) < 1)
	{
		$found = false;
	}
}

?>
<html>
	<body>
		<span><?php
			if (isset($_GET["search_string"]))
			{
				if (!$found)
				{
					echo "Nothing was matched!";
				}
				else 
				{
					echo "Your search result for $search_string has returned the following: <br />";
					echo "<table border='1'>";
					echo "<th>No.</th>";
					echo "<th>Name</th>";
					echo "<th>Surname</th>";
					echo "<th>ID</th>";
					foreach($all_users as $index =>$user)
					{
						echo "<tr>";
						echo "<td>".($index+1)."</td>";
						echo "<td>".$user->name."</td>";
						echo "<td>$user->surname</td>";
						echo "<td>$user->ID</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
			}
			?></span>
		<form action="" method="get">
			<label>Enter ID: </label>
			<input name="search_string" type="text">
			
			<input value="Search" type="submit">
		</form>
	</body>
</html>