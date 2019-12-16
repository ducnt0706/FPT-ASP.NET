<div class="container mt-3">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Nguyen Quang Hai</td>
                <td>05/09/1997</td>
                <td>Ha Noi</td>
            </tr>
            <?php
                foreach ($arrData as $trainee){
                    ?>
                        <tr>
                            <?php
                                echo "<td>$trainee->id</td>";
                                echo "<td>$trainee->name</td>";
                                echo "<td>$trainee->date</td>";
                                echo "<td>$trainee->address</td>";
                            ?>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>