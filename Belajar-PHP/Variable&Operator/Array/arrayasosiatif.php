<?php
$alamat= array(
    			"farhan"=>"Kota Bandung",
				"retiishia"=>"Japan",
				"friz"=>"Indonesia"
              );

foreach($alamat as $x => $value) 
{
    echo "Alamat " .$x. "  di " . $value;
    echo "<br>";
}
?>