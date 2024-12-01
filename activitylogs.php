<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Logs</title>
    <style>
		* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #FEFAE0;
            color: #333;
            padding: 20px;
        }

        a {
            color: #626F47;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 20px;
        }

        a:hover {
            color: #798645;
            text-decoration: underline;
        }

        .tableClass {
            background-color: #F2EED7;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #798645;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #626F47;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin: 0 auto;
            background-color: #FEFAE0;
            border-radius: 5px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #BDC3C7;
        }

        table th {
            background-color: #798645;
            color: white;
            font-weight: 500;
        }

        table td {
            background-color: #F2EED7;
        }

        table tr:hover td {
            background-color: #FEFAE0;
        }


        table a {
            color: #626F47;
            text-decoration: none;
        }

        table a:hover {
            text-decoration: underline;
            color: #798645;
        }
    </style>
</head>
<body>
    <a href="index.php">Back</a>
    <h1>Activity Logs</h1>
    <div class="tableClass">
        <table>
            <tr>
                <th>Activity Log ID</th>
                <th>Applicant ID</th>
                <th>Operation</th>                
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Language Skills</th>
                <th>Availability</th>
                <th>Experience Level</th>
                <th>User Name</th>            
                <th>Date Added</th>
            </tr>
            <?php $getAllActivityLogs = getAllActivityLogs($pdo); ?>
            <?php foreach ($getAllActivityLogs as $row) { ?>
            <tr>
                <td><?php echo $row['activity_log_id']; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['operation']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact_number']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['language_skills']; ?></td>
                <td><?php echo $row['availability']; ?></td>
                <td><?php echo $row['experience_level']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['date_added']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>