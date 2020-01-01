
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
                        <a class='badge badge-info' href='?vclassid=".$class->id."'>View</a>
                        <a class='badge badge-danger' href='?dclassid=".$class->id."'>Delete</a>
                     </td>";
                ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<div class="text-center">
    <button class="btn btn-outline-warning"><a class="text-decoration-none" href="add_class.php">Create new class</a></button>
</div>