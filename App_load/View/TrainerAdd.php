
<div class="container-fluid pt-5">
    <div class="container myclass">
        <div class="row">
            <!--TODO:Form -->
            <div class="col-sm-6 bg-success">
                <div class="container">
                    <br>
                    <br>
                    <br>
                    <div class="text-center">
                        <h4>Adding new Trainer</h4>
                    </div>
                    <div class="text-center">
                        <?php
                        if($msg!=null){
                            echo "<div class=\"bg-info\">
                            <strong>$msg</strong>
                       </div>";
                        }
                        ?>
                        <!--TODO: Id, Name, UserName, Pass-->
                        <form action="add_trainer.php" method="post">

                            <div class="form-group">
                                <input type="text" name="Name" placeholder="Name of Trainer..." required>
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
                <img class="card-img-top" src="./Source/img.jpg" alt="Photo">
            </div>
        </div>
    </div>
</div>

