<?php


try{
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","root"
            );

    if(empty($_POST['password'])){
        //パスワードが入力されてない時
        $sql="UPDATE diworks_account SET family_name='".$_POST['family_name']."',last_name='".$_POST['last_name']."',family_name_kana='".$_POST['family_name_kana']."',last_name_kana='".$_POST['last_name_kana']."',mail='".$_POST['mail']."',gender='".$_POST['gender']."',postal_code='".$_POST['postal_code']."',prefecture='".$_POST['prefecture']."',address_1='".$_POST['address_1']."',address_2='".$_POST['address_2']."',authority='".$_POST['authority']."' WHERE id='".$_POST['id']."'";
        
    }else{
        //パスワードが入力された時
        $sql="UPDATE diworks_account SET family_name='".$_POST['family_name']."',last_name='".$_POST['last_name']."',family_name_kana='".$_POST['family_name_kana']."',last_name_kana='".$_POST['last_name_kana']."',mail='".$_POST['mail']."',password='".password_hash($_POST['password'], PASSWORD_DEFAULT)."',gender='".$_POST['gender']."',postal_code='".$_POST['postal_code']."',prefecture='".$_POST['prefecture']."',address_1='".$_POST['address_1']."',address_2='".$_POST['address_2']."',authority='".$_POST['authority']."' WHERE id='".$_POST['id']."'";

    }
    
    
    
   //var_dump($sql);
$stmt=$pdo->query($sql);  
  
}catch(PDOException $e){
    
    echo "<font color=\"red\">エラーが発生したためアカウント更新できません。</font>";
     
}
?>




<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>アカウント更新完了画面</title>
        <link rel="stylesheet" type="text/css" href="regist_complete.css">
    </head>
    
    <body>
       
        <h2>アカウント更新完了画面</h2>
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
       
        <h1>更新完了しました</h1>
    <form action="index17.php">
        <input type="submit" value="TOPページへ戻る" style="width:150px; height:50px">
    </form>

    </main>       
    <footer>Copyright D.I.works| D.I.blog is the one which provides A to Z about programming</footer>
        </div>     
    </body>
</html>