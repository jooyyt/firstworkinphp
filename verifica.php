<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cidadeeestado = $_POST["cidade e estado"];
        $comentarios = $_POST["comentarios"];

        if (empty ($nome) OR strstr ($nome, ' ') ==FALSE)
        {echo "Favor digitar seu nome corretamente"; $erro=1;}

        if (strlen ($email) <8 || strstr ($email, '@')==FALSE)
        {echo "Favor digitar seu email corretamente"; $erro=1;}

        if (empty ($telefone))
        {echo "Favor digitar seu telefone corretamente"; $erro=1;}      

        if (empty ($cidadeeestado))
        {echo "Favor digitar sua cidade e estado corretamente"; $erro=1;}       

        if (empty ($comentarios))
        {echo "Favor digitar seu comentario corretamente"; $erro=1;}    
     
        if ($erro==0)
        {echo "Sua mensagem foi enviada com sucesso";}
        include 'insere.inc';

        ?>

    </body>
</html> 