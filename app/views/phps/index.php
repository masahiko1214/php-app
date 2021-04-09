<?php

    // 関数getCircleAreaを定義してください
    function getCircleArea($radius){
      
      return $radius*$radius*3;
    }
    
    // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
      $circleArea = getCircleArea(5);
    
    // $circleAreaをechoしてください
    echo $circleArea;
    
// if文
    $age = 31;
    if($age >= 30){
      echo 'あなたは30歳以上です。';
    }
      else{
        echo 'あなたは30歳未満です。';
        
      }
      

      // switch文

    // 変数$numを定義し、好きな数字を代入してください
    $num = 777;
    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
    $remainder = $num % 3;
    // switch文を用いてください
    switch ($remainder) {
    
      case 0:
       echo '大吉です。';
       break;
      
      case 1:
       echo '中吉です。';
       break;
      
      case 2:
       echo '小吉です。';
       break;
      
      default:
       echo '凶です。';
       break;
    }
  
  

  ?>