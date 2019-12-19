<div class="container-fluid pt-5">
    <div class="container myclass">
        <div class="row">
            <div class="col-sm-6 ">
                <img class="card-img-top" src="./Source/work7.jpg" alt="Photo">
            </div>
            <div class="col-sm-6 bg-success">
                <div class="container">
                    <div class="text-center mt-5">
                        <h3>Adding new Class</h3>
                    </div>
                    <div class="text-center">
                        <form action="" method="post">

                            <div class="form-group">
                                <input type="text" value="<?php echo $namecat?>" readonly>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="IdCategory" value="<?php echo $idcat?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="aNameCourse" placeholder="Name of Course" required>
                            </div>
                            <div class="form-group">
                                <textarea name="Description" placeholder="Description about Course"></textarea>
                            </div>

                            <button type="submit" class="btn btn-warning" >Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
