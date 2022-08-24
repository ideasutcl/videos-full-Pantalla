<?php 
function Listavideos($dir)
{
    
    $listv = scandir($dir);
    unset($listv[0]);
    unset($listv[1]);
    sort($listv);

    foreach($listv as $key => $elem){
        $listv[$key] = $dir.$elem;
    }
    return $listv;
}
?>