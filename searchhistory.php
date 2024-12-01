<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search History</title>
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
    <h1>Search History</h1>
    <div class="tableClass">
        <table>
            <tr>
                <th>Search History ID</th>
                <th>Search Query</th>
                <th>Username</th>
                <th>Date Searched</th>
            </tr>
            <?php 
            $getSearchHistory = getSearchHistory($pdo); 
            foreach ($getSearchHistory as $row) { ?>
            <tr>
                <td><?php echo $row['search_id']; ?></td>
                <td><?php echo $row['keyword']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['date_searched']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
