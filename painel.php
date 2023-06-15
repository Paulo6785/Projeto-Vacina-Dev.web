<?php
include_once "conexao.php";

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['genero'];
    $Ass = $_POST['ass'];
    $Cartao_SUS = $_POST['number'];

    $sql = mysqli_query($mysql, "SELECT * FROM vacinas WHERE Cartão_do_SUS = '$Cartao_SUS'");

    if ($sql->num_rows > 0) {
        echo "Já existe este usuário";
    } else {
        $sql2 = mysqli_query($mysql, "INSERT INTO vacinas (nome, idade, genero, ass, Cartão_do_SUS) VALUES ('$nome', '$idade', '$sexo', '$Ass', '$Cartao_SUS')");
        echo "Cadastro realizado com sucesso";
    }
    mysqli_close($mysql);
    exit; // Encerra a execução do script após processar o formulário
}
?>

<!DOCTYPE html>
<html lang="Pt-Br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../projetoVacina/painel.css">
</head>
<body>
  <header>
    <nav>
      <a class="logo" href="">Cadastro</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <!--            <li><a href="cadastro_vacinas.php">Cadastra Vacina</a></li>-->
        <li><a href="">Sobre</a></li>
        <!--            <li><a href="">Contato</a></li>-->
        <li><a href="cadastro.html">Cadastre-se</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section>
      <form method="post" action="painel.php" id="Form">
        <div class="grid-container">
          <div class="column" id="Vacina-contra-gripe">
            <p id="tituloVac1" class="tituloVac" onclick="expandirConteudoVacina(1)">Vacina contra gripe</p>
            <div id="infoVac-1" class="infoVac">
              <h2>cadastro</h2>
              <label for="number" class="label_input">Cartão Do SUS</label>
              <input type="number" name="number" id="number" class="inputUser" required >
              <br>
              <label class="vacina">Nome</label>
              <input type="text" class="nome" name="nome" placeholder="None">
              <br>
              <label class="vacina">Idade</label>
              <input type="date" class="idade" name="Idade" placeholder="Idade">
              <br>
              <label>Sexo</label>
              <br>
              <input type="radio" id="feminino" name="genero" value="Feminino">
              <label>Feminino</label>
              <input type="radio" id="masculino" name="genero" value="masculino">
              <label >Masculino</label>
              <br>
              <label class="vacina">Telefone (Com DDD)</label>
              <input type="number" name="telefone" placeholder="Telefone">
              <br>
              <label class="vacina">Assinatura</label>
              <input class="Ass" name="ass" placeholder="Assinatura">
              <br>
              <input type="submit" id="enviarSMS" value="Enviar" onclick="expandirConteudoVacina(1)">
              <!-- ________ter q fazer uma função nova pra aplicar o expanded dnv E enviar o sms________ -->
            </div>
          </div>

          <div class="column" id="Vacina-contra-tuberculose">
            <p id="tituloVac2" class="tituloVac" onclick="expandirConteudoVacina(2)">Vacina contra tuberculose</p>
            <div id="infoVac-2" class="infoVac">
              <h2>cadastro</h2>
              <label for="number" class="label_input">Cartão Do SUS</label>
              <input type="number" name="number" id="number" class="inputUser" required >
              <br>
              <label class="vacina">Nome</label>
              <input type="text" class="nome" name="nome" placeholder="None">
              <br>
              <label class="vacina">Idade</label>
              <input type="date" class="idade" name="Idade" placeholder="Idade">
              <br>
              <label>Sexo</label>
              <br>
              <input type="radio" id="feminino" name="genero" value="Feminino">
              <label>Feminino</label>
              <input type="radio" id="masculino" name="genero" value="masculino">
              <label >Masculino</label>
              <br>
              <label class="vacina">Telefone (Com DDD)</label>
              <input type="number" name="telefone" placeholder="Telefone">
              <br>
              <label class="vacina">Assinatura</label>
              <input class="Ass" name="nome" placeholder="Assinatura">
              <br>
              <input type="submit" id="enviarSMS" value="Enviar" onclick="expandirConteudoVacina(2)">
            </div>
          </div>

          <div class="column" id="Hepatite-A">
            <p id="tituloVac3" class="tituloVac" onclick="expandirConteudoVacina(3)">Hepatite A</p>
            <div id="infoVac-3" class="infoVac">
              <h2>cadastro</h2>
              <label for="number" class="label_input">Cartão Do SUS</label>
              <input type="number" name="number" id="number" class="inputUser" required >
              <br>
              <label class="vacina">Nome</label>
              <input type="text" class="nome" name="nome" placeholder="None">
              <br>
              <label class="vacina">Idade</label>
              <input type="date" class="idade" name="Idade" placeholder="Idade">
              <br>
              <label>Sexo</label>
              <br>
              <input type="radio" id="feminino" name="genero" value="Feminino">
              <label>Feminino</label>
              <input type="radio" id="masculino" name="genero" value="masculino">
              <label >Masculino</label>
              <br>
              <label class="vacina">Telefone (Com DDD)</label>
              <input type="number" name="telefone" placeholder="Telefone">
              <br>
              <label class="vacina">Assinatura</label>
              <input class="Ass" name="nome" placeholder="Assinatura">
              <br>
              <input type="submit" id="enviarSMS" value="Enviar" onclick="expandirConteudoVacina(3)">
            </div>
          </div>

          <div class="column" id="Hepatite-B">
            <p id="tituloVac4" class="tituloVac" onclick="expandirConteudoVacina(4)">Hepatite B</p>
            <div id="infoVac-4" class="infoVac">
              <h2>cadastro</h2>
              <label for="number" class="label_input">Cartão Do SUS</label>
              <input type="number" name="number" id="number" class="inputUser" required >
              <br>
              <label class="vacina">Nome</label>
              <input type="text" class="nome" name="nome" placeholder="None">
              <br>
              <label class="vacina">Idade</label>
              <input type="date" class="idade" name="Idade" placeholder="Idade">
              <br>
              <label>Sexo</label>
              <br>
              <input type="radio" id="feminino" name="genero" value="Feminino">
              <label>Feminino</label>
              <input type="radio" id="masculino" name="genero" value="masculino">
              <label >Masculino</label>
              <br>
              <label class="vacina">Telefone (Com DDD)</label>
              <input type="number" name="telefone" placeholder="Telefone">
              <br>
              <label class="vacina">Assinatura</label>
              <input class="Ass" name="nome" placeholder="Assinatura">
              <br>
              <input type="submit" id="enviarSMS" value="Enviar" onclick="expandirConteudoVacina(4)">
            </div>
          </div>

          <div class="column" id="Penta">
            <p id="tituloVac5" class="tituloVac" onclick="expandirConteudoVacina(5)">Penta (DTP/Hib/Hep. B)</p>
            <div id="infoVac-5" class="infoVac">
              <h2>cadastro</h2>
              <label for="number" class="label_input">Cartão Do SUS</label>
              <input type="number" name="number" id="number" class="inputUser" required >
              <br>
              <label class="vacina">Nome</label>
              <input type="text" class="nome" name="nome" placeholder="None">
              <br>
              <label class="vacina">Idade</label>
              <input type="date" class="idade" name="Idade" placeholder="Idade">
              <br>
              <label>Sexo</label>
              <br>
              <input type="radio" id="feminino" name="genero" value="Feminino">
              <label>Feminino</label>
              <input type="radio" id="masculino" name="genero" value="masculino">
              <label >Masculino</label>
              <br>
              <label class="vacina">Telefone (Com DDD)</label>
              <input type="number" name="telefone" placeholder="Telefone">
              <br>
              <label class="vacina">Assinatura</label>
              <input class="Ass" name="nome" placeholder="Assinatura">
              <br>
              <input type="submit" id="enviarSMS" value="Enviar" onclick="expandirConteudoVacina(5)">
            </div>
          </div>

          <div class="column" id="Pneumococica">
            <p id="tituloVac6" class="tituloVac" onclick="expandirConteudoVacina(6)">Pneumocócica 10 valente</p>
            <div id="infoVac-6" class="infoVac">
              <h2>cadastro</h2>
              <label for="number" class="label_input">Cartão Do SUS</label>
              <input type="number" name="number" id="number" class="inputUser" required >
              <br>
              <label class="vacina">Nome</label>
              <input type="text" class="nome" name="nome" placeholder="None">
              <br>
              <label class="vacina">Idade</label>
              <input type="date" class="idade" name="Idade" placeholder="Idade">
              <br>
              <label>Sexo</label>
              <br>
              <input type="radio" id="feminino" name="genero" value="Feminino">
              <label>Feminino</label>
              <input type="radio" id="masculino" name="genero" value="masculino">
              <label >Masculino</label>
              <br>
              <label class="vacina">Telefone (Com DDD)</label>
              <input type="number" name="telefone" placeholder="Telefone">
              <br>
              <label class="vacina">Assinatura</label>
              <input class="Ass" name="nome" placeholder="Assinatura">
              <br>
              <input type="submit" id="enviarSMS" value="Enviar" onclick="expandirConteudoVacina(6)">
            </div>
          </div>

        </div>
      </form>
      <script src="../projetoVacina/painel.js"></script>
    </section>
  </main>
  <footer></footer>
</body>
</html>
