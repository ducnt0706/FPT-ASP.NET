<br>
<br>
<?php
    foreach ($arrDetail as $detail){
        ?>
        <div class="card" >
            <img class="card-img-top" src="./Source/class.jpg" alt="Photo">
            <div class="card-img-overlay">
                <h4 class="card-title"><?php echo $detail->className ?></h4>
                <p class="card-text "><?php echo $detail->courseName ?></p>
                <a href='view_detailclass.php?classname=<?php echo $detail->className ?>' class="btn btn-warning">See Profile</a>
            </div>
        </div>
        <?php
    }
?>