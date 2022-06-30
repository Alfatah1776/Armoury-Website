<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Add New Vehicle</h2>
        <form action="addVehicle.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Vehicle Name : </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Vehicle Origin : </td>
                    <td><input type="text" name="origin"></td>
                </tr>
                <tr>
                    <td>Vehicle Category : </td>
                    <td>
                        <select name="category">
                            <option value="Armoured">Armoured</option>
                            <option value="Support">Support</option>
                            <option value="Airborne">Airborne</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Vehicle Cost : </td>
                    <td><input type="text" name="cost"></td>
                </tr>
                <tr>
                    <td>Vehicle Description : </td>
                    <td><input type="text" name="description"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="save">
                        <input type="reset" name="reset">
                    </td>       
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

include ('CRUD.php');
if(isset($_POST['save']))
{
    $vehicleName = $_POST['name'];
    $vehicleOrigin = $_POST['origin'];
    $vehicleCategory = $_POST['category'];
    $vehicleCost = $_POST['cost'];
    $vehicleDescription = $_POST['description'];

    $saveCRUD = new CRUD();
    $newList = $saveCRUD->create_data($vehicleName, $vehicleOrigin, $vehicleCategory, $vehicleCost, $vehicleDescription);
    if($newList == "Success")
    {
        header('Location: index.php');
    }
}
?>