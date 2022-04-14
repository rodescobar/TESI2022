<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de veículo</h5>

                    <!-- Horizontal Form -->
                    <form method="POST" action="/index.php/veiculo/salvarnovo">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Modelo</label>
                            <div class="col-sm-10">
                                <input type="text" name="modelo" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Marca</label>
                            <div class="col-sm-10">
                                <input type="text" name="marca" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Cor</label>
                            <div class="col-sm-10">
                                <input type="text" name="cor" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Ano</label>
                            <div class="col-sm-10">
                                <input type="text" name="ano" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Valor</label>
                            <div class="col-sm-10">
                                <input type="text" name="valor" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Imagem</label>
                            <div class="col-sm-10">
                                <input type="text" name="imagem" class="form-control" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a class="btn btn-secondary" href="/index.php/veiculo">Volta/Cancelar</a>
                        </div>
                    </form><!-- End Horizontal Form -->

                </div>
            </div>

        </div>

    </div>
</section>
