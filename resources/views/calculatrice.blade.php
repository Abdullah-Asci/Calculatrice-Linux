<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        input[type="number"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        h2 {
            color: #FF0000;
            font-size : 15px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Calculatrice</h1>
        <form action="{{ route('calculer') }}" method="POST">
            {{ csrf_field() }}
            <input type="number" name="nombre1" placeholder="Nombre 1" required>
            <select name="operation">
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
                <option value="cosinus">cos</option>
                <option value="sinus">Sin</option>
                <option value="tangente">Tan</option>
                <option value="carre">²</option>
            </select>
            <input type="number" name="nombre2" placeholder="Nombre 2" required>
            <button type="submit">Calculer</button>
            <h2>Pour les opérations de mise à la puissance, cosinus, sinus et tangente, il vous suffit de saisir la velurs choisis dans l'emplacement de la première zone de saisie puis saisir '1' dans la deuxièmeet ensuite choisir l'opérations souhaité puis appuyer sur calculer.</h2>
        </form>
        @isset($result)
            <h2>Résultat : {{ $result }}</h2>
        @endisset
    </div>
</body>
</html>
