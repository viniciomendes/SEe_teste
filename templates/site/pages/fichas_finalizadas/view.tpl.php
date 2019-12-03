<h3 class="mb-5">Detalhes da vistoria</h3>

<div class="row">
    <div class="col-12">
        <div class="row">
            <dl class="row table table-size" >
                <dt class="col-2">Escola: </dt>
                <dd class="col-10"><?php echo $data['ficha1']['escola']; ?></dd>
                <dt class="col-2">Data da vistoria: </dt>
                <dd class="col-10"><?php echo date("d-m-Y", strtotime($data['ficha1']['data_vistoria'])); ?></dd>
                <dt class="col-2">Código do INEP: </dt>
                <dd class="col-10"><?php echo $data['ficha1']['cod_inep']; ?></dd>
                <dt class="col-2">Município: </dt>
                <dd class="col-10"><?php echo $data['ficha1']['municipio']; ?></dd>
                <dt class="col-2">Endereço: </dt>
                <dd class="col-10"><?php echo "Rua: " . $data['ficha1']['endereco_rua_avenida_br'] . " - Bairro: " . $data['ficha1']['endereco_bairro'] . " - Número: " .  $data['ficha1']['endereco_numero']; ?></dd>
                <dt class="col-2">Internet: </dt>
                <dd class="col-10"><?php echo $data['ficha1']['internet']; ?></dd>
                <dt class="col-2">Observações adicionais:</dt>
                <dd class="col-10 mt-4"><?php echo $data['ficha1']['observacoes']; ?></dd>
            </dl>
        </div>
    </div>
</div>