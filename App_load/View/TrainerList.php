<div class="container mt-3">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Modify</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($arrData as $trainer){
            ?>
            <tr>
                <?php
                echo "<td>$trainer->name</td>";
                echo "<td>$trainer->user</td>";
                echo "<td>$trainer->pass</td>";
                echo "<td>                        
                            <a class='badge badge-warning' href='?utrainerid=".$trainer->id."'>Update</a>
                            <a class='badge badge-danger' href='?dtrainertid=".$trainer->id."'>Delete</a>
                      </td>";
                ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
