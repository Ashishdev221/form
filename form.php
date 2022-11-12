<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="send.php" method="post" class="row gy-2 gx-3 align-items-center">
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInput">Name</label>
                <input name="name" type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Email</label>
                <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input name="email" type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
                </div>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInput">Gender</label>
                <input name="gender" type="text" class="form-control" id="autoSizingInput" placeholder="gender">
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInput">Date</label>
                <input disabled="true" type="text" class="form-control" id="autoSizingInput" placeholder="<?php date_default_timezone_set("Asia/Calcutta"); $t=time();echo(date("Y-m-d h:i:s",$t));?>">
            </div>
            
            
            <div class="col-auto">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>