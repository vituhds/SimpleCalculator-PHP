<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>

<?php 
$n1 = 0;
$n2 = 0;
$op = "add";
$resultado = 0;

    if(isset($_GET['go'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $op = $_GET['op'];
        if($op == "add"){
            $resultado = $n1 + $n2;
        }else if($op == "sub"){
            $resultado = $n1 - $n2;
        }else if($op == "div"){
            $resultado = $n1 / $n2;
        }else if($op == "mult"){
            $resultado = $n1 * $n2;
        }
    }
?>
    <h1 style="position:absolute; color:red;top:100px;"><?php if(isset($_GET['go'])){ echo $resultado; }?><h1>
    <h1>Calculator</h1>
    
    

    <div class="center">
    <form>
        
        <p>NUMBER 1:</p>
        <input required="required" type="number" name="n1" placeholder="14">
        <p>NUMBER 2:</p>
        <input required="required" type="number" name="n2" placeholder="5">
    
    <select name="op">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="div">Division</option>
        <option value="mult">Multiplication</option>
    </select>
    <input type="submit" value="Calculate" name="go">
    
    

</form>
    
 </div>

</body>
</html>