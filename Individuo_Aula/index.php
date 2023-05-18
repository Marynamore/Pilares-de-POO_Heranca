<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once '/../classe_pessoa/pessoa_aulas.php';
        require_once '/../heranca/pessoa_aula/aluno.php';

        $p = new Individuo("Luna", "30", "Feminino");
        $aluno = new Aluno("Yan", "12","Masculino","20200778", "TI");

        $p->exibirDados();
        $aluno->exibirDados();

        $aluno->atualizaCurso("TA");
        $aluno->exibirDadosAluno();
    
    ?>
</body>
</html>
