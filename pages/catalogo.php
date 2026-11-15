<?php
require_once __DIR__ . '/../includes/conexao.php';

$livrosPorPagina = 12;

$sqlTotal = "SELECT COUNT(*) FROM livros WHERE ativo = 1";
$totalLivros = $pdo->query($sqlTotal)->fetchColumn();

$totalPaginas = max(1, ceil($totalLivros / $livrosPorPagina));

$paginaAtual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;

$paginaAtual = max(1, min($paginaAtual, $totalPaginas));

$offset = ($paginaAtual - 1) * $livrosPorPagina;

$sql = "SELECT id_livro, titulo, autor, preco, capa
        FROM livros
        WHERE ativo = 1
        ORDER BY destaque DESC, titulo ASC
        LIMIT :limite OFFSET :offset";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':limite', $livrosPorPagina, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

$stmt->execute();

$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Livros | Ponto;Vírgula</title>

    <link rel="stylesheet" href="/PontoEVirgula-Site/assets/css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <main>
        <section class="section_titulo catalogo">
            <h1 class="fonte_titulo hero">Nosso acervo</h1>
            <p>Uma boa história pode começar aqui.</p>

            <article class="article_form catalogo">
                <form action="" class="section_form catalogo">
                    <input class="input_form" type="email" id="email_carta" name="email_carta" placeholder="Buscar por título, autor ou palavra-chave..">
                    <button class="button quaternary">Buscar</button>
                </form>
            </article>
        </section>

        <section class="section_livro catalogo">
            <article class="section_article_livros">
                <?php foreach ($livros as $livro): ?>
                    <div class="card_livro">
                        <?php if (!empty($livro['capa'])): ?>
                            <img class="card_capa_livro"
                                src="<?= htmlspecialchars($livro['capa']) ?>"
                                alt="Capa de <?= htmlspecialchars($livro['titulo']) ?>"
                            >
                        <?php endif; ?>
                        <h4 class="fonte_titulo livro">
                            <?= htmlspecialchars($livro['titulo']) ?>
                        </h4>
                        <p><?= htmlspecialchars($livro['autor']) ?></p>
                        <div>
                            <p>
                                R$ <?= number_format($livro['preco'], 2, ',', '.') ?>
                            </p>
                            <a class="link tertiary" href="livro.php?id=<?= $livro['id_livro'] ?>">
                                <p>Ver livro</p>
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </article>
            <nav class="paginacao" aria-label="Paginação do catálogo">
                <span>
                    Página <?= $paginaAtual ?> de <?= $totalPaginas ?>
                </span>
                <div class="paginacao_numeros">
                    <?php if ($paginaAtual > 1): ?>
                        <a href="?pagina=<?= $paginaAtual - 1 ?>"
                        aria-label="Página anterior">
                            ←
                        </a>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                        <a
                            href="?pagina=<?= $i ?>"
                            class="<?= $i == $paginaAtual ? 'pagina_ativa' : '' ?>"
                            <?= $i == $paginaAtual ? 'aria-current="page"' : '' ?>
                        >
                            <?= $i ?>
                        </a>
                    <?php endfor; ?>
                    <?php if ($paginaAtual < $totalPaginas): ?>
                        <a href="?pagina=<?= $paginaAtual + 1 ?>"
                        aria-label="Próxima página">
                            →
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
        </section>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>