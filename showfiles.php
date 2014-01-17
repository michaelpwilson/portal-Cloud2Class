<div class="row">
<?php 

// open this directory 
$dir = opendir("server/php/files");

// get each entry
while($file = readdir($dir)) {
    if (substr($file, 0, 1) != '.') {
        echo '<div class="col-xs-6 col-md-3"><a href="#" class="thumbnail"><img src="server/php/files/' . $file . '"/></a></div>';
    }
}

// close directory
closedir($dir);

?>
</div>
