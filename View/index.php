<?php

require_once __DIR__ . '/../Controller/AguaController.php';

$controller = new AguaController();

$resultado = $controller->analisar();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laboratório de Qualidade da Água</title>

    <link rel="stylesheet" href="../templates/style.css">
</head>

<body>

    <header class="cabecalho">
        <div class="container">
            <h1>Laboratório de Qualidade da Água</h1>
            <p>Análise de parâmetros da qualidade da água</p>
        </div>
    </header>

    <main class="container">

        <section class="introducao">
            <h2>Análise da Amostra</h2>

            <p>
                Informe os valores encontrados na amostra de água
                para realizar a análise dos principais parâmetros.
            </p>
        </section>

        <section class="card">

            <h2>Dados da amostra</h2>

            <form action="" method="POST">

                <div class="campo">
                    <label for="ph">pH</label>
                    <input
                        type="number"
                        id="ph"
                        name="ph"
                        step="0.1"
                        min="0"
                        max="14"
                        placeholder="Ex.: 7.0"
                        required
                    >
                    <small>Informe um valor entre 0 e 14.</small>
                </div>

                <div class="campo">
                    <label for="turbidez">Turbidez (NTU)</label>
                    <input
                        type="number"
                        id="turbidez"
                        name="turbidez"
                        step="0.1"
                        min="0"
                        placeholder="Ex.: 0.5"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="cloro">Cloro residual (mg/L)</label>
                    <input
                        type="number"
                        id="cloro"
                        name="cloro"
                        step="0.1"
                        min="0"
                        placeholder="Ex.: 0.5"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="dureza">Dureza (mg/L)</label>
                    <input
                        type="number"
                        id="dureza"
                        name="dureza"
                        step="0.1"
                        min="0"
                        placeholder="Ex.: 40"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="temperatura">Temperatura (°C)</label>
                    <input
                        type="number"
                        id="temperatura"
                        name="temperatura"
                        step="0.1"
                        min="0"
                        placeholder="Ex.: 20"
                        required
                    >
                </div>

                <button type="submit">
                    Analisar amostra
                </button>

            </form>

    <?php if ($resultado !== null): ?>

    <div class="resultado">

        <h2>Resultado da análise</h2>

        <p>
            <strong>pH:</strong>
            <?= $resultado["ph"] ?>
        </p>

        <p>
            <strong>Turbidez:</strong>
            <?= $resultado["turbidez"] ?>
        </p>

        <p>
            <strong>Cloro residual:</strong>
            <?= $resultado["cloro"] ?>
        </p>

        <p>
            <strong>Dureza:</strong>
            <?= $resultado["dureza"] ?>
        </p>

        <p>
            <strong>Temperatura:</strong>
            <?= $resultado["temperatura"] ?>
        </p>

        <div class="qualidade">
            <strong>
                <?= $resultado["qualidadeGeral"] ?>
            </strong>
        </div>

    </div>

    <?php endif; ?>

        </section>

        <section class="informacoes">

            <h2>Parâmetros analisados</h2>

            <div class="parametros">

                <div class="parametro">
                    <h3>pH</h3>
                    <p>
                        Avalia o nível de acidez ou alcalinidade da água.
                    </p>
                </div>

                <div class="parametro">
                    <h3>Turbidez</h3>
                    <p>
                        Indica a quantidade de partículas que deixam a água turva.
                    </p>
                </div>

                <div class="parametro">
                    <h3>Cloro residual</h3>
                    <p>
                        Verifica a quantidade de cloro presente na água.
                    </p>
                </div>

                <div class="parametro">
                    <h3>Dureza</h3>
                    <p>
                        Classifica a água de acordo com a concentração de sais.
                    </p>
                </div>

                <div class="parametro">
                    <h3>Temperatura</h3>
                    <p>
                        Registra a temperatura da amostra analisada.
                    </p>
                </div>

            </div>

        </section>

    </main>

    <footer>
        <p>
            Laboratório Digital de Qualidade da Água
        </p>
    </footer>

</body>
</html>