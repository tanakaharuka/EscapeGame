<?php
    if(isset($_GET["btn"])){
        $greenlamp = $_GET["green"];
        $redlamp = $_GET["red"];
        $bluelamp = $_GET["blue"];
        //ボタンによるライトの変更
        switch($_GET["btn"]){
            case "1":
                $greenlamp = !$greenlamp;
                $bluelamp = !$bluelamp;
                break;
            case "2":
                $redlamp = !$redlamp;
                $bluelamp = !$bluelamp;
                break;
            case "3":
                $greenlamp = !$greenlamp;
                $redlamp = !$redlamp;
                break;
        }
    }else{ //値がないとき（初期設定用）
        $greenlamp = $bluelamp = FALSE;
        $redlamp = TRUE;
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>脱出ゲーム｜白い部屋</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="head">
        <h1>脱出ゲーム</h1>
        <button id="pose">ポーズ</button>
    </div>
    <hr>
    <div>
        <h3>ポーズメニュー</h3>
        <button type="submit" formaction="top.html">ホーム</button>
        <button type="button">戻る</button>
    </div>
    <hr>
    <div>
        <!--画像表示-->
        <?php
            if($redlamp && $greenlamp && $bluelamp){
                $img = "img/white_t.jpg";
            }else if($redlamp){
                if($greenlamp) $img = "img/yellow_t.jpg";
                else if($bluelamp) $img = "img/magenta_t.jpg";
                else $img = "img/redlight_tst.jpg";
            }else if($greenlamp){
                if($bluelamp) $img = "img/cyan_t.jpg";
                else $img = "img/greenlight_tst.jpg";
            }else if($bluelamp){
                $img = "img/bluelight_t.jpg";
            }else {
                $img = "img/black_t.jpg";
            }
            echo " <img src=\"" .$img. "\"alt=\"\"> ";
        ?>
        <p>緑：<?php echo $greenlamp ?></p>
        <p>赤：<?php echo $redlamp ?></p>
        <p>青：<?php echo $bluelamp ?></p>
    </div>
    <div class="buttons">
        <form method="get" action="light.php">
            <button type="submit" value="1" name="btn">1</button>
            <button type="submit" value="2" name="btn">2</button>
            <button type="submit" value="3" name="btn">3</button>
            <input type="hidden" value="<?php echo $greenlamp ?>" name="green">
            <input type="hidden" value="<?php echo $redlamp ?>" name="red">
            <input type="hidden" value="<?php echo $bluelamp ?>" name="blue">
        </form>
    </div>
    <div>
        <!--アイテム欄-->
        <table border="1">
            <tr><td>花</td><td>鍵</td></tr>
        </table>
    </div>
    <hr>
    <div>
        <textarea rows="3" cols="30" disabled></textarea>
        <form method="post">
            <button type="submit" class="whitebtn" formaction="WhiteRoom.html">戻る</button>
        </form>
    </div>
</body>
</html>