<?php
include("init.php");

$search_string = "";

if (isset($_GET["search_string"]))
{
	$found = true;
	$users = new users();
	$search_string = $_GET["search_string"];
	$users->selectWhere("ID", $search_string);
	
	
	// die($users->query);
	
	$search_result = "<span style='color: blue; background-color: green;'>".$users->name." ".$users->surname."</span>";
	if ($users->user_id == "")
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
					echo "Nothing was matched for '$search_string'!";
				}
				else echo "Your search result for $search_string: $search_result<br />";
			}
			?></span>
		<form action="" method="get">
			<label>Enter ID: </label>
			<input name="search_string" type="text">
			
			<input value="Search" type="submit">
		</form>
	</body>
</html>