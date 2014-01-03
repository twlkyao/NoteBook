<?php
	/**
	 * Create the directory recursively.
	 * @param $path The directory to create, such as, /a/b/c/d/e/
	 * @param $mode The mode of the directory to create, such as, 0755, 0777.
	 */
	function RecursiveMkdir($path,$mode) {
		
		if (!file_exists($path)) { // The file is not exist.
			RecursiveMkdir(dirname($path), $mode); // Call itself.
			if(mkdir($path, $mode)) { // Call mkdir() to create the last directory, and the result is true.
				return true; 
			} else { // Call mkdir() to create the last directory, and the result is false.
				return false;
		   }
       } else { // The file is already exist.
		   return true;
	   }
   }
?>
