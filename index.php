<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">

        <div class="mb-3">
                <label >Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" 
                name="name" autocomplete="off" >
            </div>

            <div class="mb-3">
                <label >Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" 
                name="email" autocomplete="off">
            </div>

            <div class="mb-3">
                <label >Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" 
                name="mobile" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" 
                name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>