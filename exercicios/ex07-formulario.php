<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Cadastrar Produto</h3>
        </div>
        <div class="card-body">
            <form action="exercicio07-processamento.php" method="POST">
                
                <!-- Nome do produto -->
                <div class="mb-3">
                    <label for="produto" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="produto" name="produto" required>
                </div>

                <!-- Fabricante -->
                <div class="mb-3">
                    <label for="fabricante" class="form-label">Fabricante</label>
                    <select class="form-select" id="fabricante" name="fabricante" required>
                        <option value="" selected disabled>Selecione um fabricante</option>
                        <option value="Dell">Dell</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Apple">Apple</option>
                        <option value="Logitech">Logitech</option>
                    </select>
                </div>

                <!-- Preço -->
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço (R$)</label>
                    <input type="number" class="form-control" id="preco" name="preco" min="100" max="10000" step="0.01" required>
                </div>

                <!-- Quantidade -->
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" min="0" max="1000" step="1" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Cadastrar Produto</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>