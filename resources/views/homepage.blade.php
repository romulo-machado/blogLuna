<!DOCTYPE html>
<html lang="pt -br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog da Luna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9ff;
            color: #333;
        }

        header {
            background-color: #ff6f61;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        header p {
            font-size: 1.2rem;
            margin: 5px 0 0;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #ffc107;
            padding: 10px 0;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #ff6f61;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        main h2 {
            color: #ff6f61;
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Blog da Luna!</h1>
        <p>Um espaço para compartilhar histórias, sonhos e aventuras!</p>
    </header>
    <nav>
        <a href="#">Início</a>
        <a href="#">Sobre Mim</a>
        <a href="#">Meus Posts</a>
        <a href="#">Contato</a>
    </nav>
    <main>
        <h2>Olá, sou a Luna!</h2>
        <p>Este é o meu blog, onde eu compartilho tudo o que eu gosto: histórias incríveis, desenhos que eu fiz, receitas legais que experimentei e muito mais! Espero que você se divirta aqui tanto quanto eu me divirto criando essas coisas.</p>
        <p>Não se esqueça de voltar sempre para conferir as novidades!</p>
        <img src="{{ asset('images/fotoHotelHome2.jpeg') }}" alt="Imagem de exemplo" style="height: 100%; width: 30%; border-radius: 8px; margin-right: 5px;">
        <img src="{{ asset('images/fotoHome.jpeg') }}" alt="Minha prima Maxini e eu ❤️" style="width: 40%; border-radius: 8px">

    </main>
    <footer>
        <p>&copy; 2025 Blog da Luna. Feito com amor! 🌟</p>
    </footer>
</body>
</html>
