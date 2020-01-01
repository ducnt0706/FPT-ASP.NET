<div class="container">
    <div class="text-center">
        <div class="card-body">
            <!--TODO:className,Topic, Description, courseName, trainerName-->
            <h4 class="card-title">Name: <?php echo $detail->className.":".$detail->courseName ?></h4>
            <h5>Trainer: <?php echo $detail->trainerName?></h5>
            <h5 class="text-info"><?php echo $detail->topic?></h5>
            <p><?php echo $detail->descript?></p>

        </div>
        <div class="text-center">
            <button class="btn btn-warning"><a class="text-decoration-none" href="view_class.php">Back</a></button>
        </div>
    </div>
</div>