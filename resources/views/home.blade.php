<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferência de Tecnologia e Inovação 2024</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        header { 
            background-color: #00bcd4;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #ffeb3b;
        }
        main {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        section {
            margin-bottom: 30px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        footer a {
            color: #ffeb3b;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        figure {
            margin: 20px 0;
        }
        img {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 8px;
        }
        @media (max-width: 600px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            nav ul {
                flex-direction: column;
                margin-top: 10px;
            }
            nav ul li {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo à Conferência de Tecnologia e Inovação 2024</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/programacao') }}">Programação</a></li>
                <li><a href="{{ url('/palestrantes') }}">Palestrantes</a></li>
                <li><a href="{{ url('/inscricao') }}">Inscrição</a></li>
                <li><a href="{{ url('/patrocinadores') }}">Patrocinadores</a></li>
            </ul>
        </nav>
    </header>
 
    <main>
        <section>
            <h2>Sobre o Evento</h2>
            <article>
                <p>A Conferência de Tecnologia e Inovação 2024 será o maior encontro de profissionais e entusiastas de tecnologia, com palestras sobre inovações em IA, blockchain, robótica e muito mais.</p>
                <figure>
                    <img src="{{ asset('imagens/tec5g.jpg') }}" alt="Conferência de Tecnologia" loading="lazy">
                    <figcaption>Participe da Conferência de Tecnologia 2024.</figcaption>
                </figure>
            </article>
        </section>
    </main>
 
    <footer>
        <p>&copy; 2024 Conferência de Tecnologia e Inovação. Todos os direitos reservados.</p>
        <address>Contato: <a href="mailto:contato@conferenciatec.com">contato@conferenciatec.com</a></address>
    </footer>
</body>
</html>
