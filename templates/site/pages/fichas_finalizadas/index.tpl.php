<h3 class="mb-5">Lista de escolas com fichas finalizadas</h3>

<div class="row">
  <div class="col-12">
    <table class="table table-hover table-size">
      <thead>
        <tr>
          <th>Escola</th>
          <th>Município</th>
          <th>Data da vistoria</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['fichas'] as $ficha) : ?>
          <tr>
            <td><?php echo $ficha['escola']; ?></td>
            <td><?php echo $ficha['municipio']; ?></td>
            <td><?php echo date("d-m-Y", strtotime($ficha['data_vistoria'])); ?></td>
            <td><a class="btn btn-sm btn-primary" href="/ficha/fichas_finalizadas/<?php echo $ficha['id']; ?>">Ver</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>