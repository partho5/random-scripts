<?php

//there won't be any trailing slash (/) at the end of any dir or file path

//zip file have to be zipped direct from laravel folder



/*************   IMPORTANT   **************************/

//DONT fist keep files in a folder, then zip . Oh DONT DO THIS



$zip = new ZipArchive;

if ($zip->open(__DIR__.'/directory.zip') === TRUE) {
    $zip->extractTo(__DIR__.'/');
    $zip->close();
    echo 'ok';
}else{
	echo "error";
}

