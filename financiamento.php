<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style4.css">
    <title>Simulador financiamento</title>
</head>
    <body>
        <div class="header">
            <h1>Simulador de financiamento</h1>
            <p>Preencha os campos e veja a simulação de financiamento</p>
        </div>
        <div class="topnav">
            <a href="index.html">Home</a>
            <a href="simulador8.php">Sim.Sistema</a>
        </div>
        <div class="container">
            <div class="box">
                    <form>
                        <div class="form-group">
                            <label for="">Valor Total</label>
                            <input type="text" class="form-control" id="textoValor" aria-describedby="emailHelp"
                                placeholder="valor">
                        </div>
                        <div class="form-group">
                            <label for="">Valor entrada</label>
                            <input type="text" class="form-control" id="textoEntrada" aria-describedby="entradaHelp"
                                placeholder="valor entrada">
                        </div>
                        <div class="form-group">
                            <label for="">Taxa juros (%)</label>
                            <input type="text" class="form-control" id="textoTaxaJuros" aria-describedby="emailHelp"
                                placeholder="taxa juros (%)">
                        </div>
                        <div class="form-group">
                            <label for="">Prazo (em meses)</label>
                            <input type="text" class="form-control" id="textoPrazo" aria-describedby="emailHelp"
                                placeholder="prazo (em meses)">
                        </div>
                    </form>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Deseja carencia?</label>
                </div>
                <select class="form-select" aria-label="Default select example" id="listaSuspensa" hidden>
                    <option value="2">Dois meses </option>
                    <option value="3">Três meses </option>
                    <option value="4">Quatro meses</option>
                </select>
                <button type="button" class="btn btn-outline-primary" id="botaoCalcular">Calcular</button>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Número</th>
                            <th scope="col">Valor Parcela</th>
                            <th scope="col">Valor amortizado</th>
                            <th scope="col">Juros</th>
                            <th scope="col">Valor devendo</th>
                        </tr>
                    </thead>
                    <tbody id="corpoTabela">
                    </tbody>
                </table>
            </div>
        </div>
        <script type="module" src="js/index.js"></script>
    </body>
</html>