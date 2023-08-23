<?php
    $sql_clientes = "SELECT * FROM tb_clientes WHERE id=". $_REQUEST["id"];

    $sql_clientes = "SELECT clientes.*,cidades.nome AS nome_cidade, cursos.nome AS nome_curso FROM tb_clientes AS clientes INNER JOIN tb_cidades AS cidades ON clientes.id_cidade = cidades.id INNER JOIN tb_cursos AS cursos ON clientes.id_curso = cursos.id;";
    
    $res = $conn->query($sql_clientes);

    $row = $res->fetch_object();
    ?>

 <h1>
     <center>REGISTRO</center>
 </h1>
 <form class="form-container" method="post" action="?page=salvar">
     <div class="inf-container">
         <input type="hidden" name="acao" value="editar">
         <input type="hidden" value="<?php echo $row->id; ?>">
         Nome: <input type="text" class="input-inf" name="nome" size="40" maxlength="45" placeholder="Digite aqui seu nome completo" id="nome" value="<?php echo $row->nome; ?>">
         Data de Nascimento: <input type="date" class="input-inf" name="data_nasc" id="data_nasc" value="<?php echo $row->data_nasc; ?>">
         Email: <input type="email" name="email" class="input-inf" size="50" placeholder="Digite aqui seu endereço de E-mail" id="email" value="<?php echo $row->email; ?>">
         Telefone: <input type="text" class="input-inf" name="telefone" placeholder="Ex: (45) 99999-9999" id="telefone" value="<?php echo $row->telefone; ?>">
     </div>
     <div class="inf-container">
         <div class="inf-cidade">
             Cidade:
             <select name="cidade">
             <option value="<?php echo $row->id_cidade?>"><?php echo $row->id_cidade?></option>
             </select>
         </div>
     </div>
     <div class="inf-container">
         <div class="inf-select">
             Curso:
             <div class="">

                 
             </div>
         </div>
     </div>

     <div class="inf-container">
         Período: <br><br>
         <div class="inf-radio">
             <div class="radio-input">
          
             </div>
         </div>
     </div>
     <div class="inf-container">
         Observação:
         
         <textarea name="descricao" cols="60" rows="10" id="descricao"></textarea>
     </div>

     <div class="inf-container">
         <div class="inf-button">
             <input type="submit" name="enviar" value="gravar" class="btn-form">
             <input type="reset" name="apagar" value="deletar" class="btn-form">
         </div>
     </div>


 </form>