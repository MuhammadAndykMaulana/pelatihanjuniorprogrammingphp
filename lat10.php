lat10
n=5
1
12
123
1234
12345
<br>
<?php
$n=5;
for ($i=1;$i<=n;$i++)
{
 for ($j=1;$j<=$i;$j++){
   echo "$j";
 }
 echo "<br>";
}

$o=5;
for ($i=1;$i<=o;$i++)
{
 for ($j=$i;$j>=1;$j--){
   echo "$j";
 }
 echo "<br>";
}
?>
