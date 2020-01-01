<br>
<br>
<div class="text-center">
    <h4>Update trainer</h4>
</div>
<div class="container mt-3">
    <div class="text-center">
        <form action="manage_trainer.php" method="post" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <div class="form-group">
                <input type="text" name="idTrainerU" value="<?php echo $uid ?>" readonly>
            </div>
            <div class="form-group">
                <input type="text" name="Name"  placeholder="Name" required value="<?php echo $trainer->name ?>">
            </div>
            <div class="form-group">
                <input type="text" name="UserName" placeholder="User Name" required value="<?php echo $trainer->user?>">
            </div>
            <div class="form-group">
                <input type="text" name="Pass" placeholder="Pass Word" required value="<?php echo $trainer->pass?>">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
</div>