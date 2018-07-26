<!DOCTYPE html>

<html>

<head>

    <title>PHP CRUD  |  Add User</title>

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Add Course</legend>

 

    <form action="a_create.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Capacity</th>
                <th>Cost</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Type</th>
                <th>Total Hours</th>
            </tr>
            <tr>

                <td><input type="text" name="name" placeholder="name" /></td>
                <td><input type="text" name="img" placeholder="img" /></td>
                <td><input type="text" name="description" placeholder="description" /></td>
                <td><input type="text" name="capacity" placeholder="capacity" /></td>
                <td><input type="text" name="cost" placeholder="cost" /></td>
                <td><input type="text" name="startDate" placeholder="start Date" /></td>
                <td><input type="text" name="endDate" placeholder="end Date" /></td>
                <td><input type="text" name="type" placeholder="type" /></td>
                <td><input type="text" name="totalHours" placeholder="total Hours" /></td>

            </tr> 
            <tr>

                <td><button type="submit">Add</button></td>

                <td><a href="adminhome.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>