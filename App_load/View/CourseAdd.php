<div class="container">
    <div class="text-center">
        <h3>Adding new Course</h3>
    </div>
    <div >
        <form action="manage_course.php" method="post">

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