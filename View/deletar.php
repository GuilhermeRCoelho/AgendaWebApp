<?php
 include_once("header.php");
 include_once("../model/conexao.php");
 include_once("../model/bancoContato.php");
 ?>
<!-- Inicio Formulário -->
</div>
    <div class = "mb-3 row">
      <form class = "row g-3" method = "Post" action = "#">
        <label for = "inputcodigo" class = "col-sm-2 col-form-label">Digite o Nome</label>
        <div class = "col-sm-10">
      <input type = "text" class = "form-control" id = "inputcodigo" name = "nomeContato">
    </div>
        <div class = "col-sm-10">
        <button type = "submit" class = "btn btn-primary">Buscar</button>
    </div>
</div>
</form>
<!-- Fim Formulário -->

<!-- Inicio Tabela -->
<table class = "table">
  <thead>
    <tr>
      <th scope = "col">Código</th>
      <th scope = "col">Nome</th>
      <th scope = "col">Fone</th>
      <th scope = "col">Deletar</th>
    </tr>
  </thead>
  <tbody>

    <?php
    extract($_REQUEST,EXTR_OVERWRITE);

    $nomeContato = isset($nomeContato)?$nomeContato : "";
    if ($nomeContato);{

    $dados = buscarContatoNome($conexao, $nomeContato);

    foreach ($dados as $contatos) :
    ?>

    <tr>
      <th scope = "row"><?php echo($contatos["idContato"]);?> </th>
      <td> <?= $contatos["nomeContato"]?> </td>
      <td> <?= $contatos["foneContato"]?> </td>
      <td>
    </tr>
    <a class = "btn btn-primary" href="formAlterarCliente.php?codigo=<?=$contatos["idContato"]?>">
  
    Deletar

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
    </div>
<?php
include_once("footer.php");
?>