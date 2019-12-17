<h4>This is update</h4>
<div class="container pt-3">
    <div>
        <form action="manage_trainee.php" method="post">
            <div class="form-group">
                <input type="hidden" name="idTraineeU" value="<?php echo $uid ?>" readonly>
            </div>
            <div class="form-group">
                <input type="text" name="Name"  placeholder="Name" required value="<?php echo $trainee->name ?>">
            </div>
            <div class="form-group">
                <input type="date" name="DateOfBirth" placeholder="DateOfBirth" value="<?php echo $trainee->date ?>">
            </div>
            <div class="form-group">
                <input type="text" name="Address" placeholder="Address" value="<?php echo $trainee->address ?>">
            </div>
            <div class="form-group">
                <textarea name="Description" placeholder="Description about trainee: Experience detail"><?php echo $trainee->descript ?></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="Lang" placeholder="Lang" value="<?php echo $trainee->lang?>">
            </div>
            <div class="form-group">
                <input type="number" name="Toeic" placeholder="Toeic" value="<?php echo $trainee->toeic?>">
            </div>
            <div class="form-group">
                <input type="text" name="UserName" placeholder="User Name" required value="<?php echo $trainee->user?>">
            </div>
            <div class="form-group">
                <input type="text" name="Pass" placeholder="Pass Word" required value="<?php echo $trainee->pass?>">
            </div>
            <button type="submit" class="btn btn-warning">Register</button>
        </form>
    </div>
</div>