<div class="row">
<?php 
$dir = "server/php/files/"; 
chdir($dir); 
array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files); 
foreach($files as $filename) { 
$file_type = pathinfo($filename, PATHINFO_EXTENSION);
if($file_type == "png" || $file_type == "jpeg" || $file_type == "jpg" || $file_type == "gif"){
echo '<div class="col-xs-6 col-md-3"><a href="#" class="thumbnail"><img src="server/php/files/' . $filename . '"/></a></div>';
} else{ 
if($file_type == "sql"){
echo '<div class="col-xs-6 col-md-3"><a href="#" class="thumbnail"><img src="http://l1311.hizliresim.com/1h/g/ujrjn.png"/></a></div>';
}
}
}  
?>
</div>
