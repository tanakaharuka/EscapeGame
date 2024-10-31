<?php
    if(isset($_GET["btn"])){
        $greenlamp = $_GET["green"];
        $redlamp = $_GET["red"];
        $bluelamp = $_GET["blue"];
        $btn = $_GET["btn"];
        //ボタンによるライトの変更
        switch($btn){
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
    <title>脱出ゲーム</title>
</head>
<body>
    <div>
        <!--画像表示-->
    </div>
    <div class="buttons">
        <form method="get" action="light.php">
            <button type="submit" name="btn">1</button>
            <button type="submit" name="btn">2</button>
            <button type="submit" name="btn">3</button>
            <input type="hidden" value="<?php echo $greenlamp ?>" name="green">
            <input type="hidden" value="<?php echo $redlamp ?>" name="red">
            <input type="hidden" value="<?php echo $bluelamp ?>" name="blue">
        </form>
    </div>
</body>
</html>