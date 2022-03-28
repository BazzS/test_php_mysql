<?php
    $connect = mysqli_connect("localhost", "root", "Atlon111","scandiweb");
    if ($connect == true){
        print("С базой соединились_del");
    }

    $DVD_BD = isset($_POST['DVD']) ? $_POST['DVD'] : null;
    $Book_BD = isset($_POST['Book']) ? $_POST['Book'] : null;
    $Furniture_BD = isset($_POST['Furniture']) ? $_POST['Furniture'] : null;



    if ($DVD_BD <> null) {
        foreach ($DVD_BD as $value) {
            $query = "DELETE FROM DVD WHERE ID_DVD = $value";
            mysqli_query($connect,$query);
        }
    }
    if ($Book_BD <> null) {
        foreach ($Book_BD as $value) {
            $query = "DELETE FROM Book WHERE ID_Book = $value";
            mysqli_query($connect,$query);
        }
    }
    if ($Furniture_BD <> null) {
        foreach ($Furniture_BD as $value) {
            $query = "DELETE FROM Furniture WHERE ID_Furniture = $value";
            mysqli_query($connect,$query);
        }
    }

    header('location:index.php?=home');
?>
