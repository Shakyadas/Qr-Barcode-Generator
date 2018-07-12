<?php
$qrcode = '<center><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$_REQUEST['code'].'" title="Link to Google.com"></center>';
echo $qrcode;
?>