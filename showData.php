<?php
    require_once('tblInfo.php');

    $data = new TblInfo;

    //Fetch Information data
    $data = $data->show();
    echo json_encode($data);
?>
