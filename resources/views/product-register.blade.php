<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro de Estoque</title>
</head>

<body>
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Cadastro de Estoque</h1>
        </div>
        <form action="/cadastrar-produto" method="POST">
            @csrf
            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <form id="register-form" role="form">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_product_name">Produto</label>
                                                    <input id="form_product_name" type="text" name="name"
                                                        class="form-control" placeholder="Informe o produto"
                                                        required="required"
                                                        data-error="Campo com preenchimento obrigatório!">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_product_price">Valor</label>
                                                    <input id="form_product_price" type="text" name="price"
                                                        class="form-control" placeholder="R$" required="required"
                                                        data-error="Campo com preenchimento obrigatório!">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_qt_stock">Quantidade em estoque</label>
                                                    <input id="form_qt_stock" type="text" name="stock"
                                                        class="form-control" required="required"
                                                        data-error="Campo com preenchimento obrigatório!">
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Categoria</label>
                                                <select id="form_need" name="need" class="form-control"
                                                    required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Selecione uma categoria--</option>
                                                    <option>Eletrodoméstico</option>
                                                    <option>Eletrônico</option>
                                                    <option>Acessório</option>
                                                    <option>Outros</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_product_description">Informações adicionais</label>
                                                    <textarea id="form_product_description" name="description"
                                                        class="form-control"
                                                        placeholder="Adicione alguma descrição do Produto aqui..."
                                                        rows="4" required="required">
                                                </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" class="btn btn-success btn-send  pt-2 btn-block"
                                                    value="Cadastrar Produto">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>