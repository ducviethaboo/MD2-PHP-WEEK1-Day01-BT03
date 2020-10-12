<?php include 'DiscountCaculate.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $price = $_REQUEST['price'];
    $discount = $_REQUEST['discount'];
    $calculate = new DiscountCaculate($price, $discount);
    echo "Luong chiet khau la :" . $calculate->getDiscountAmount() . "%" . "Gia sau khi chiet khau la :" . $calculate->getDiscountPrice();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="price" placeholder="Nhap gia san pham">
    <input type="text" name="discount" placeholder="Nhap phan tram chiet khau">
    <input type="submit" value="Tinh">
</form>
</body>
</html>
