<?php
    include 'db.php';
    $connect = mysqli_connect("localhost", "root", "Atlon111","scandiweb");
    if ($connect == true){
        print("С базой соединились");
    }
    $SKU_BD = $_POST['sku'];
    $Name_BD = $_POST['name'];
    $Price_BD = $_POST['price'];
    $Size_BD = isset($_POST['size']);
    $Weight_BD = isset($_POST['weight']);
    $Height_BD = isset($_POST['height']);
    $Width_BD = isset($_POST['width']);
    $Length_BD = isset($_POST['length']);
    // $Select_BD = isset($_POST['productType']) ? $_POST['productType'] : null;
    if (isset($_POST['name'])){
        $name = $_POST['name'];
    }
    echo " $name";

    if ($Size_BD){
            $Size_BD = $_POST['size'];
            $query = "INSERT INTO DVD(SKU, Name, Price, Size) VALUES('$SKU_BD', '$Name_BD', $Price_BD, $Size_BD)";
            $final = mysqli_query($connect, $query);
            echo " Считано";
            if ($final == false){
                echo " Запись не залетела";
            }
        }
    elseif ($Weight_BD) {
            $Weight_BD = $_POST['weight'];
            $query = "INSERT INTO Book(SKU, Name, Price, Weight) VALUES('$SKU_BD', '$Name_BD', $Price_BD, $Weight_BD)";
            $final = mysqli_query($connect, $query);
            echo " Считано1";
            if ($final == false){
                echo " Запись не залетела1";
            }
        }
    elseif ($Height_BD && $Width_BD && $Length_BD) {
            $Height_BD = $_POST['height'];
            $Width_BD = $_POST['width'];
            $Length_BD = $_POST['length'];
            $query = "INSERT INTO Furniture(SKU, Name, Price, Height, Width, Length) VALUES('$SKU_BD', '$Name_BD', $Price_BD, $Height_BD, $Width_BD, $Length_BD)";
            $final = mysqli_query($connect, $query);
            echo " Считано2";
            if ($final == false){
                echo " Запись не залетела2";
            }
        }

        header('location:index.php?=home');
?>
