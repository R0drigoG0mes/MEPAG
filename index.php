<?php
include_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rodrigo Gomes Cordeiro">
    <meta name="description" content="A Mepag é um sistema de cobra os outros por você.">
    <meta name="keywords" content="Dinheiro, cobrar, cobranças, dívidas, débitos">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="Icones/style.css">
    <title>Mepag</title>
</head>
<body>
    <header>
        <p class="logo">
            Mepag
        </p>
        <nav>
            <div class="btn_Simples" id="btn_registrar">Registrar-se</div>
            <div class="btn_Simples" id="btn_entrar">Entrar <span class="icon-enter"></span></div>
            <div class="btn_Simples" id="btn_sair" style="display: none;">Sair <span class="icon-exit"></span></div>
            <div style="display: none;" id="cumprimento">Olá </div>
        </nav>
    </header>
    <main id="main">
        <div class="pai" id="pai1">
            <div class="caixa_primeiro_p">
                <p class="primeirop">
                    A Mepag realiza as cobranças de dívidas criadas em situações casuais.
                </p>
            </div>
            <div class="caixa_imagem_principal">
                <img class="imagem_principal" src="imagens/PessoasNoCelular_Pequena.jpg" alt="">
            </div>
        </div>
        <hr class="separacao_vinho" id="separacao">
        <div id="pai2">
            <div class="agrupador">
                <img src="imagens/PessoasSeCumprimentando.svg" alt="" class="imagem_vinho">
                <p class="paragrafo_vinho">A Mepag normaliza seus negócios e traz seu dinheiro de volta.</p>
            </div>
        </div>
        <div id="cobrar" class="pai_cobrar">
            <div class="nav_cobrar" id="nav_cobrar" style="display: none;">
                <ul class="lista_btn_nav_cobrar">
                    <li><input type="search" id="pesquisar_cobranca" placeholder="Pesquise aqui"><span class="icon-search"></span></li>
                    <li class="icones_cobrar"><span class="icon-eye"></span></li>
                    <li class="icones_cobrar"><span class="icon-bookmarks"></span></li>
                    <li class="icones_cobrar"><span class="icon-sort-alpha-asc"></span></li>
                    <li class="icones_cobrar"><span class="icon-sort-numeric-asc"></span></li>
                    <li class="icones_cobrar"><span class="icon-clock"></span><span class="icon-arrow-down2"></span></li>
                    <li class="icones_cobrar"><span class="icon-coin-dollar"></span><span class="icon-arrow-down2"></span></li>
                </ul>
            </div>
    </main>
    <footer>
        <div class="rodape">
            <ul class="lista-final" id="lista1">
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
            </ul>
            <ul class="lista-final" id="lista2">
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
                <li><a href="">Lorem <span class="icon-circle-down"></span></a></li>
            </ul>
        </div>
        <div class="final">
            <p>Copyright Mepag&copy; 2023</p>
        </div>
    </footer>

    <div class="registro caixa_formulario" id="registrar" style="display: none;">
        <form action="registrar.php" method="POST" autocomplete="on">
            <legend>Registrar-se</legend>
            <fieldset>
                <span class="btn_cancelar_registro icon-cancel-circle" id="btn_cancelar_registro"></span>
                
                <label for="nome_registro">Nome:</label>
                <input type="text" name="nome" id="nome_registro" class="input_padrao">

                <label for="usuario_registro">Usuário:</label>
                <input type="text" maxlength="20" name="usuario" id="usuario_registro" class="input_padrao">

                <label for="senha_registro">Senha:</label>
                <input type="password" maxlength="20" name="senha" id="senha_registro" class="input_padrao ultimo_input">

                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" name="nascimento" id="data_nascimento">

                <input class="btn_salvar_registro" id="btn_salvar_registro" type="submit" value="Salvar">
            </fieldset>
        </form>
    </div>

    <div class="entrar caixa_formulario" id="entrar" style="display: none;">
        <form action="entrar.php" autocomplete="on" method="POST">
            <legend>Entrar</legend>
            <fieldset>

                <label for="usuario_entrar">Usuário:</label>
                <input type="text" maxlength="20" name="usuario_entrar" id="usuario_entrar" class="input_padrao">

                <label for="senha_entrar">Senha:</label>
                <input type="password" maxlength="20" name="senha_entrar" id="senha_entrar" class="input_padrao ultimo_input">

                <input class="btn_salvar_entrar" id="btn_salvar_entrar" type="submit" value="Entrar">
                <span class="btn_cancelar_entrar" id="btn_cancelar_entrar">Cancelar</span>
            </fieldset>
        </form>
    </div>

    <div class="nova_cobrança" id="nova_cobrança" style="display: none;">
        <span class="icon-plus"></span>
    </div>

    <div class="caixa_formulario" id="formulario_nova_cobrança" style="display: none;">
        <form action="nova_cobranca.php" method="POST" autocomplete="on">
            <legend>Dados da Cobrança</legend>
            <fieldset>
                <label for="nome_nova_cobrança">Nome do devedor:</label>
                <input type="text" name="" id="nome_nova_cobrança">

                <label for="numero_nova_cobrança">Número do devedor:</label>
                <input type="tel" name="" id="numero_nova_cobrança">

                <label for="valor_nova_cobrança">Valor da dívida:</label>
                <input type="number" name="" id="valor_nova_cobrança">

                <label for="descriçao_nova_cobrança">Descrição da dívida:</label>
                <textarea name="" class="descriçao_nova_cobrança" id="descriçao_nova_cobrança" cols="30" rows="10"></textarea>

                <input class="salvar_nova_cobrança" id="salvar_nova_cobrança" type="submit" value="Salvar">
                <span class="cancelar_nova_cobrança" id="cancelar_nova_cobrança">Cancelar</span>
            </fieldset>
        </form>
    </div>

    <script src="Scripts/script.js"></script>
</body>
</html>