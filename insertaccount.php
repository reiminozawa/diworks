<?php
mb_internal_encoding("utf8");


try{
$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","root"
            );

$pdo->exec("insert into
diworks_account(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag)values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".password_hash($_POST['password'], PASSWORD_DEFAULT)."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."',0);"
          );

}catch(PDOException $e){
    echo "エラー発生";
}
?>




<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="styleaccount_confirm.css">
    </head>
    
    <body>
        
        <h2>アカウント登録完了画面</h2>
        <div class="border">
     <header>   
        <ul class="menu1">
       <li>トップ</li>
       <li>プロフィール</li>
       <li>D.I.Blogについて</li>
       <li>登録フォーム</li>
       <li>問い合わせ</li>
       <li>その他</li>
   </ul> 
    </header>
            
    <main>
       
        <h1>登録完了しました</h1>
    <form action="index17.php">
        <input type="submit" value="TOPページへ戻る">
    </form>
    </main>
            
    <footer>Copyright D.I.works| D.I.blog is the one which provides A to Z about programming</footer>
        </div>     
    </body>
</html>