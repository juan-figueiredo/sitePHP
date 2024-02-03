<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Pesquisa</title>
</head>

<body>
    <h1>Resultados da Pesquisa</h1>

    <?php
    // Verifica se a variável 'query' foi enviada via GET
    if (isset($_GET['query'])) {
        // Obtém a consulta da variável 'query'
        $pesquisa = $_GET['query'];

        // Simula resultados da pesquisa (você pode conectar a um banco de dados real aqui)
        $resultados = array(
            'Resultado 1',
            'Resultado 2',
            'Resultado 3'
        );

        // Exibe os resultados
        if (empty($resultados)) {
            echo '<p>Nenhum resultado encontrado para a pesquisa: ' . htmlspecialchars($pesquisa) . '</p>';
        } else {
            echo '<ul>';
            foreach ($resultados as $resultado) {
                echo '<li>' . htmlspecialchars($resultado) . '</li>';
            }
            echo '</ul>';
        }
    } else {
        // Se 'query' não foi definido, redireciona de volta para a página inicial
        header('Location: index.html');
        exit();
    }
    ?>
</body>

</html>