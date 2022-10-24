<?php
$keyword = $_GET["keyword"];
$conn = mysqli_connect("localhost", "root", "");
if ($conn) {
mysqli_select_db($conn,"blueshop");
mysqli_query($conn,"SET NAMES utf8");
} else {
echo mysqli_errno($keyword);
}
$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$objQuery = mysqli_query($conn,$sql);
?>
<?php while($row = mysqli_fetch_array($objQuery)){
    echo "ชื่อสมาชิก : " . $row ["name"] . "<br>";   
            echo "ที่อยู่: " . $row ["address"] . "<br>";
            echo "อีเมล์: " . $row ["email"] . " <br>";
            echo "<hr>\n";
     }
?>
