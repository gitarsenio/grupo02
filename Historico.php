<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Histórico</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<style>
  v {
    color: #498afb;
  }

  body {
    background-color: #fffafa;
  }

  .spacing {
    margin-left: 10px;
    margin-top: 50px;
  }

  .tr {
    background-color: #a2a2a2;
  }

  .qtd {
    margin-left: 10px;
  }
</style>

<body>
  <nav class="navbar fixed-top bt" style="background-color: #a2a2a2;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Meu Histórico</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Histórico</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="marcar.php">Marcar Consulta</a>
            </li>
            <li class="nav-item">
              <?php
              // Verifica se o usuário está logado e exibe o botão de logout
              print "<a href='logout_histo.php' class='btn btn-danger'>Sair</a>";
              ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav><br><br>

  <main>
    <?php
    include('config.php');

    // Verifica se o formulário de login foi submetido
    if (isset($_POST['identidade']) && isset($_POST['senha'])) {
      // Obtém os dados do formulário
      $identidade = $_POST['identidade'];
      $senha = $_POST['senha'];

      // Consulta SQL para verificar se o usuário existe e obter suas informações, incluindo a especialidade
      $sql = "SELECT pac.idpaciente, esp.nome_esp, pac.data_consulta 
              FROM pacientes AS pac
              INNER JOIN especialidades AS esp ON pac.especialidades_id = esp.id
              WHERE pac.identidade = '$identidade'";

      $result = $conn->query($sql);
      $qtd = $result->num_rows;

      if ($qtd > 0) {
        print "<br>";
        print "<p class='qtd'>Encontrou <b>$qtd</b> resultado(s).</p>";
        print "<table class='table table-bordered table-striped table-hover spacing'>";
        print "<tr class='tr'>";
        print "<th>Consulta de</th>";
        print "<th>Data da Consulta</th>";
        print "<th>Remarcar</th>";
        print "<th>Cancelar</th>";
        print "</tr>";

        // Itera sobre cada resultado encontrado
        while ($row = $result->fetch_object()) {
          print "<tr>";
          print "<td>" . $row->nome_esp . "</td>";
          print "<td>" . $row->data_consulta . "</td>";
          print "<td>
                  <form action='?page=editar_remarcar' method='post'>
                    <input type='hidden' name='idpaciente' value='" . $row->idpaciente . "'>
                    <button type='submit' class='btn btn-primary'>Remarcar</button>
                  </form>
                 </td>";
          print "<td>
                  <form action='?page=remarcar_consulta' method='post'>
                    <input type='hidden' name='acao' value='excluir'>
                    <input type='hidden' name='idpaciente' value='" . $row->idpaciente . "'>
                    <button type='submit' class='btn btn-danger'>Cancelar</button>
                  </form>
                 </td>";
          print "</tr>";
        }

        print "</table>";
      }
    } 

    // Inclui o conteúdo dependendo do parâmetro de página recebido
    switch (@$_REQUEST["page"]) {
      case 'remarcar_consulta':
        include("remarcar-consulta.php");
        break;
      case 'editar_remarcar':
        include("editar_remarcar.php");
        break;
      case 'listar_remarcar':
        include("listar-remarcar.php");
        break;
      case 'remarcar':
        include("remarcar.php");
        break;
      case 'listar_historico':
        include("Historico.php");
        break;
      case 'historico':
        include('historico-paciente.php');
        break;
    }
    ?>
  </main>
</body>

</html>
