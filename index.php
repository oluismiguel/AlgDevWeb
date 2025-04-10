<?php
$palestantes = [
    ["nome" => "Ana Souza", "status" => true],
    ["nome" => "Carlos Lima", "status" => true],
    ["nome" => "Em Breve", "status" => false],
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Incrível</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white p-3">
        <div class="container">
            <h1 class="h3">Evento Incrível</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
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
                    <h2 class="h4">Nome do Evento - Local - Descrição</h2>
                    <p class="lead">Este evento é destinado a profissionais de tecnologia e terá diversas palestras com especialistas renomados.</p>
                </div>
            </div>
        </section>

        <section id="palestrantes" class="mb-5">
            <h2 class="h4">Palestrantes Confirmados</h2>
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
                            <span class="badge bg-warning text-dark">Em Breve</span>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>

    <footer id="contato" class="bg-light text-center p-4">
        <p class="text-muted mb-1">&copy; 2025 Evento Incrível</p>
        <p class="text-muted">Contato: contato@eventoincrivel.com</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
