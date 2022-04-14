    <h1>Listagem de veículos da loja</h1>
    <a 
        href="/index.php/veiculo/formnovo"
        class="btn btn-success"
    >
        Novo
    </a>
    <table class="table table-striped" >
        <thead>
            <tr>
                <th></th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Valor</th>
            </tr>
        </thead>
        <?php echo $tabela; ?>
    </table>