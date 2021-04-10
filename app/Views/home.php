<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-3">Buscador de CEP</h1>
            </div>
            <div class="col-md-12 shadow-lg p-3 mb-5 bg-white rounded">
                <form method="post">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <label for="">Digite o cep:</label>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <input type="text" class="form-control cep" name="cep" placeholder="Ex: 12570000" required pattern="[\d]{8}">
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <input type="submit" value="Buscar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php if (isset($cep) && !empty($cep)) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">CEP</th>
                        <th scope="col">Rua</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><?= $cep->cep ?></th>
                        <th><?= $cep->logradouro ?></th>
                        <th><?= $cep->bairro ?></th>
                        <th><?= $cep->localidade ?></th>
                        <th><?= $cep->uf ?></th>
                    </tr>                    
                </tbody>
            </table>

        <?php endif ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

    <script src="<?= base_url('assets/js/jquery.mask.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/mascara.js') ?>"></script>
</body>

</html>