<div class="container-fluid pt-5">
    <div class="container myclass">
        <div class="row">
            <!--TODO:Form -->
            <div class="col-sm-6 ">
                <div class="container">
                    <div class="text-center mt-5">
                        <h3>Adding new Class</h3>
                        <?php
                        if($msg!=null){
                            echo "<div class='text-warning'>$msg</div>";
                        }
                        ?>
                    </div>
                    <!--TODO: Id,Name,Topic,Description, IdCourse,IdTrainer-->
                    <div class="text-center">
                        <form action="add_class.php" method="post">

                            <div class="form-group">
                                <input type="text" name="className" placeholder="Name of class"  required pattern="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="Pass" placeholder="Pass for class"  required>
                            </div>

                            <div class="form-group">
                                <textarea name="Topic" placeholder="Topic title..."  required></textarea>
                            </div>

                            <div class="form-group">
                                <textarea name="Description" placeholder="Description for topic..." required></textarea>
                            </div>

                            <!--How to get IdCourse and IdTrainer-->
                            <div class="form-group">
                                <select name="IdCourse">
                                    <?php
                                        foreach ($courseinfo as $row){
                                            $name=$row['Name'];
                                            $id=$row['Id'];
                                            $cat=$row['Category'];
                                            echo "<option value='$id'>$cat : $name</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="IdTrainer">
                                    <?php
                                    foreach ($trainerinfo as $row){
                                        $name=$row['Name'];
                                        $id=$row['Id'];
                                        echo "<option value='$id'>$name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-warning" >Create</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--TODO:Decoration -->
            <div class="col-sm-6 ">
                <img class="card-img-top" src="./Source/bg1.jpg" alt="Photo">
            </div>
        </div>
    </div>
</div>

