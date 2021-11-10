
	<?php
		class menu extends tableClass {
			public static $instance;
			
			function __construct() {
				 $this->table = get_class();
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
	