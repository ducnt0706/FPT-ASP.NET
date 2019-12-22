<div class="container">
    <div class="text-center">
        <?php
            if($msg=="Resign Success!"){
                echo "<h4>$msg</h4>
                      <button class=\"btn btn-warning\"><a href=\"view_class.php\">Continue</a></button>
                      ";
            }else{
                echo "<h4>$msg</h4>
                      ";
            }
        ?>
    </div>
</div>