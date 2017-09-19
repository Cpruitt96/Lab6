<?php
    require_once('database.php');
    $query = "SELECT firstName, lastName FROM customers order by lastName";
    
    $customers = $db->query($query);

   
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Cusomter Relations</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Customers</h1>
    </div>

    <div id="main">

        <h1>Customer List</h1>

       

        <div id="content">
            <!-- display a table of products -->
            
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?php echo $customer['firstName']; ?></td>
                    <td><?php echo $customer['lastName']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> Columnus State University</p>
    </div>

    </div><!-- end page -->
</body>
</html>