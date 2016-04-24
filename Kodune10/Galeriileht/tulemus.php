
<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p><?php if(isset($_SESSION)) {
                require_once('masiiv.php');
                global $galerii;
                global $_SESSION;
                $gPikkus = count($galerii);
                $tulemus = implode($_SESSION);
                $vastus = intval($tulemus);
                $pilt = $vastus-1;
                if($vastus > 0 && $vastus <= $gPikkus ){
                    echo "Valisid pildi nr. ".htmlspecialchars($vastus);
                    echo "<br>";
                    echo "<img src=\"".$galerii[$pilt]."\"". "alt=\"nimetu".$vastus." \"". "/>";
                }else{
                    echo "Palun vali üks pilt!!!.";
                }
              }else{
                echo "Palun vali üks pilt.";
              }
       ?></p>
</div>
<?php
    require_once('foot.html');
?>