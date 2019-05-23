menghitung jumlah masing2 karakter dalam kalimat.
mis: nama sata aman
a=6
m=2
n=2
s=1
y=1
<br>

<?php
$data="nama saya aman.";
$data2="nama sAyA aman. 1234";
$data2=strtolower($data2);
foreach (count_chars($data,1) as $key => $jumlah) {
  // code...
  if (chr($key)<>"." && chr($key)<>" "){
    echo chr ($key), " = $jumlah <br>";
}
foreach (count_chars($data2,1) as $key => $jumlah) {
  if (($key >=65 && $key <=90) || ($key>=97 && $key<=122))
  {// code...
    echo chr ($key)," = $jumlah <br>";
  }
}
echo "Jumlah kata ", substr_count($data2, " ")+1,"<br>";
$hasil=count_chars($data2,1);
arsort($hasil);
foreach (count_chars($data2,1) as $key => $jumlah) {
  if (($key >=65 && $key <=90) || ($key>=97 && $key<=122)){// code...
    echo chr ($key)," = $jumlah <br>";
  }
}
echo "Jumlah huruf terbanyak: ", chr(key($hasil));
?>
