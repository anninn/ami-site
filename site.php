<?php
if( !empty($_POST['btn_submit']) ){
  var_dump($_POST);
}



?>

<!DOCTYPE html>
<html lang ="ja">
<meta charset ="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css">
<head>
  <title>つまらない掲示板</title>
</head> 
<!--本文-->
<body>
<section>
  <h1>つまらない掲示板<h1>
  <h2>投稿 </h2>
  <form actoin ="" method= "post">
   <div class="name"><span class="label">名前:</span>
    <input type="text" name= "name" value= ""><br>
   </div>
   <div class="message"><span class="label"> message:</span>
    <input type="text" name= "text" value=""><br>
    </div>
    <button type="submit">SeNd</button>
  </form>
</section>
<secton class="allchat">
  <h2>投稿一覧</h2>
  <p>まだ投稿はありません</p>
</section>
</body>


</html>