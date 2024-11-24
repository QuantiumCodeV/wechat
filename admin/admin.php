<?php

if(!isset($_COOKIE['admin'])){
    Header("Location: login.php");
}
include '../config.php';
$sql = "SELECT * FROM links";
$result = $mysql->query($sql);
if ($result->num_rows > 0) {
    $links = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <style>
        *{
            box-sizing: border-box;
        }
        .errors{
            font-size: 12px;
            color: red;
        }
        .card {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            border-radius: 4px;
        }
        .btn {
            background: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .btn:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <div class="card">
        <form action="saveLinks.php" method="post">
            <div class="form-group">
                <label for="apple">MacOS Link</label>
                <input value="<?php echo $links['apple'] ?? ''; ?>" type="text" name="apple" placeholder="Apple Store Link">
            </div>
            <div class="form-group">
                <label for="windows">Windows Link</label>
                <input value="<?php echo $links['windows'] ?? ''; ?>" type="text" name="windows" placeholder="Windows Link">
            </div>
            
            <button type="submit" class="btn">Сохранить</button>
        </form>
    </div>
</body>
</html>