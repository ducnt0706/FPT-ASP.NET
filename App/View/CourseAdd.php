<div class="">
    <button type="button" class="close" ><a href="manage_course.php">&times;</a></button>
</div>
<div class="container">
    <div class="text-center">
        <h3>Adding new Course</h3>
    </div>
    <div >
        <form action="manage_course.php" method="post" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

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