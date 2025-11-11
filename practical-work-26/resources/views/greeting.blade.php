<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие - Laravel App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .info-box {
            background: #e8f4fc;
            padding: 15px;
            border-left: 4px solid #3498db;
            margin: 20px 0;
        }
        .task-list {
            list-style: none;
            padding: 0;
        }
        .task-list li {
            background: #ecf0f1;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Добро пожаловать, {{ $name }}!</h1>
        
        <div class="info-box">
            <h2>Информация о курсе</h2>
            <p><strong>Курс:</strong> {{ $course }}</p>
            <p><strong>Дата:</strong> {{ date('d.m.Y') }}</p>
        </div>

        <h2>Задачи практической работы:</h2>
        <ul class="task-list">
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd;">
            <h3>Навигация:</h3>
            <a href="/" style="color: #3498db; margin-right: 15px;">Главная</a>
            <a href="/hello" style="color: #3498db; margin-right: 15px;">Простой маршрут</a>
            <a href="/user/123" style="color: #3498db;">Маршрут с параметром</a>
        </div>
    </div>
</body>
</html>