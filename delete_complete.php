<?php


try{
 mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
    $sql="UPDATE diworks_account SET delete_flag=1 WHERE id=".$_POST['id']; //$_GETの使い方
    $stmt=$pdo->query($sql);  

}catch(PDOException $e){
    
    echo "<font color=\"red\">エラーが発生したためアカウント削除できません。</font>";
     
}



?>

<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除完了画面</title>
        <link rel="stylesheet" type="text/css" href="regist_complete.css">
    </head>
    
    <body>
       
        <h2>アカウント削除完了画面</h2>
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
       
        <h1>削除完了しました</h1>
    <form action="index17.php">
        <input type="submit" value="TOPページへ戻る" style="width:150px; height:50px">
    </form>

    </main>       
    <footer>Copyright D.I.works| D.I.blog is the one which provides A to Z about programming</footer>
        </div>     
    </body>
</html>