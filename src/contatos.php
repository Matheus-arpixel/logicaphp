<?php
$dados = [
 'nome' => 'Luiz',
 'dt_nesc' => "12/02/1989",
 'documentos' => [
 'CPF' => '123.456.789-30',
 'ID' => '1',
 'CNG' => '12345678910'
 'sexo' => 'Masculino'
]
 'endereco' =>[
 'logradouro' => 'rua araujo dias',
 'bairro' => 'cambota',
 'cidade' => 'valença',
 'UF' => 'RJ',
 'CEP' => '27600489',
 'completmento' => 'casa 1',
]
 'filiação' => [
 'NomePai' => 'José',
 'NomeMãe' => 'Maria',
]
 'contato' => [
 'telefone' => '24992892207',
 'fixo'=> '24992892207',
 'email' => 'luizadoropinto@gmail.com'
 ]
]
foreach($dados/['contatos'] as $contato => $value)
