<?php
// 24時間単位の現在時
date_default_timezone_set('Asia/Tokyo');
$hour = date('G');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<?php
date_default_timezone_set('Asia/Tokyo');
if (6 <= $hour && $hour <= 17) { ?>
<body class="day">
<h1 class="day">昼と夜でページの見た目が変わります。</h1>
<?php } else { ?>
<body class="night">
<h1 class="night">昼と夜でページの見た目が変わります。</h1>
<?php } ?>

</body>
</html>
