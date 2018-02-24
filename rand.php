<?php
function api()
{
$str=array(chr (rand(65,90)),
chr (rand(97,122)),
chr ( rand(48,57)),
chr (rand(65,90)),
chr (rand(97,122)),
chr ( rand(48,57)),
chr (rand(65,90)),
chr (rand(97,122)),
chr (rand(97,122)),
chr ( rand(48,57)),
chr (rand(65,90)),
chr (rand(97,122)),
chr ( rand(48,57)),
chr (rand(65,90)),
chr (rand(97,122))
);
shuffle($str);
$s = implode("",$str) ;
return $s;
}
 
?>
