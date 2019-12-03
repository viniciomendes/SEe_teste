<h3 class="mt-5 pt-5 text-center">Lista de unidades cadastradas no sistema</h3>
<hr class="sublinhado_enfeite">
<div class="row">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="text-center">Unidade</th>
          <th class="text-center">Código da unidade</th>
          <th class="text-center">Município</th>
          <th class="text-center">Detalhes</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['unidades'] as $unidade) : ?>
          <tr>
            <td class="text-center"><?php echo $unidade['nome_unidade']; ?></td>
            <td class="text-center"><?php echo $unidade['codigo_unidade']; ?></td>
            <td class="text-center"><?php if (!empty($unidade['municipio_urbana'])) {
              echo $unidade['municipio_urbana'];
            } elseif (!empty($unidade['municipio_rural'])) {
              echo $unidade['municipio_rural'];
            } elseif (!empty($unidade['municipio_indigena'])) {
              echo $unidade['municipio_indigena'];
            }; ?></td>
            <td class="text-center"><a class="btn btn-sm btn-outline-success" href="/ficha/ficha_unidade/finalizadas/<?php echo $unidade['idunidades']; ?>">Ver</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>