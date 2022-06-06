<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>チャット</title>
    </head>
    <body>
        
        
        
        <h1>チャット</h1>
        
        
        
        
        
        
        <form method="post" action="chat.php">
            名前<input type="text" name="name">
            メッセージ<input type="text" name="message">
            
            <button name="send" type="submit">送信</button>
            
            履歴
        </form>
        
        
        <section>
            <?php $stmt = select(); foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $message) {  // DBからデータ（投稿内容）を取得
               // 投稿内容を表示
               echo $message['time'],": ",$message['name'],":",$message['message'];
               echo n12br("\n");
                }
           
                   // 投稿内容を登録
                   if(isset ($_POST["send"])) {
                       insert();
                       // 投稿した内容を表示
                       $stmt = select_new();
                       foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $message) {
                           echo $message['time'],": ",$message['name'],":",$message['message'];
                           echo n12br("\n");
                       }
                   }
                   
                   // DB接続
                   function connectDB() {
                       $dbh = new PDO('mysql:host=localhost;dbname=chat','root','');
                       return $dbh;
                   }
                   
                   // DBから投稿内容を取得
                   function select() {
                       $dbh = connectDB();
                       $spl = "SELECT * FROM message ORDER BY time desc limit 1";
                       $stmt = $dbh->prepare($spl);
                       $stmt->execute();
                       return $stmt;
                   }
                   
                   // DBから投稿内容を取得（最新の1件）
                   function select_new() {
                       $dbh = connectDB();
                       $spl = "SELECT * FROM message ORDER BY time desc limit 1";
                       $stmt = $dbh->prepare($spl);
                       $stmt->execute();
                       return $stmt;
                   }
                   
                   // DBから投稿内容を登録
                   function insert() {
                       $dbh = connectDB();
                       $spl = "INSERT INTO message (name, message, time) VALUES (:name, :message, now() )";
                       $stmt = $dbh->prepare($spl);
                       $params = array(':name'=>$_POST['name'], ':message'=>$_POST['message']);
                       $stmt->execute($params);
                   }
            ?>
        </section>
    </body>
</html>