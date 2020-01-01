
<div class="container mt-3">
    <br>
    <div class="text-center">
        <form action="manage_trainee.php" method="post">
            <div class="form-group">
                <input name="tinfo" type="text" placeholder="Searching for trainee..." pattern="[^'\x22]+" title="Invalid input">
                <button type="submit" class="btn btn-warning">Search</button>
            </div>
        </form>
    </div>
    <br>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($arrData as $trainee){
            ?>
            <tr>
                <?php
                echo "<td>$trainee->name</td>";
                echo "<td>$trainee->date</td>";
                echo "<td>$trainee->address</td>";
                echo "<td>
                                        <a class='badge badge-info' href='?vtraineeid=".$trainee->id."'>View</a>
                                        <a class='badge badge-warning' href='?utraineeid=".$trainee->id."'>Update</a>
                                        <a class='badge badge-danger' href='?dtraineetid=".$trainee->id."'>Delete</a>
                                      </td>";
                ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>