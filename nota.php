<?php
$aluno = 'Matheus';
$nota1 = 8;
$nota2 = 8;
$nota3 = 6;
$nota4 = 4;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($media >= 7)
{
    echo $media . ' Aprovado (Fez mais que sua obrigação) ';
}
else if ($media <7 && $media >=5) 
{
   echo $aluno . ', você está de recuperação ' . $media;
}    
else
{
    echo $media . ' Reprovado (Você é burro) ';
}
