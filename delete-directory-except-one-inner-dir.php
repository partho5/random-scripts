<?php


(new Delete())->deleteDir(__DIR__."/myDir", "exceptDir");



class Delete{

	public static function deleteDir($dirPath, $deleteExcept) {
	    if (! is_dir($dirPath)) {
	        throw new InvalidArgumentException("$dirPath must be a directory");
	    }

	    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
	        $dirPath .= '/';
	    }

	    $files = glob($dirPath . '{,.}*[!.]', GLOB_MARK | GLOB_BRACE);;


	    foreach ($files as $file) {
	        if (is_dir($file)) {
	            if( ($file."") == ($dirPath.$deleteExcept."/") ){
	            	echo $file." <span style='color:red'> permission denied</span><br>";
	            }else{
	            	self::deleteDir($file, $deleteExcept);
	            	echo $file." <span style='color:#e200a8'> deleted</span><br>";
	            }
	        } else {
	            unlink($file);
	            echo $file." <span style='color:#e200a8'> deleted</span><br>";
	        }
	    }

	    rmdir($dirPath);

	    echo $dirPath." <span style='color:#e200a8'> deleted</span><br>";

	}

}