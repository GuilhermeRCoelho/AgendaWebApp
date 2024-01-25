<?php
 include_once("header.php");
 ?>
<!-- Inicio Formulário -->
</div>
    <div class="mb-3 row">
        <label for="inputcodigo" class="col-sm-2 col-form-label">Digite o Nome</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputcodigo">
    </div>
        <div class="col-sm-10">
        <button type="button" class="btn btn-primary">Buscar</button>
    </div>
</div>
<!-- Fim Formulário -->

<!-- Inicio Tabela -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Fone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>x</td>
    </tr>
  </tbody>
</table>
<!-- Fim Tabela -->
<?php
include_once("footer.php");
?>