<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="/CSS/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio PHP</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=arit">Op. Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio-procedencia">Desafio Procedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo Strings</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio-string">Desafio Strings</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=boleano">Tipo Boleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03 - Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio">Desafio</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constante">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 04 - Estruturas de Controle I</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle1&file=ifelse">If / Else</a></li>
                        <li><a href="exercicio.php?dir=controle1&file=operadores_relacionais">Operadores Relacionais I</a></li>
                        <li><a href="exercicio.php?dir=controle1&file=desafio_pi">Desafio Pi</a></li>
                        <li><a href="exercicio.php?dir=controle1&file=operadores_logicos">Operadores Lógicos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Sérgio Melo © <?php echo date('Y'); ?>
    </footer>
</body>
</html>