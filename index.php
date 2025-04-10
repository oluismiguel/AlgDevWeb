<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventoEtech 2026</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="container-fluid bg-light py-3">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4">EventoEtech 2026</h1>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">EventoEtech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Palestrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Programação</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Inscrições</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <section class="row">
            <div class="col-md-12 text-center">
                <h2 class="display-5">Bem-vindo ao EventoEtech 2026</h2>
                <p class="lead">Prepare-se para um evento inovador e inspirador sobre tecnologia!</p>
            </div>
        </section>

        <section class="row py-4">
            <div class="col-md-12">
                <h3 class="h4">Palestrantes</h3>
                <?php 
                    $palestrantes = array(
                        array('nome' => 'João Silva', 'confirmado' => true),
                        array('nome' => 'Maria Santos', 'confirmado' => false),
                        array('nome' => 'Pedro Oliveira', 'confirmado' => true)
                    );

                    foreach ($palestrantes as $palestrante) {
                        echo '<div class="card mb-3">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $palestrante['nome'] . '</h5>';
                        if ($palestrante['confirmado']) {
                            echo '<p class="card-text text-success">Confirmado</p>';
                        } else {
                            echo '<p class="card-text text-warning">Pendente</p>';
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </section>

        <section class="row">
            <div class="col-md-12">
                <h3 class="h4">Programação</h3>
                <p>Em breve, divulgaremos a programação completa do EventoEtech 2026.</p>
            </div>
        </section>

    </main>

    <footer class="container-fluid bg-light py-3 mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="mb-0">EventoEtech 2026 - Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
