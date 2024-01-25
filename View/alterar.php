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
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    extract($_REQUEST,EXTR_OVERWRITE);

    $nomeContato = isset($nomeContato)?$nomeContato : "";
    if ($nomeContato);{

    $dados = alterarContato($conexao, $idContato, $nomeContato, $foneContato);

    foreach ($dados as $contatos) :
    ?>

    <tr>
      <th scope = "row"><?php echo($contatos["idContato"]);?> </th>
      <td> <?= $contatos["nomeContato"]?> </td>
      <td> <?= $contatos["foneContato"]?> </td>
      <td> <?= $contatos["idContato"]?> </td>
      <td>
    </tr>
    <a class = "btn btn-primary" href="formAlterarCliente.php?codigo=<?=$contatos["idContato"]?>"> Alterar

    </a>
    </td>
    </tr>
    <?php
      endforeach;
    }

    ?>
  </tbody>
</table>
<!-- Fim Tabela -->
<?php
include_once("footer.php");
?>