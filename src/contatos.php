<?php
$dados = [
  'cliente' => [
 'Nome:' => 'Luiz',
 'Nascimento: ' => "12/02/1989",
  ],
 'documentos' => [
 'CPF' => '123.456.789-30',
 'ID' => '1',
 'CNG' => '12345678910',
 'sexo' => 'Masculino'
 ],
 'endereco' =>
[
     'logradouro' => 'rua araujo dias',
     'bairro' => 'cambota',
     'cidade' => 'valença',
     'UF' => 'RJ',
     'CEP' => '27600489',
     'completmento' => 'casa 1'
],
 'filiação' => [
 'NomePai: ' => 'José',
 'NomeMãe: ' => 'Maria'
 ],
 'contato' => [
 'telefone: ' => '24992892207',
 'fixo: '=> '24992892207',
 'email: ' => 'luizadoropinto@gmail.com'
 ]
 ];


 foreach($dados['cliente'] as $cliente => $value){
    echo $cliente . $value . '<br>';
    };
    foreach($dados['documentos'] as $documentos => $value){
        echo $documentos . $value . '<br>';
        };
        foreach($dados['endereco'] as $endereco => $value){
            echo $endereco . $value . '<br>';
            };
     foreach($dados['filiação'] as $filiação => $value){
        echo $filiação . $value . '<br>';
    };
    foreach($dados['contato'] as $contato => $value){
        echo $contato . $value . '<br>';
        };
        