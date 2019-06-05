<!DOCTYPE html>
<html>
    <body>
        <form action="imprimir.php" method="POST">
            Nome: <input type="text" name="nome"><br>
            E-mail: <input type="text" name="email"><br>
            Como você ficou sabendo desse site?<br>
            <input type="checkbox" name="fonte" value="TV">Televisão
            <input type="checkbox" name="fonte" value="radio">Radio
            <input type="checkbox" name="fonte" value="internet">Internet<br>
            Sexo:<br>
            <input type="radio" name="sexo" value="feminino">Feminino
            <input type="radio" name="sexo" value="masculino">Masculino
            <input type="radio" name="sexo" value="outros">Outros<br>
            Dormiu bem ontem?<br>
            <select name="sono">
                <option value="1">1</option>
                <option value="2">2</option> 
                <option value="3">3</option> 
                <option value="4">4</option> 
                <option value="5">5</option> 
                <option value="6">6</option> 
                <option value="7">7</option> 
                <option value="8">8</option> 
                <option value="9">9</option> 
                <option value="10">10</option>             
            </select><br>
            <input type="checkbox" name="termosECondicoes" value="aceito">
            Aceito os "Termos e Condições"<br>
            <input type="submit">
        </form>
    </body>
</html>