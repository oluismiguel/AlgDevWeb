<?php
$palestantes = [

    ["nome" => "Ana Souza", "status" => true],
    ["nome" => "Carlos Lima", "status" => true],
    ["nome" => "Matheus", "status" => false],
    ["nome" => "Rodrigo", "status" => true],
    ["nome" => "Bruno", "status" => false],
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Etech 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header class="bg-dark text-white p-3">
    <div class="container">
        <h1 class="h3">Evento Etech 2026</h1>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="#descricao">Descrição</a></li>
                <li class="nav-item"><a class="nav-link" href="#palestrantes">Palestrantes</a></li>
                <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container mt-4">
    <section id="descricao" class="mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h4 h4-vermelho">Evento Etech - Teatro Capitólio </h2>
                <p class="lead"> Com a chegada de um novo ano um novo ciclo se inicia, e com ele novas tecnologias e e descobertas se veem presente em mais um edição de um dos maiores eventos de tecnologia do país o ETch 2026!</p>
            </div>
        </div>
    </section>

    <section id="palestrantes" class="mb-5">
        <h2 class="h4">Lista de Participantes</h2>
        <ul class="list-group">
            <?php foreach ($palestantes as $palestrante): ?>
                <?php if ($palestrante['status']): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $palestrante['nome'] ?>
                        <span class="badge bg-success">Confirmado</span>
                    </li>
                <?php else: ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $palestrante['nome'] ?>
                        <span class="badge bg-warning text-dark">Não Confirmado</span>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </section>
</main>

<footer id="contato" class="bg-light text-center p-4">
    <p class="text-muted mb-1">&copy; 2025 Evento Etech 2026</p>
    <p class="text-muted">Contato: Etech@gmail.com</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
