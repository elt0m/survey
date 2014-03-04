<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: -1");
if ($xmlResponse) {
    header("Content-type: text/xml;charset:UTF-8");
    echo '<?xml version="1.0" ?>';
    echo $result;
} else {
    header("Content-Type: application/json; charset=utf-8; ");
    echo json_encode($result);
}
?>