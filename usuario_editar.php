<?php include "cabecalho_geral.php" ?>

<div class="ui mobile reversed equal width grid">
  <div class="column"></div>
  <div class="column">

    <div class="marginCad">
        <h1>
            <div class="ui horizontal divider">
                Editar Usuário  
            </div>
        </h1>
    </div>

    <form class="ui large form">
        <div class="ui stacked segment">

            <div class="field">
                <label>Primeiro nome</label>
                <input name="primeiro_nome" id="primeiro_nome" type="text" value="Usuário" required>
            </div>

            <div class="field">
                <label>Sobrenome</label>
                <input name="sobrenome" id="sobrenome" type="text" value="Amaral" required>
            </div>

            <div class="field">
                <label>CPF</label>
                <input name="cpf" id="cpf" type="text" value="000.000.000-00" required>
            </div>

            <div class="field">
                <label>Telefone</label>
                <input name="telefone" id="telefone" type="text" value="(**)****-***" required>
            </div>

            <div class="field">
                <label>E-mail</label>
                <input name="email" id="email" type="text" value="ivo_reigel@gmail.com" required>
            </div>

            <div class="field">
                <label>Senha</label>
                <input name="senha" id="senha" placeholder="Nova senha" type="password" required>
            </div>

            <button type="submit" class="ui fluid large teal submit button bg_secundario" name="enviar">Atualizar</button>
        </div>
    </form>
    
</div>
<div class="column"></div>
</div>
<br>
<br>
<br>



</body>
<?php include "footer.php"  ?>