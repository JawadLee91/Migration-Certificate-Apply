<?php
 $certificate = $_GET['certificate_name'];
$certificate_path = "PrincipalUploads/$certificate";
echo "
<img src='$certificate_path' style='width:100%;'/>
";

?>