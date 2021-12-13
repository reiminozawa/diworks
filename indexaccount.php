<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <title>アカウント登録画面</title>
    <link rel="stylesheet" type="text/css" href="styleaccount.css">
</head>
    
  
<body>

     <h2>アカウント登録</h2> 
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
        <h3>アカウント登録画面</h3>
        <form method="post" action="account_confirm.php">
        <table border="0">
        <tr>
            <td>名前（姓）</td>
            <td>
            <input type="text" class="text" size="35" maxlength="10" name="family_name" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" required placeholder="例）山田">
                
            </td>
         </tr>
        
     <tr>
          <td>名前（名）</td>
            <td>
            <input type="text" class="text" size="35" maxlength="10" name="last_name" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" required placeholder="例）太郎"> 
            </td>
        </tr>
        
        <tr>
            <td>カナ（姓）</td>
            <td>
                <input type="text" class="text" size="35" maxlength="10" name="family_name_kana" pattern="[\u30A1-\u30F6]*" required placeholder="例）ヤマダ">
            </td>
        </tr>
        
        <tr>
            <td>カナ（名）</td>
            <td>
            <input type="text" class="text" size="35" maxlength="10" name="last_name_kana" pattern="[\u30A1-\u30F6]*" required placeholder="例）タロウ">
             </td>
        </tr>
        
        <tr>
            <td>メールアドレス</td>
            <td>
            <input type="email" class="text" size="35" style="ime-mode:disabled;" maxlength="100" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required placeholder="例）example@example.co.jp">
            </td>
        </tr>
        
         <tr>
             <td>パスワード</td>
             <td>
             <input type="password" class="text" size="35" style="ime-mode:disabled;" maxlength="10" name="password" pattern="^[0-9A-Za-z]{6,10}$" required placeholder="６〜１０文字の半角英数字のみ">
                
             </td>
        </tr>
        
        <tr>
            <td>性別</td>
            <td>
            <input type="radio" name="gender"  value="0" checked="checked">男 
            <input type="radio" name="gender"  value="1">女
            </td>
        </tr> 
        
        <tr>
            <td>郵便番号</td>
            <td>
            <input type="text" class="text" size="15" style="ime-mode:disabled;" maxlength="7" name="postal_code" oninput="value=value.replace(/[^0-9]+/i,'');" required placeholder="例）1234567">
            </td>
        </tr>
        
        <tr>
            <td>住所（都道府県）</td>
        <td>
        <select name="prefecture" class="prefecture" required>
            <?php
             $kenmei=array('','北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','大分県','宮崎県','鹿児島県','沖縄県');
            
            foreach($kenmei as $kenmei){
                print('<option value="'.$kenmei.'">'.$kenmei.'</option>');
            }
            ?>
        </select>
            </td>
        </tr>   
        
        <tr>
            <td>住所（市区町村）</td>
            <td>
            <input type="text" class="text" size="35" maxlength="10" name="address_1" pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*" required placeholder="例）◯◯市◯◯町">
            </td>
        </tr>
        
        <tr>
            <td>住所（番地）</td>
            <td>
            <input type="text" class="text" size="35" maxlength="100" name="address_2" pattern="[-\u4E00-\u9FFF\u3040-\u309Fー\uFF66-\uFF9F\u30A1-\u30F60-9０-９_\s]*" required placeholder="例）1-2-3">
            </td>
        </tr>
        
        <tr>
        <td>アカウント権限</td>
        <td>
        <select name="authority" class="authority" required>
            <option value="0">一般</option>
            <option value="1">管理者</option>
        </select>
        </td>
        </tr>
            </table>
        
        <div>
            <input type="submit" class="submit" value="確認する">
        </div>

    </form>
    
                
    </main>
    
    <footer>Copyright D.I.works| D.I.blog is the one which provides A to Z about programming</footer>
    </div>
</body>   
</html>