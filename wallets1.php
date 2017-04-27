
<?php

$q=$_GET["q"];


$file = fopen("wallets.txt","r");
$str = fgets($file);
fclose($file);

$arr=explode(";",$str);

if($q=="w1")
{
	echo $arr[0];
}
else if($q=="w2")
{
	echo $arr[1];
}
else if($q=="w3")
{
	echo $arr[2];
}
else if($q=="w4")
{
	echo $arr[3];
}
else if($q=="w5")
{
	echo $arr[4];
}
else if($q=="w6")
{
	echo $arr[5];
}
else if($q=="w7")
{
	echo $arr[6];
}
else if($q=="w8")
{
	echo $arr[7];
}
else if($q=="w9")
{
	echo $arr[8];
}
else if($q=="w10")
{
	echo $arr[9];
}
else if($q=="w11")
{
	echo $arr[10];
}
else if($q=="w12")
{
	echo $arr[11];
}
else if($q=="w13")
{
	echo $arr[12];
}
else if($q=="w14")
{
	echo $arr[13];

}
else if($q=="w15")
{
	echo $arr[14];
}




?>
