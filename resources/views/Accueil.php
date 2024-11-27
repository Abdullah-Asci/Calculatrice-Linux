<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice sous Linux</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        h2 {
            color: #666;
            font-weight: normal;
            margin-bottom: 20px;
            text-align: center;
        }
        a.btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        a.btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1>Calculatrice</h1>
    <h2>Voici une calculatrice réalisée sous machine virtuelle, en framework PHP. Elle permet d'additionner, soustraire, multiplier, diviser, de donner le cosinus, le sinus et la tangente mais aussi faire la mise au carré !</h2>

    <a href="http://127.0.0.1:8000/calculatrice" class="btn">
        Commencer à calculer !
    </a>
</body>
</html>
