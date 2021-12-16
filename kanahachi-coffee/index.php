<?php
session_start();
$mode = "input";
if (isset($_POST["back"]) && $_POST["back"]) {
    // 何もしない 
} else if (isset($_POST["confirm"]) && $_POST["confirm"]) {
    $mode = "confirm";
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['title'] = $_POST['title'];
    $_SESSION['content'] = $_POST['content'];
} else if (isset($_POST["send"]) && $_POST["send"]) {
    $mode = "send";
} else {
    $_SESSION = array();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/index.css">
    <link rel="stylesheet" href="stylesheets/menu.css">
    <link rel="stylesheet" href="stylesheets/class.css">
    <link rel="stylesheet" href="stlyesheets/access.css">
    <link rel="stylesheet" href="stylesheets/gallery.css">
    <link rel="stylesheet" href="stylesheets/contact.css">
    <link rel="stylesheet" href="../kanahachi-coffee/stylesheets/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/script.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <div id="title">Kanahachi Coffee</div>
        </header>
        <div id="navi">
            <ul>
                <li><a href="#home" class="current">HOME</a></li>
                <li><a href="#menu"> メニュー</a></li>
                <li><a href="#class">講座案内</a></li>
                <li><a href="#access">アクセス</a></li>
                <li><a href="#gallery">ギャラリー</a></li>
                <li><a href="#contact" style="color: white;text-decoration:none;">お問い合わせ</a></li>
            </ul>
        </div>
        <!--navi-->
        <div id="main_visual">
            <img class="header-img" src="images/header.jpg" alt="">
        </div>
        <div id="contents">
            <!-- トップページ-->
            <div id="home">
                <section class="main">
                    <h2>Kanahachi Coffeeのこだわり</h2>
                    <h3>自家焙煎コーヒー</h3>
                    <img src="images/selfmade-coffee.jpg" alt="" class="pic2">
                    <p>KANAHACHIでは厳選した生豆を自家焙煎してお出しします。自家焙煎することで新鮮なコーヒー豆の味を楽しむことができます。</p>
                    <h3>コーヒー教室</h3>
                    <img src="images/coffee-school.jpg" alt="" class="pic2">
                    <p>コーヒー初心者の方からベテランまで、一緒にコーヒーの世界を楽しく学べる教室です。自宅で美味しいコーヒーを入れるためのノウハウを身につけることが出来ます。</p>
                </section>
                <section class="info">
                    <h2>営業時間</h2>
                    <dl>
                        <dt> OPEN CLOSE</dt>
                        <dd>11:00～14:00</dd>
                        <dt>LUNCH TIME</dt>
                        <dd>9:30～21:00</dd>
                    </dl>
                </section>
                <section class="info">
                    <h2>お知らせ</h2>
                    <dl>
                        <dt>2019 03/21 </dt>
                        <dd><a href="#">コーヒー講座案内を更新しました</a></dd>
                        <dt>2019 02/11</dt>
                        <dd><a href="#">ギャラリーに写真を追加しました</a></dd>
                        <dt>2019 01/21</dt>
                        <dd><a href="#">コーヒー講座案内を更新しました</a></dd>
                    </dl>
                </section>
            </div>
            <!-- メニューページ -->
            <div id="menu">
                <div class="container">
                    <div class="row">
                        <div class="col"><img src="" alt=""></div>
                        <div class="col"><img src="" alt=""></div>
                        <div class="col"><img src="" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
            <!-- 教室案内ページ -->
            <div id="class"></div>
            <!-- アクセスページ -->
            <div id="access">
                <h2>Kanahati Coffeeへのアクセス</h2>
                <h3>住所・電話番号</h3>
                <p>〒310-230 神奈川県横浜市金沢区町1-2</p>
                <p>☎ 045-5269-5266</p>
                <h3>地図</h3>
                <p>京浜急行「金沢八景駅」下車 徒歩8分</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.0149936046696!2d139.61913339793682!3d35.33044915940758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184159bc213341%3A0x8532173c0511ba72!2z44CSMjM2LTAwMjcg56We5aWI5bed55yM5qiq5rWc5biC6YeR5rKi5Yy654Cs5oi477yT4oiS77yU77yVIOWFq-aZr-ODoeODh-OCo-OCq-ODq-ODk-ODqw!5e0!3m2!1sja!2sjp!4v1639654789446!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>


            <!-- ギャラリーページ -->
            <div id="gallery"></div>


            <!-- 問い合わせページ -->
            <div id="contact">
                <h3>お問い合わせ</h3>
                <?php
                if ($mode == 'input') { ?>
                    
                    <form action="./index.php" method="post">
                        <p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
                        <label for="name">名前<span class="span">（必須）</span></label><br>
                        <input type="text" id="name" name="name" value="<?php if (isset($_POST['back'])) {
                                                                            echo $_SESSION['name'];
                                                                        } ?>"><br>
                        <label for="email">メールアドレス<span class="span">（必須）</span></label><br>
                        <input type="text" id="email" name="email" value="<?php if (isset($_POST['back'])) {
                                                                                echo $_SESSION['email'];
                                                                            } ?>"><br>
                        <label for="title">件名<span class="span">（必須）</span></label><br>
                        <input type="text" id="title" name="title" value="<?php if (isset($_POST['back'])) {
                                                                                echo $_SESSION['title'];
                                                                            } ?>"><br>
                        <label for="content">お問い合わせ内容<span class="span">（必須）</span></label><br>
                        <textarea name="content" id="" cols="30" rows="10" width="30"><?php if (isset($_POST['back'])) {
                                                                                            echo $_SESSION["content"];
                                                                                        } ?></textarea><br>
                        <input type="submit" name="confirm" value="確認" id="submit"><br>
                    </form>
                <?php } else if ($mode == 'confirm') { ?>
                    <form action="./index.php" method="post">
                        【名前】<br><?php echo nl2br($_SESSION['name']) ?><br>
                        【メールアドレス】<br><?php echo nl2br($_SESSION['email']) ?><br>
                        【件名】<br><?php echo $_SESSION['title'] ?><br>
                        【お問い合わせ内容】<br><?php echo $_SESSION['content'] ?><br>
                        <input type="submit" name="back" value="戻る" id="submit">
                        <input type="submit" name="send" value="送信" id="submit">
                    </form>
                <?php } else { ?>
                    <p>お問い合わせいただきありがとうございます。</p>
                    <p>登録したメールアドレスに確認メールを送信しました。</p>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <!--wrapper-->
    <footer><small>&copy2012 Marine Coffee</small></footer>
</body>

</html>