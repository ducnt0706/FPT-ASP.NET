<div class="container pt-3">
    <div>
        <?php
            if($msg!=null){
                echo "<div class=\"bg-info\">
                            <strong>$msg</strong>
                       </div>";
            }
        ?>
        <form action="add_trainee.php" method="post">
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
            <button type="submit" class="btn btn-warning" >Register</button>
        </form>
    </div>
</div>
