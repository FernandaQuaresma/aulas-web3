<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Home Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #121212;
            font-family: Arial, sans-serif;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .logo h1 {
            font-family: "Press Start 2P", serif;
            font-size: 25px;
            color: #8B0000; 
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1200px;
        }

        .formularis {
            background-color: #1e1e1e;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
            margin: 0 20px;
            margin-left: -200px;
        }

        .formularis label {
            display: block;
            margin-bottom: 10px;
            color: #8B0000; 
            font-size: 1rem;
        }

        .formularis input {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border: 2px solid #8B0000; 
            border-radius: 6px;
            background-color: #333;
            color: #fff;
            font-size: 1rem;
        }

        .formularis input:focus {
            outline: none;
            border-color: #ff6666; 
        }

        .formularis button {
            width: 100%;
            padding: 12px;
            background-color: #8B0000;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .formularis button:hover {
            background-color: #660000; 
        }

        .sinopse {
            font-family: "Press Start 2P", serif;
            color: #fff;
            font-size: 1.2rem;
            max-width: 500px;
            padding: 20px;
            text-align: left;
            background-color: #1e1e1e;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            margin-left: 20px;
            margin-right: -250px;
        }

        .sinopse p {
            margin-bottom: 20px;
        }

        .imagem {
            max-width: 500px;
            height: auto;
            margin-right: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .sinopse, .imagem {
                margin: 10px 0;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <h1>DarkForm</h1>
        </div>
    </header>

    <div class="container">

        <div class="formularis">
            <div class="text">Faça seu login:</div>
            <form>
                <label>Insira seu nome de usuário:</label>
                <input type="text" required>

                <label>Insira sua senha:</label>
                <input type="password" required>

                <button type="submit">Entrar</button>
            </form>
        </div>


        <div class="imagem">
            <img src="https://preview.redd.it/alucard-wallpaper-by-me-v0-4n7a5gqpnkub1.png?width=640&crop=smart&auto=webp&s=edd41803b20290603157d64d7602f8c054c0aa8b" height="900px">
        </div>


        <div class="sinopse">
            <p><strong>Hellsing</strong> é um anime que segue a história de Alucard, um vampiro poderoso que trabalha para a organização Hellsing, dedicada à proteção da Inglaterra contra ameaças sobrenaturais. Junto com a jovem Integra Hellsing e a guerreira Seras Victoria, Alucard combate criaturas das trevas, enfrentando monstros e humanos que desafiam o governo britânico. A série mistura ação intensa, elementos de terror e uma atmosfera sombria enquanto revela segredos do passado de Alucard e de suas motivações.</p>
            <p>Prepare-se para uma história de vingança, mistério e batalhas épicas contra forças sobrenaturais.</p>
        </div>
    </div>

</body>
</html>
