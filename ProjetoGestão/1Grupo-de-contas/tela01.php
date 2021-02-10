<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar item</title>
    <link href="/_css_BS_4/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/_css_BS_3/bootstrap.css" rel="stylesheet">
    <link href="/_css_BS_3/style.css" rel="stylesheet">
    <script src="/_js_BS_4/jquery-3.4.1.slim.min.js"></script>
    <script src="/_js_BS_4/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-sm ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Alternar de navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MENU</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/0TelaPrincipal/telaMenu.html">Início</a></li>
                    <li><a href="/1Grupo-de-contas/tela01.html">Grupo de contas</a></li>
                    <li><a href="/2Forma-de-movimentacao/tela02.html">Forma de movimentação</a></li>
                    <li><a href="/3Financeiro/telaFinan.html">Financeiro</a></li>
                    <li><a href="/4lancamento/tela04.html">Lançamento</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="containter">
        <div id="main" class="container-fluid">
            <h3 class="page-header">Adicionar Item</h3>
            <form action="index.html">
                <div class="row">


                    <div class="form-group col-md-3">
                        <label for="campo1">Codigo</label>
                        <input type="text" class="form-control" id="campo1" name="codigo_cad" id="codigo_cad">
                    </div>
                    <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($codigo_cad) && $codigo_cad != null || $codigo_cad != ""){
                echo "value=\"{$codigo_cad}\"";
            }
            ?> />

                    <div class="form-group col-md-3">
                        <label for="campo2">Descrição</label>
                        <input type="text" class="form-control" name="descricao_cad" id="descricao_cad">
                    </div>
                    <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($descricao_cad) && $descricao_cad != null || $descricao_cad != ""){
                echo "value=\"{$descricao_cad}\"";
            }
            ?> />


                    <div class="form-group col-md-3">
                        <label for="cCodigo" class="form-label"> Forma do pagamento: <br /> </label>
                        <select class="form-control" name=" Tipo_cad" id="Tipo_cad">
                            <option value="Credito">Credito</option>
                            <option value="Debito">Debito</option>
                            <option value="Movimentacao">Movimentação</option>
                        </select>
                    </div>
                    <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($Tipo_cad) && $Tipo_cad != null || $Tipo_cad != ""){
                echo "value=\"{$Tipo_cad}\"";
            }
            ?> />

                </div>
                <!-- area de campos do form -->
                <hr />
                <div id="actions" class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="index.html" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer id="footer" class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="#">by Murilo and Elessandro</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>