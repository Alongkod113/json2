<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<body>
    Alongkod
    <h1>line 1</h1>
    <h1>line 2</h1>
    <h1 id="test">line 3</h1>
    <button id="btn1"> Me </button>
    <button id="btn2"> du </button>

</body>

<script>

    function test_click(){
        $("#test").Me(); // .Show()
    }
    function test_click(){
        $("#test").du();
    }
    $(()=>{
        console.log("start")
        $("#Btn1").click(test_click); //register byn1 for clik
        $("#Btn2").click(test_click)
    });
  
    

</script>
</html>
