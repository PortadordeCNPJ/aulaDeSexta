<h1>
    <center>REGISTRO</center>
</h1>
    <form class="form-container" method="post" action="?page=salvar">
        <div class="inf-container">
            <input type="hidden" name="acao" value="cadastrar">
            Nome: <input type="text" class="input-inf" name="nome" size="40" maxlength="45"
                placeholder="Digite aqui seu nome completo">
            Data de Nascimento: <input type="date" class="input-inf" name="data">
            Email: <input type="email" name="email" class="input-inf" size="50"
                placeholder="Digite aqui seu endereço de E-mail">
            Telefone: <input type="text" class="input-inf" name="telefone" placeholder="Ex: (45) 99999-9999">
        </div>
        <div class="inf-container">
            <div class="inf-cidade">
                Cidade:
                <select name="cidade">
                    <option name="cidade1">Cascavel</option>
                    <option name="cidade2">Corbélia</option>
                    <option name="ciadade3">Foz do Iguaçu</option>

                </select>
            </div>
        </div>
        <div class="inf-container">
            <div class="inf-select">
                Curso:
                <div class="">
                    <input type="checkbox" name="curso" value="adm"> Administração <br />
                    <input type="checkbox" name="curso" value="inform"> Informática <br />
                    <input type="checkbox" name="curso" value="ingles"> Inglês <br />
                </div>
            </div>
        </div>

        <div class="inf-container">
            Período: <br><br>
            <div class="inf-radio">
                <div class="radio-input">
                    <label for="matutino">Matutino</label>
                    <label for="vespertino">Vespertino</label>
                    <label for="noturno">Noturno</label>

                </div>
                <div class="radio-input">
                    <input type="radio" name="periodo" value="matutino" id="matutino" class="radio">
                    <input type="radio" name="periodo" value="vespertino" id="vespertino" class="radio">
                    <input type="radio" name="periodo" value="noturno" id="noturno" class="radio">
                </div>
            </div>
        </div>
        <div class="inf-container">
            Observação:
            <textarea name="descricao" cols="60" rows="10"></textarea>
        </div>

        <div class="inf-container">
            <div class="inf-button">
                <input type="submit" name="enviar" value="gravar" class="btn">
                <input type="reset" name="apagar" value="deletar" class="btn">
            </div>
        </div>


    </form>