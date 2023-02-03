<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4eachblogの掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>

<body>

    <?php
    mb_internal_encoding("utf8");
    $pdo= new PDO("mysql:dbname=lesson1;hpst=localhost;","root","root");
    $stmt=$pdo->query("select*from 4each_keijiban");
    ?>

    <div class="logo"><img src="4eachblog_logo.jpg"></div>
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>お問合せ</li>
                <li>その他</li>
            </ul>
        </header>
        <main>

            <div class="left">
                <h1>プログラミングに役立つ書籍</h1>
                
                <form method="post" action="insert.php">

                    <input type="hidden" value="<?php echo $_POST['name'];?>"name="handlename">
                    <input type="hidden" value="<?php echo $_POST['title'];?>"name="title">
                    <input type="hidden" value="<?php echo $_POST['comments'];?>"name="comments">
                    <h2>入力フォーム</h2>

                    <div>
                    <label>ハンドルネーム</label>
                    <?php echo $_POST['handlename'];?>
                    <br>
                    <input type="text" class="text" size="50" name="handlename">    
                    </div>
                    <br>

                    <div>
                    <label>タイトル</label>
                    <?php echo $_POST['title'];?>
                    <br>
                    <input type="text" class="text" size="50" name="title">
                    </div>
                    <br>

                    <div>
                    <label>コメント</label>
                    <?php echo $_POST['comments'];?>
                    <br>
                    <textarea cols="70" rows="7" name="comments"></textarea>
                    </div>
                    <br>

                    <div>
                    <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>

                <?php
                while($row=$stmt->fetch()){
                    echo"<div class='kiji'>";
                    echo"<h3>".$row['title']."</h3>";
                    echo"<div class='contents'>";
                    echo $row['comments'];
                    echo"<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo"</div>";
                    echo"</div>";
                }
                ?>

                <?php
                echo"<div class='kiji'>";
                    echo"<h3>タイトル</h3>";
                    echo"<div class='contents'>";
                        echo"記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
                        記事の中身。記事の中身。記事の中身。記事の中身。<br>
                        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
                        echo"<div class='handlename'>posted by 通りすがり</div>";
                    echo"</div>";

                echo"<div class='kiji'>";
                    echo"<h3>タイトル</h3>";
                    echo"<div class='contents'>";
                        echo"記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
                        記事の中身。記事の中身。記事の中身。記事の中身。<br>
                        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                        記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
                        echo"<div class='handlename'>posted by 通りすがり</div>";
                    echo"</div>";
                    
                ?>
                
            </div>

            <div class="right">
                <h3>人気の記事</h3>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <h3>オススメリンク</h3>   
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <h3>カテゴリ</h3>   
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>

        </main>

        <footer>
           copyright @ internous|4each blog the which provides A to B about programming  
        </footer>
        
</body>

</html>