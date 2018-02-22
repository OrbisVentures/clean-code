<?php
//$mask = "|%5.5s |%-30.30s | x |\n";
function printmask($format, $data,$title=null){

    if($title){
        print "\n\n".$title."\n";
        print("--------------------------------------------------\n");
    }
    foreach($data as $key=>$value){
//        call_user_func_array('printf', array_merge((array)$format, [$key,$value]));
        printf($format,$key,$value);
    }
    print "\n\n\n";
}