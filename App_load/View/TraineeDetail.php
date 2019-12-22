

<div class="container-fluid pt-5">
    <div class="container card">
        <div class="row">
            <!--TODO:Decoration -->
            <div class="col-sm-6 ">
                <img class="card-img-top" src="./Source/work7.jpg" alt="Photo">
            </div>

            <!--TODO:Form -->
            <div class="col-sm-6 bg-success">
                <div class="container">
                    <div class="text-center">
                        <div class="card-body">
                            <h4 class="card-title">Name: <?php echo $data->name?></h4>
                            <p>Date of Birth: <?php echo $data->date?></p>
                            <p>Address: <?php echo $data->address?></p>
                            <p>Description: <?php echo $data->descript?></p>
                            <p>Lang: <?php echo $data->lang?></p>
                            <p>Toeic: <?php echo $data->toeic?></p>
                            <p>UserName: <?php echo $data->user?></p>
                            <p>PassWord: <?php echo $data->pass?></p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>