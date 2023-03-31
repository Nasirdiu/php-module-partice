<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mx-auto mt-5 bg-warning rounded-5" style="width: 500px;">
        <div class="mx-auto mt-5 text-center ">
            <h1>From</h1>
        </div>
        <div>
            <p>
                <?php if (isset($_REQUEST['name']) && !empty(($_REQUEST['name']))) : ?>
                    Name: <?php echo $_GET['name']; ?>
                <?php endif ?><br>
                <?php if (isset($_REQUEST['password']) && !empty(($_REQUEST['password']))) { ?>
                    Password: <?php echo $_REQUEST['password']; ?>
                <?php } ?>
            </p>
        </div>
        <form class="mt-40" method="GET">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">

            </div>
            <div class="form-group mt-2">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class=" mt-4 text-center mb-5 d-flex justify-content-center ">
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </div>

        </form>
    </div>


    <!-- js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>