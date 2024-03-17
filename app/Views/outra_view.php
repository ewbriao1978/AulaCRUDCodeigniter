<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Briaosoft world!</title>

</head>
<h1> OUTRA VIEW </h1>

<h2> Dados </h2>

<?php
    foreach ($result as $row){
        echo "id:".$row['id']. "<br>";
        echo "modelo:".$row['modelo']."<br>";
        echo "marca:".$row['marca'];
        
        ?>
        <form action="delete" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <button type="submit" name="submit">Remove via POST</button>
        </form>

        <br>

        <a href="<?php echo "delete/".$row['id']?>">
        Remove via href </a>
        <br>
        
<?php
    }
?>


<p>  Como acessar essa view?   </p>
<a href="http://localhost:8080" > volta </a>
</html>
