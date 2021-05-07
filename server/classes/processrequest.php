<?php
	class processRequest {
		public function test_input($data): string {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	}	
?>


