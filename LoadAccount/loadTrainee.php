<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <style>
    *{
        font-family: 'Raleway', sans-serif;
    }
    </style>
    
</head>
<body>
<!--justify-content-center-->
<?php
require_once '../Functions/conDb.php';
?>
<div class="container mt-3">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Nguyen Quang Hai</td>
                <td>05/09/1997</td>
                <td>Ha Noi</td>
            </tr>
            <?php
                $data=$conn->query("SELECT * FROM trainee");
                foreach ($data as $row){
                    $id=$row['Id'];
                    $name=$row['Name'];
                    $age=$row['DateOfBirth'];
                    $address=$row['Address'];
                    ?>
                        <tr>
                            <?php
                                echo "<td>$id</td>";
                                echo "<td>$name</td>";
                                echo "<td>$age</td>";
                                echo "<td>$address</td>";
                            ?>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>