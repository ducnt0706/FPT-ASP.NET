<div >
    <button type="button" class="close" ><a class="text-decoration-none" href="view_class.php">&times;</a></button>
</div>
<div class="container">
    <div>
        <br>
        <br>
        <div class="text-center">
            <h4>
                <?php echo "$course : $name"?>
            </h4>
            <br>
            <form action="?func=<?php echo $idclass ?>" method="post">
                <input name="IdTrainee" type="hidden" value=""><!--need session to get id trainee-->
                <input name="IdClass" type="hidden" value="<?php echo $idclass ?>">
                <input name="passwd" type="text" placeholder="Enter Password.." required>
                <br>
                <br>
                <button class="btn btn-warning" type="submit">Enroll me!</button>
            </form>
        </div>
    </div>
</div>

