
<div >
    <button type="button" class="close" ><a class="text-decoration-none" href="view_class.php">&times;</a></button>
</div>
<div class="text-center">
    <h5>Classes of Course:</h5>
    <hr>
</div>
<div class="container mt-3">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Trainer</th>
            <th>Course</th>
            <th>Modify</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($arrClass as $class){
            ?>
            <tr>
                <?php
                echo "<td>$class->name</td>";
                echo "<td>$class->trainer</td>";
                echo "<td>$class->course</td>";
                echo "<td>
                        <a class='badge badge-warning' href='?enclassid=".$class->id."&course=".$class->course."&name=".$class->name."'>Enroll me</a>
                     </td>";
                ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>