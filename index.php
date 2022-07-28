<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>掲示板演習_魯　睿（ロ　エイ）</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <?php
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "");
            $stmt = $pdo->query("select * from 4each_keijiban");
            /* 
                while ($row = $stmt->fetch()){
                echo $row["handlename"];
                echo $row["title"];
                echo $row["comments"];
            } */
            
        ?>
        <header>
            <!-- logo挿入　-->
            <div class="logo">
                <img src="images/logo.jpg">
            </div>
            <nav>
                <!-- nav -->
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </nav>
        </header>
        
        <main>
            
            
            <section>
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <!--  入力フォーム　-->
                   
                    <form method="post" action="insert.php">
                        <h2 class="input-form">入力フォーム</h2>
                        <div class="handlename">
                            ハンドルネーム<br>
                            <input type="text" size="50" name="handlename">
                        </div>
                        <div class="comment-title">
                            タイトル<br>
                            <input type="text" size="50" name="title">
                        </div>
                        <div class="comments">
                            コメント</br>
                            <textarea cols="100" rows="20" name="comments"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="submit" value="送信する">
                        </div>
                    </form>
                   
                    
                    <!-- コメント1 -->
                    <?php
                        while($row = $stmt->fetch()){
                            echo "<div class='kiji'>";
                            echo "<h3>".$row['title']."</h3>";
                            echo "<div class='contents'>";
                            echo $row['comments'];
                            echo "<div class='handlename'>posted    by ".$row['handlename']."</div>";
                            echo "</div>";
                            echo "</div>";
                        }

                    ?>
                    
                    
                    
                </div>
                <div class="right">
                    <div class="part1">
                        <h2>人気の記事</h2>
                        <ul>
                            <li>PHPオススメ本</li>
                            <li>PHP　MyAdminの使い方</li>
                            <li>いま人気のエディタTop5</li>
                            <li>HTMLの基礎</li>
                        </ul>
                    </div>
                    <div class="part2">
                        <h2>オススメリンク</h2>
                        <ul>
                            <li>インターノウス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>
                            <li>Bracketsのダウンロード</li>
                        </ul>
                    </div>
                    <div class="part3">
                        <h2>カテゴリ</h2>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <p>
                copyright interrous | 4each blog is the one which provides A to Z about programming.
            </p>
        </footer>
        
   
        
    </body>
</html>