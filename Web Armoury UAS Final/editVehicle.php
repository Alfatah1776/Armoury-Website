<?php
include('CRUD.php');
if(isset($_GET['vehicleID']))
{
    $editCRUD = new CRUD();
    $data = $editCRUD->edit_data($_GET['vehicleID']);
    $list = $data->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vehicle</title>
</head>
<body>
    <center>
        <div class="container">
            <h2>Edit Vehicle Data</h2>
            <form action="editVehicle.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Vehicle ID (Readonly) :</td>
                        <td><input type="text" name="vehicleID" readonly value="<?php print $list['vehicle_id']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="vehicleName" value="<?php print $list['vehicle_name']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Origin :</td>
                        <td><input type="text" name="vehicleOrigin" value="<?php print $list['vehicle_origin']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Cost :</td>
                        <td><input type="text" name="vehicleCost" value="<?php print $list['vehicle_cost']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Description :</td>
                        <td><input type="text" name="vehicleDescription" value="<?php print $list['vehicle_description']; ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="updateData" value="Update">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>
<?php } ?>

<?php 

if(isset($_POST['updateData']))
{
    $vehicleID = $_POST['vehicleID'];
    $vehicleName = $_POST['vehicleName'];
    $vehicleOrigin = $_POST['vehicleOrigin'];
    $vehicleCost = $_POST['vehicleCost'];
    $vehicleDescription = $_POST['vehicleDescription'];

    $updateCRUD = new CRUD();
    $uploadData = $updateCRUD->update_data($vehicleID, $vehicleName, $vehicleOrigin, $vehicleCost, $vehicleDescription);

    if($uploadData == "Success")
    {
        header('Location: index.php');
    }
    else
    {
        print "An error occurred";
    }
}
?>