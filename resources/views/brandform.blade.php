<!doctype html>
<html>
<head>
    <title>Car Brand Game!</title>

    <!-- load bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
        body    { padding-bottom:40px; padding-top:40px; }
    </style>
</head>
<body class="container">

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Car Brand Game</h1>
        </div>

        <!-- FORM STARTS HERE -->
        <form method="POST" input name="feature" id="feature" action="http://localhost/laravel/blog/resources/views/layouts/newwelcome.blade.php">

            <div class="form-group">
                <label for="name">Your gussed car brand:</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Which car brand was selected by the system?" required>
                
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

        </form>

    </div>

</body>
