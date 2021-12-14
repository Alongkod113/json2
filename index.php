<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

</body>
<div class="container">
    <form action="">
        <div class="form-group">
            <label for="frmEmail"> Username </label>
            <input type="email" id="frmEmail" class="form-control" required />
        </div>
        <div class="form-group">
            <label for="frmPassword">Password</label>
            <input type="password" id="frmPassword" class="form-control" required />
        </div>
        <input type="submit" value="Send" class="btn btn-primary" />
    </form>

</div>

$("#Send").click(()=>{
$("#formEmail").show();
$("#formPassword").show();

});


</html>
