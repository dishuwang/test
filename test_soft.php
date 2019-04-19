<?php


$a1=array("1"=>"red","2"=>"green","3"=>"blue");
$a2=array("3"=>"yellow","7"=>"black","9"=>"brown");
$a3=array("4"=>"green","3"=>"purple","6"=>"red");

$result=array_intersect_key($a1,$a2,$a3);
// print_r($result);


$allcids = [5733,123,456];
$zh_cids = array(57333, 57442, 57352, 57326);
if (array_intersect($zh_cids,$allcids)) {
    $clmnid[] = 1183;
}

// print_r(array_intersect($zh_cids,$allcids));
$clmnid = [0=>2,'aaa'=>'4','aaa'=>'3'];
$clmnid[] = 1183;
$clmnid = array_unique($clmnid);
$clmnid1 = array('aaa'=>'45', 1=>'5');
$c = array_merge($clmnid, $clmnid1);
// print_r($c);

$json = json_encode(['a'=>'A','b'=>'B']);
$aaa = json_decode($json, false);
// print_r($aaa);

$aaa = implode(',',['a'=>'aaa',2=>'bbb',8=>'ccc']);
print_r($aaa);

?>