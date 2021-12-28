<?php

$folder = "./classes/";
if (isset($_GET["class_name"]))
{
	$class_name = $_GET["class_name"];
	$str_class = '
	<?php
		class '.$class_name.' extends tableClass {
			public static $instance;
			
			function __construct() {
				 $this->table = "`".get_class()."`";
				$this->GetMetaData();
			}

			public static function currentInstance() {
				if (!isset(self::$instance)) {
					self::$instance = new static();
				}
				return self::$instance;
			}
			public function Insert()
			{
				$this->store1();
			}
		}
	?>
	';
	$new_class = fopen($folder.$class_name.".php", "w") or die("Unable to open file!");
	fwrite($new_class, $str_class);
	fclose($new_class);
	echo "Success! Check in ".$folder.", for file: ".$class_name.".php";
}



?>


<form action="">
	<label>Enter Class Name:</label>
	<input type="text" name="class_name">
	<input type="submit">
</form>