<?php


$electbill;
$units=180;
if($units<=50)
{
echo $electbill=$units * 3.50;
}
else if($units>=50 && $units<=150)
{
    echo $electbill=$units * 4.00;
}
else if($units>=150)
{
    echo $electbill=$units * 6.50;
}

    

?>