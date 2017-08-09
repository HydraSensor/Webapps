<?php
function include_all_php($folder){
    foreach ((array)glob("{$folder}/*.php") as $filename)
    {
        if($filename != ""){
            include $filename;
        }
    }
}

function include_class($folder){
  if ($_SESSION['cliente'] == "Si"){
    include_all_php("../../class/".$folder);
  }else {
    include_all_php("../class/".$folder);
  }
}

?>
