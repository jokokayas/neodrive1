<?php 
defined("BASEPATH") or exit("No direct access allowed");
error_reporting(0);
include "system/function.php";
    check_cache();
    $size = formatBytes(total_size2());
    $totaluser = totaluser();
    $totalshare = totalshare();
    $totaldownload = totaldownload();

$hasil = array(
             user => $totaluser,
             share => $totalshare,
             size => $size,
             download => $totaldownload
             );
    echo json_encode($hasil);
?>