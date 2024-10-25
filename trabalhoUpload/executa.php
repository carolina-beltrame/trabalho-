<?php
    $avaliacao= $_POST["av"];
    $cor = $_POST["cor"];
    $comentario= $_POST["comentario"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $fone = $_POST["fone"];
    
    if(isset($_POST["novidades"])){
        $aceitou = true;
    }
    else{
        $aceitou = false;
    }
    

    echo "Sua avaliação é $avaliacao, sua cor é $cor, seu comentário é $comentario, seu nome é $nome, seu e-mail é $email e seu fone é $fone";
    
    $email = explode('@', $email);
    echo "<br>Seu provedor de email é: $email[1]<br>"; // RETORNO endereço do email 

    if ($aceitou){
        echo "<br>Enviaremos para você semanalmente todas as novidades";
    }
        
    

    if (stristr($comentario, 'Gostei') || stristr($comentario, 'Feliz') || stristr($comentario, 'legal') || stristr($comentario, 'bom') || stristr($comentario, 'interessante')){
        echo "<br>Ficamos felizes que você deixou observações positivas sobre nosso site";
    }
       

    if($cor == "preto"){
        echo "<br> ";
        echo "<script>
                alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e precisando de ajuda, acesse o site : www. https://cvv.org.br/');
            </script>";
    }

?>