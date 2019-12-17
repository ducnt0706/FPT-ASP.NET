<!DOCTYPE html>
<html>
<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="../Source/traineeAdd.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container pt-3">
            <div>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="Name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="date" name="DateOfBirth" placeholder="DateOfBirth">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <textarea name="Description" placeholder="Description about trainee: Experience detail"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Lang" placeholder="Lang">
                    </div>
                    <div class="form-group">
                        <input type="number" name="Toeic" placeholder="Toeic">
                    </div>
                    <div class="form-group">
                        <input type="text" name="UserName" placeholder="User Name" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="Pass" placeholder="Pass Word" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Register</button>
                </form>
            </div>
        </div>
</body>
</html>
