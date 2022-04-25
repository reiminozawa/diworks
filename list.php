<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <title>アカウント登録画面</title>
    <link rel="stylesheet" type="text/css" href="list.css">
</head>
    
  
<body>
  <?php
    
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
    $sql="select * from diworks_account ORDER BY id DESC";
    $stmt=$pdo->query($sql);  
//    $stmt=$pdo->query("select*from diworks_account"); 
//    
//       $sql="select * from 'diworks_account' ORDER BY id DESC";
//                         $res=$pdo->query($sql);
//                    
//                         while($dat=$res->fetch_assoc()){
//                             echo $dat['id'].'';
//                         }
?>
    
  
    

     <h2>アカウント一覧画面</h2> 
 <div class="border">
 <header>   
        <ul class="menu1">
       <li>トップ</li>
       <li>プロフィール</li>
       <li>D.I.Blogについて</li>
       <li>登録フォーム</li>
       <li>問い合わせ</li>
       <li>その他</li>
       <li>アカウント登録</li>
   </ul> 
    </header>
  
     
     <main>
        <h3>アカウント一覧画面</h3>
        <table border="1" cellspacing="0" cellpadding="0" width="90%" style="font-size:10px;">
            <div class="font">
            <tr>
                <td>ID</td>
                <td>名前（姓）</td>
                <td>名前（名）</td>
                <td>カナ（姓）</td>
                <td>カナ（名）</td>
                <td>メールアドレス</td>
                <td>性別</td>
                <td>アカウント権限</td>
                <td>削除フラグ</td>
                <td>登録日時</td>
                <td>更新日時</td>
                <td colspan="2">操作</td>
        
            
            </tr>
   

           <?php 
                while($row=$stmt->fetch()){
            ?>
            
          
            <tr>
                
                <td><?php
                    echo $row['id'];
                ?>
                    </td>
                
                <td><?php
                    echo $row['family_name'];
                    ?></td>
                
                <td><?php
                    echo $row['last_name'];
                    ?></td>
                
                <td><?php
                    echo $row['family_name_kana'];
                    ?></td>
                
                <td><?php
                    echo $row['last_name_kana'];
                    ?></td>
                
                <td><?php
                    echo $row['mail'];
                    ?></td>
                
                <td><?php
                    $c=$row['gender'];
                      if($c==0){
                          echo "男";
                      }
                    else{
                        echo "女";
                      }
                    ?>  </td>
                
                <td><?php
                    $b=$row['authority'];
                      if($b==0){
                          echo "一般";
                      }
                    else{
                        echo "管理者";
                      }
                    ?> </td>
                
                <td>
                    <?php
                    $a=$row['delete_flag'];
                      if($a==0){
                          echo "有効";
                      }
                    else{
                        echo "無効";
                      }
                    ?>      
                    </td>
                
                <td><?php
                    echo $row['registered_time'];
                    ?></td>
                
                <td><?php
                    echo $row['update_time'];
                    ?></td>
               
               
                <form method="post" action="update.php">
                
                <td>
                    <input type="submit" class="submit" value="更新"  style="width:100%; font-size:10px;">
            <input type="hidden" value="<?=$row['id'] ?>" name="id">
            <input type="hidden" value="<?=$row['family_name']?>" name="family_name">    
            <input type="hidden" value="<?=$row['last_name']?>" name="last_name">
            <input type="hidden" value="<?=$row['family_name_kana']?>" name="family_name_kana">
            <input type="hidden" value="<?=$row['last_name_kana'] ?>" name="last_name_kana">
            <input type="hidden" value="<?=$row['mail']?>" name="mail">
            <input type="hidden" value="<?=$row['password'] ?>" name="password">
            <input type="hidden" value="<?=$row['gender'] ?>" name="gender">
            <input type="hidden" value="<?=$row['postal_code'] ?>" name="postal_code">
            <input type="hidden" value="<?=$row['prefecture'] ?>" name="prefecture">
            <input type="hidden" value="<?=$row['address_1']?>" name="address_1">
            <input type="hidden" value="<?=$row['address_2'] ?>" name="address_2">
            <input type="hidden" value="<?=$row['authority'] ?>" name="authority">
                </td>
                </form>
                
                
                <form method="post" action="delete.php">
                <td>
        <input type="submit" class="submit" value="削除"  style="width:100%; font-size:10px;">
            <input type="hidden" value="<?=$row['id'] ?>" name="id">
            <input type="hidden" value="<?=$row['family_name'] ?>" name="family_name">    
            <input type="hidden" value="<?=$row['last_name']?>" name="last_name">
            <input type="hidden" value="<?=$row['family_name_kana']?>" name="family_name_kana">
            <input type="hidden" value="<?=$row['last_name_kana'] ?>" name="last_name_kana">
            <input type="hidden" value="<?=$row['mail']?>" name="mail"> 
            <input type="hidden" value="<?=$row['password'] ?>" name="password">
            <input type="hidden" value="<?=$row['gender'] ?>" name="gender">
            <input type="hidden" value="<?=$row['postal_code'] ?>" name="postal_code">
            <input type="hidden" value="<?=$row['prefecture'] ?>" name="prefecture">
            <input type="hidden" value="<?=$row['address_1']?>" name="address_1">
            <input type="hidden" value="<?=$row['address_2'] ?>" name="address_2">
            <input type="hidden" value="<?=$row['authority'] ?>" name="authority">
                </td>
                    </form>

                
                </tr>   
            </div>
           <?php }
            
        ?>
        
            
         </table>
         
          </main>
    
    <footer>Copyright D.I.works| D.I.blog is the one which provides A to Z about programming</footer>
    </div>
</body>   
</html>
         
    