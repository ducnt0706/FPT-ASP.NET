

<div class="container-fluid pt-5">
    <div class="container myclass">
        <div class="row">
            <!--TODO:Form -->
            <div class="col-sm-6 bg-success">
                <div class="container">
                    <div class="text-center">
                        <h4>Adding new Trainee</h4>
                    </div>
                    <div class="text-center">
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
            </div>
            <!--TODO:Decoration -->
            <div class="col-sm-6 ">
                <img class="card-img-top" src="./Source/work7.jpg" alt="Photo">
            </div>
        </div>
    </div>
</div>
