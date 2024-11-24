<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <style>
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
        <form>
            <div class="form-group">
                <input type="text" placeholder="Поле 1">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Поле 2">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Поле 3">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Поле 4">
            </div>
            <button type="submit" class="btn">Сохранить</button>
        </form>
    </div>
</body>
</html>