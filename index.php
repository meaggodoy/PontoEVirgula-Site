<?php
require_once 'includes/conexao.php';

$sql = "SELECT id_livro, titulo, autor, preco, capa
        FROM livros
        WHERE destaque = 1 AND ativo = 1
        LIMIT 4";

$stmt = $pdo->query($sql);
$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto;Vírgula</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <!--Hero-->
        <section class="section_info hero">
            <article class="section_article_info hero">
                <p class="section_tag">Livraria independente & café</p>
                <h1 class="fonte_titulo hero">Uma pausa antes do <span>próximo capítulo.</span></h1>
                <p>Livros escolhidos com afeto, café passado sem pressa e um lugar para deixar o mundo lá fora por algumas páginas.</p>
                <div class="section_article_buttons">
                    <button class="button primary">
                        <p>Conheça nossa curadoria</p>
                        <span>→</span>
                    </button>
                    <button class="button secondary">
                        <p>Planeje sua visita</p>
                    </button>
                </div>
            </article>
            <img src="assets/img/pontovirgulahero.jfif" alt="">
        </section>

        <!--Leituras recomendadas-->
        <section class="section_livro">
            <div class="section_livro_header">
                <p class="section_tag">Escolhas da casa</p>
                <h1 class="fonte_titulo hero">Livros para ler sem pressa</h1>
                <p>Uma seleção feita por quem acredita que o livro certo sempre encontra o seu leitor.</p>
            </div>            
            <article class="section_article_livros">
                <?php foreach ($livros as $livro): ?>
                    <div class="card_livro">
                        <?php if (!empty($livro['capa'])): ?>
                            <img
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
            <a href="" class="link primary">
                <p>
                    Ver todos os livros
                </p>
                <span>→</span>
            </a>
        </section>

        <!--Café-->
        <section class="section_info cafe">
            <img src="assets/img/pontovirgulacafe.jfif" alt="">
            <article class="section_article_info cafe">
                <p class="section_tag">Entre um capítulo e outro</p>
                <h2 class="fonte_titulo">Um café para acompanhar boas histórias</h2>
                <p>Grãos de pequenos produtores, quitutes artesanais e receitas que têm gosto de casa. Nosso café nasceu para ser o intervalo perfeito - ou o começo de uma longa tarde entre livros.</p>
                <div class="section_article_div">
                    <div class="section_article_div_info">
                        <h4 class="fonte_titulo div">100%</h4>
                        <p>Café brasileiro</p>
                    </div>
                    <div class="section_article_div_info">
                        <h4 class="fonte_titulo div">Feito aqui</h4>
                        <p>Bolos e quitutes</p>
                    </div>
                </div>
                <div class="secction_article_buttons">
                    <button class="button primary">
                        <p>Conheça o cardápio</p>
                        <span>→</span>
                    </button>
                </div>
            </article>
        </section>

        <!--Encontros-->
        <section>

        </section>

        <!--História-->
        <section class="section_info historia">
            <img src="assets/img/pontovirgulahistoria.jfif" alt="">
            <article class="section_article_info historia">
                <p class="section_tag">Nossa história</p>
                <h2 class="fonte_titulo">Mais que uma livraria, um lugar para pertencer</h2>
                <p>A Ponto;Vírgula nasceu do desejo de criar uma pausa na cidade. Um endereço onde livros não são apenas vendidos, mas conversados; onde o café convida a ficar e cada pessoa pode encontrar seu próprio canto.</p>
                <p>Somos independentes, curiosos e apaixonados pelas histórias que aproximam pessoas</p>
                <div class="secction_article_buttons">
                    <button class="button secondary">
                        <p>Conheça nossa história</p>
                        <span>→</span>
                    </button>
                </div>
            </article>
        </section>

        <!--Cartas-->
        <section class="section_carta">
            <h2 class="fonte_titulo">Cartas da Ponto;Vírgula</h2>
            <p>Recomendação de leitura, novidades da casa e convites para os nossos encontros direto na sua caixa de entrada.</p>

            <form action="" class="section_form_carta">
                <input class="input_form" type="email" id="email_carta" name="email_carta">
                <button class="button quaternary">Quero receber</button>
            </form>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>