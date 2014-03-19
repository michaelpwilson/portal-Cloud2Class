<div class="row">
<div class="file-modal-info">
<div class="bs-callout bs-callout-info">To download a file, press the green button located on the bottom right<br>
hand side. To view an image or for more information on the file, simply<br> click the image.</code>
</div>
<?php 
$dir = "server/php/files/"; 
chdir($dir); 
array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_DESC, $files); 
foreach($files as $filename) { 
$file_type = pathinfo($filename, PATHINFO_EXTENSION);
if($file_type == "png" || $file_type == "jpeg" || $file_type == "jpg" || $file_type == "gif"){
echo '<div class="col-xs-6 col-md-3"><a href="#" class="thumbnail"><img src="server/php/files/' . $filename . '"/>
<form method="get" action="server/php/files/' . $filename . '">
<button class="thumbnail-download btn-xs btn-success" type="submit"><b class="glyphicon glyphicon-download"></b></button>
</form>
</a></div>';
} else{ 
if($file_type == "sql"){
echo '<div class="col-xs-6 col-md-3"><a href="#" class="thumbnail"><img src="http://l1311.hizliresim.com/1h/g/ujrjn.png"/>
<form method="get" action="server/php/files/' . $filename . '">
<button class="thumbnail-download btn-xs btn-success" type="submit"><b class="glyphicon glyphicon-download"></b></button>
</form>
</a></div>';
}
}
}  
?>
</div>
