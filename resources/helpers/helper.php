<?php
function Videos($val){
$random =  range(1,$val);
  shuffle($random);
   return [ $random[0],$random[1],$random[2],$random[3],$random[4] ];
}
