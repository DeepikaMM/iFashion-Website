
<?php

$q=$_GET["q"];


$file = fopen("women.txt","r");
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
else if($q=="w16")
{
	echo $arr[15];
}
else if($q=="w17")
{
	echo $arr[16];
}
else if($q=="w18")
{
	echo $arr[17];
}
else if($q=="w19")
{
	echo $arr[18];
}
else if($q=="w20")
{
	echo $arr[19];
}
else if($q=="w21")
{
	echo $arr[20];
}
else if($q=="w22")
{
	echo $arr[21];
}
else if($q=="w23")
{
	echo $arr[22];
}
else if($q=="w24")
{
	echo $arr[23];
}
else if($q=="w25")
{
	echo $arr[24];
}
else if($q=="w26")
{
	echo $arr[25];
}
else if($q=="w27")
{
	echo $arr[26];
}
else if($q=="w28")
{
	echo $arr[27];
}
else if($q=="w29")
{
	echo $arr[28];
}
else if($q=="w30")
{
	echo $arr[29];
}
else if($q=="w31")
{
	echo $arr[30];
}
else if($q=="w32")
{
	echo $arr[31];
}
else if($q=="w33")
{
	echo $arr[32];
}
else if($q=="w34")
{
	echo $arr[33];
}
else if($q=="w35")
{
	echo $arr[34];
}
else if($q=="w36")
{
	echo $arr[35];
}



?>
