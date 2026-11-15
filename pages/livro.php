<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <main>
        <section class="section_info">
            <img src="" alt="">
            <article class="section_article_info">
                <p class="section_tag"></p>
                <h1 class="fonte_titulo hero"></h1>
                <p></p>
                <div class="secction_article_buttons">
                    <button class="button quaternary">
                        <img src="/PontoEVirgula-Site/assets/img/shopping.png" alt="">
                        <p>Adicionar a sacola</p>
                    </button>
                </div>
            </article>
        </section>

        <section>
            <article>
                <h4 class="fonte_titulo div">Descrição</h4>
                <p></p>
            </article>
            <article>
                <h4 class="fonte_titulo item">Editora</h4>
                <p></p>
                <h4 class="fonte_titulo item">Número de páginas</h4>
                <p></p>
                <h4 class="fonte_titulo item">Idioma</h4>
                <p></p>
            </article>
        </section>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>