<!-- <?php
session_start();
include("include/dbconnect.php");
$username = $_SESSION['username'];

if (isset($_POST['ntn'])) {

   /*  if (isset($_POST['btn'])) { */
        extract($_POST);
        $selected_rows=$_POST['selected_row'];

        $hotelnames = $_POST['hotelname'];
        $foodnames = $_POST['foodname'];
        $qtys = $_POST['qty'];
        $prices = $_POST['price'];
        $mobile = '1111111111';
        $station = $_POST['station'];


        $count = count($selected_rows);

        for ($i = 0; $i < $count; $i++) {
            $selected_row = mysqli_real_escape_string($connect, $selected_row[$i]);
            /* $foodname = mysqli_real_escape_string($connect, $foodnames[$i]);
            $qty = mysqli_real_escape_string($connect, $qtys[$i]);
            $price = mysqli_real_escape_string($connect, $prices[$i]);
            $total = mysqli_real_escape_string($connect, $qty * $price);
 *//* 
            $insertQuery = "INSERT INTO your_booking_table (hotelname, station, mobile, customer, foodname, quantity, price) VALUES ('$hotelname', '$station', '$mobile', '$username', '$foodname', '$qty', '$total')";
            $result = mysqli_query($connect, $insertQuery);

            if (!$result) {
                echo "Error in booking: " . mysqli_error($connect);
                break;
            } */
            $q222 = mysqli_query($connect, "SELECT * FROM tbl_hotelfood WHERE id='$selected_row'");
            while($r111 = mysqli_fetch_array($q222)){

            
            $food = $r111['fname'];
            echo "$food";
            }
        }

        echo "Booking successful!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="station">
        <input type="submit" name="btn" value="submit">
    </form>
</body>
</html>
 -->
 <?php
session_start();
include("include/dbconnect.php");
$username = $_SESSION['username'];
$rdate = date("d-m-Y");

if (isset($_POST['ntn'])) {
    extract($_POST);

    $selected_rows = isset($_POST['selected_rows']) ? $_POST['selected_rows'] : array();
    $qtys = $_POST['qty'];
    $prices = $_POST['price'];
    $station = $_POST['station'];
    $tno = $_POST['tno'];
    $comp = $_POST['comp'];
    $seatno = $_POST['seatno'];


    foreach ($selected_rows as $key => $selected_row) {
        $qty = $qtys[$key];

        $q222 = mysqli_query($connect, "SELECT * FROM tbl_hotelfood WHERE id='$selected_row'");
        
        while ($r111 = mysqli_fetch_array($q222)) {
            $food = $r111['fname'];
            $price = $r111['price'];
            $hotelname = $r111['hotelname'];
            $total = $qty * $price;
            $mq=mysqli_query($connect,"select max(id) from tbl_food_booking");
            $mr=mysqli_fetch_array($mq);
            $bid=$mr['max(id)']+1;

            if ($total > 0) {
                $insertQuery = "INSERT INTO tbl_food_booking (id, customer, hotelname, fname, qty, price, status, rdate, tno, station, comp, seatno) VALUES ('$bid', '$username', '$hotelname', '$food', '$qty', '$total', '0', '$rdate', '$tno', '$station', '$comp', '$seatno')";
                $result = mysqli_query($connect, $insertQuery);

                if (!$result) {
                    echo "Error in booking: " . mysqli_error($connect);
                    break;
                }
            } else {
                ?>
                <script>
                    alert("Booking Successfull");
                    window.location.href="user.php";
                </script>
                <?php
            }

            
        }
    }
    ?>
    <script>
                    alert("Booking Successfull");
                    window.location.href="user.php";
                </script>
<?php
}
?>



