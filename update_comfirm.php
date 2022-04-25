<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <title>アカウント登録確認画面</title>
    <link rel="stylesheet" type="text/css" href="update_confirm.css">
</head>
    
<body>
    <h2>アカウント登録確認画面</h2>
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
      <h3>アカウント登録確認画面</h3>  
    
        <table border="0">
            <tr>
                <td>名前（姓）</td>
                <td>
                    <?php echo $_POST['family_name']; ?>
                </td>
            </tr>
            
            <tr>
                <td>名前（名）</td>
                <td>
                    <?php echo $_POST['last_name']; ?>
                </td>
            </tr>
            
            <tr>
                <td>カナ（姓）</td>
                <td>
                    <?php echo $_POST['family_name_kana']; ?>
                </td>
            </tr>
            
            <tr>
                <td>カナ（名）</td>
                <td>
                    <?php echo $_POST['last_name_kana']; ?>
                </td>
            </tr>
            
            <tr>
                <td>メールアドレス</td>
                <td>
                    <?php echo $_POST['mail']; ?>
                </td>
            </tr>
            
            <tr>
                <td>パスワード</td>
                <td>
                   <input type="hidden" name="password" size="35"  >
                </td>
            </tr>
            
            <tr>
                <td>性別</td>
                <td>
                  <?php
                    $b=$_POST['gender'];
                    if($b==0){
                        echo "男";
                    }elseif($b==1){
                        echo "女";
                    }
                ?>
                </td>
            </tr>
            
            <tr>
                <td>郵便番号</td>
                <td>
                    <?php echo $_POST['postal_code']; ?>
                </td>
            </tr>
            
            <tr>
                <td>住所（都道府県）</td>
                <td>
                    <?php echo $_POST['prefecture']; ?>
                </td>
            </tr>
            
            <tr>
                <td>住所（市区町村）</td>
                <td>
                    <?php echo $_POST['address_1']; ?>
                </td>
            </tr>
            
            <tr>
                <td>住所（番地）</td>
                <td>
                    <?php echo $_POST['address_2']; ?>
                </td>
            </tr>
            
            <tr>
                <td>アカウント権限</td>
                <td>
                    <?php 
                    $a=$_POST['authority'];
                      if($a==0){
                          echo "一般";
                      }elseif($a==1){
                           echo "管理者";
                       }    
                    ?>
                           
                </td>
            </tr>
        </table>
        
        <div class="button">
        <form class="button1" action="update_comfirm.php">
            <button type="button" onclick=history.back()>前に戻る</button>
            
        </form>
        
        <form class="button1" action="update_complete.php" method="post">
            <input type="submit" class="button2" value="登録する">
            <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">    
            <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
            <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
            <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
            <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
            <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
            <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
            <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
            <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
            <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
        </form>
        </div>
        
    </main>
    <footer>Copyright D.I.works| D.I.blog is the one which provides A to Z about programming</footer>
    </div>
</body>
</html>