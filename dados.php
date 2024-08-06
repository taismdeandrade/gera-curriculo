<?php
     include "./utils/header.php";
     
    //Pega os valores e testa, caso seja nulo preenche com espaço em branco
    $nome = isset($_POST['nome'])? $_POST['nome'] : " ";
    $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : " ";
    $aniversario = isset($_POST['aniversario']) ? $_POST['aniversario'] : " ";

    $mail = isset($_POST['mail']) ? $_POST['mail'] : " ";
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : " ";

    $nivel = isset($_POST['nivel']) ? $_POST['nivel'] : " ";
    $curso = isset($_POST['curso']) ? $_POST['curso'] : " ";
    $instituicao = isset($_POST['instituicao']) ? $_POST['instituicao'] : " ";
    $finalizado = isset($_POST['finalizado']) ? $_POST['finalizado'] : " ";

    $cargo = isset($_POST['cargo']) ? $_POST['cargo'] : " ";
    $salario = isset($_POST['salario']) ? $_POST['salario'] : " ";
    $inicio = isset($_POST['inicio']) ? $_POST['inicio'] : " ";
    $atual = isset($_POST['atual']) ? $_POST['atual'] : " ";
    $fim =  isset($_POST['fim']) ? $_POST['fim'] : " ";
    $atividades = isset($_POST['atividades']) ? $_POST['atividades'] : " ";
        
    $resume = isset($_POST['resume']) ? $_POST['resume'] : " ";;

    //Imprime na tela os dados
    echo "<h2> $nome $sobrenome</h2>";
    //Formata a data para d/m/Y
    $aniver = $aniversario;
    $aniver = date("d/m/Y");   
    echo "Data Nasc.: $aniver";
    echo "<br>";
    echo "E-mail: $mail";
    echo "<br>";
    echo "Telefone: $telefone";
    echo "<br>";
    echo "<hr>";
    echo "<strong>Formação </strong><br>";
    echo "Nivel: $nivel <br>";
    echo "Curso: $curso <br>";
    echo "instituicao de Ensino: $instituicao <br>";
    $finalizou = $finalizado;
    $finalizou = date("d/m/Y");    
    echo "finalizado em: $finalizou <br>";
    echo "<hr>";
    echo "<strong>Resumo </strong><br>", $resume;
    echo "<br>";
    echo "<hr>";
    echo "<strong>Experiências Profissionais</strong><br>";

    //inicializa a variavel
    $total = 0;
    //Caso cargo esteja preenchido, ele é um array e pode ser usado no count()
    if (is_array($cargo)){
        $total = count($cargo);
    }
    
    //Percorre os valores dentro dos arrays e imprime
    for ($i = 0; $i < $total; $i++) {
        echo "<br>";
        echo "<strong>Cargo: </strong>",$cargo[$i];
        echo "<br>";
        echo "Salário: R$", $salario[$i];
        echo "<br>";
        //Formatando a data
        $inicial = $inicio[$i];
        $inicial = date("d/m/Y");
        echo "Data de inicio: ", $inicial;
        echo "<br>";
        //Teste, caso seja o emprego atual, não há data final
        if($atual[$i] == "Sim"){
            echo "Emprego atual";
        }
        else{
            //Formata a data
            $saida = $fim[$i];
            $saida = date("d/m/Y");
            //Exibe a data de saida
            echo "Data de saída: ", $saida;
        }
        echo "<br>";
        echo "<strong>Atividades desenvolvidas</strong><br>";
        echo $atividades[$i];
        echo "<hr>";
        echo "<br>";
    }
    

    include "./utils/footer.php";
?>
<button id = "voltar"><a href="index.php"> Voltar</a></button>

<button id = "imprime">Imprimir</button>





