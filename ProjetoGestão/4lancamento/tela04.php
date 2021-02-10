<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/_css_BS_3/bootstrap.css" rel="stylesheet">
    <link href="/_css_BS_3/style.css" rel="stylesheet">
    <script src="/_js_BS_4/jquery-3.4.1.slim.min.js"></script>
    <script src="/_js_BS_4/bootstrap.min.js"></script>
    <title>Lançamento</title>
    <style>
        fieldset {
            text-align: left;
        }
    </style>
    <script>
        String.prototype.reverse = function () {
            return this.split('').reverse().join('');
        };

        function mascaraMoeda(campo, evento) {
            var tecla = (!evento) ? window.event.keyCode : evento.which;
            var valor = campo.value.replace(/[^\d]+/gi, '').reverse();
            var resultado = "";
            var mascara = "##.###.###,##".reverse();
            for (var x = 0, y = 0; x < mascara.length && y < valor.length;) {
                if (mascara.charAt(x) != '#') {
                    resultado += mascara.charAt(x);
                    x++;
                } else {
                    resultado += valor.charAt(y);
                    y++;
                    x++;
                }
            }
            campo.value = resultado.reverse();
        }
    </script>
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
            <h3 class="page-header">Adicionar Lançamento</h3>
            <form action="index.html">


                <div class="form-group col-md-4">
                    <label for="cData" class="form-label">Data<br /> </label>
                    <input type="datetime-local" class="form-control" name="data_cad" id="data_cad">

                </div>
                <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($data_cad) && $data_cad != null || $data_cad != ""){
                echo "value=\"{$data_cad}\"";
            }
            ?> />

                <div class="form-group col-md-4">

                    <label for="cCodigo" class="form-label"> Grupo de conta: <br /> </label>
                    <select name="grupoC_cad" class="form-control" id="grupoC_cad">
                        <option value="Credito">Credito</option>
                        <option value="Debito">Debito</option>
                        <option value="Movimentacao">Movimentação</option>
                    </select>

                </div>
                <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($grupoC_cad) && $grupoC_cad != null || $grupoC_cad != ""){
                echo "value=\"{$grupoC_cad}\"";
            }
            ?> />

                <div class="form-group col-md-4">

                    <label for="cMotivo" class="form-label"> Motivo: <br /> </label>
                    <input type="text" class="form-control" name="motivo_cad" id="motivo_cad" size="40" maxlength="30"
                        placeholder="Motivo do gasto" />

                </div>
                <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($motivo_cad) && $motivo_cad != null || $motivo_cad != ""){
                echo "value=\"{$motivo_cad}\"";
            }
            ?> />

                <div class="form-group col-md-4">

                    <label for="cMovimento" class="form-label">Forma de movimento:</label>
                    <select name="movimento_cad" class="form-control" id="movimento_cad">
                        <option value="PC">PC</option>
                        <option value="CC">CC</option>
                        <option value="DI">DI</option>
                        <option value="DB">DB</option>
                    </select>
                </div>

                <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($movimento_cad) && $movimento_cad != null || $movimento_cad != ""){
                echo "value=\"{$movimento_cad}\"";
            }
            ?> />
                <div class="form-group col-md-4">
                    <label for="cFinanceiro" class="form-label">Financeiro:</label>
                    <input type="text" name="finaceiro_cad" class="form-control" id="finaceiro_cad" size="40"
                        maxlength="30" placeholder="?" />
                </div>

                <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($finaceiro_cad) && $finaceiro_cad != null || $finaceiro_cad != ""){
                echo "value=\"{$finaceiro_cad}\"";
            }
            ?> />


                <div class="form-group col-md-4">
                    <label for="dinheiro" class="form-label"> Valor R$:</label>
                    <input type="text" id="valor_cad" class="form-control" name="valor_cad"
                        onKeyUp="mascaraMoeda(this, event)" />
                </div>
                <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($valor_cad) && $valor_cad != null || $valor_cad != ""){
                echo "value=\"{$valor_cad}\"";
            }
            ?> />
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="index.html" class="btn btn-default">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>