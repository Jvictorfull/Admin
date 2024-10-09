<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição - Conferência de Tecnologia 2024</title>

<style>
h1 {
    color: blue;
}

h2 {
    color: pink;
}

form label, form input, form select, form button {
    display: block;
    margin-top: 10px;
}

</style>
</head>
<body>
 
    <header>
        <h1>Inscrição para a Conferência de Tecnologia 2024</h1>
        <nav>
            <ul>
                
                 
            </ul>
        </nav>
    </header>
 
    <main>
        <section>
            <h2>Preencha o Formulário de Inscrição</h2>
            <form action="{{ url('/inscricao') }}" method="POST">
                @csrf
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>
 
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
 
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone">
 
                <label for="evento">Selecione o Evento:</label>
                <select id="evento" name="evento">
                    <
                    <option value="dia1">Dia 1 - 5 de Novembro de 2024</option>
                    <option value="dia2">Dia 2 - 6 de Novembro de 2024</option>
                    <option value="ambos">Ambos os Dias</option>
                </select>
 
                <button type="submit">Enviar Inscrição</button>
            </form>
        </section>
    </main>
 
    <footer>
        <p>&copy; 2024 Conferência de Tecnologia e Inovação. Todos os direitos reservados.</p>
    </footer>
 
</body>
</html>