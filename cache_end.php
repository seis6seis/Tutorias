<?php
$fp = fopen($cachelink, 'w');@fwrite($fp, ob_get_contents());@fclose($fp);ob_end_flush();
?> 