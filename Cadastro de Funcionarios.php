<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Cadastro de Funcionarios</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://fonts.google.com/specimen/Roboto" rel="stylesheet">
    <link rel="stylesheet" href="cadastro.css">
  </head>
  <body>
    <center>
    <form name="formulario" method="post" action='relatorio.php'>
    <a href="http://portal.estacio.br/" target="resource window"><img src="propaganda.png" width=250px heidth=250px></a><h1 class="fonte">Prova Prática de Tec Web 2</h1>
      <div>
      <label class="fonte">Nome: </label><input type="text" name="nome" class="fonte" placeholder="Nome do Funcionario" required=true/>
      <p>
        <label class="fonte">Idade:</label> <input type="number" class="fonte" name="idade" size=2  placeholder="Idade do Funcionario" required=true/>
        <p>
          <label class="fonte">Tem Filhos?</label> <input type="radio" name="pergunta" value="Não" class="remove" required=true/><label class="fonte">Não</label>
          <input type="radio" name="pergunta" value="Sim" class="add" required=true/><label class="fonte">Sim</label>
        </p>
    </div>

    <div id="adicionar" >

    </div>
        <p>
          <input type="submit" class="button fonte" value="Enviar"/>
        </p>
      </p>
      <footer>
<h4 class=fonte>Todos os Direitos Reservados - 2019</h4>
</footer>
      </center>
    </form>
    <script>
    $( document ).ready(function() {
        var cont = 0;
            $("form").on("click", ".add", function() {
                cont++;
                $("#adicionar").append('<blockquote id="campo'+cont+'" class="camposfilhos"><label class="fonte">Nome:</label> <input type="text" id="filhos" name="filhos[]" class="fonte" placeholder="Nome do Filho" required=true>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" value="Adicionar" class="add button fonte"><p><label class="fonte">Idade:</label> <input type="number" name="idadef[]" class="fonte" placeholder="Idade do Filho" required=true>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" value="Excluir" class="apagar button fonte" id='+cont+'></blockquote><br>');
            });

            $("form").on("click", ".apagar", function() {
              var button_id = $(this).attr("id");
               $('#campo'+button_id+'').remove();
            });

            $("form").on("click", ".remove", function() {
                $(".camposfilhos").remove();
            });
       
    });    
    </script>

  </body>
</html>
