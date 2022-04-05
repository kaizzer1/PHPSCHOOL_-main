<?php
include 'connect.php';
?>
<table border='1'>
    <a href="reg_city.php"> registrar cidade </a>
    <tr>
        <th>
            Id
        </th>
        <th>
            Cidade
        </th>
    </tr>

<?php
$sq="select * from city";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idCity']?>
        </td>
        <td>
            <?php echo $f['nameCity']?>
        </td>
        <td> 
            <a href="delete_city.php"> remover</a>
        </td>
    </tr>
    <?php
}
?>