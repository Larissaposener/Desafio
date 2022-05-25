<?php

namespace SRC;

class Funcoes
{
    
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */



        
     
        
    public function SeculoAno(int $ano){
        $qtd = strval($ano);
        

        if(strlen($qtd) < 3){
            $iniano = "";
            $iniano = "";
            echo("o Seculo do ano informado é 1");
            exit();
            
           
        }

        if( strlen($qtd) < 4 ){
            $iniano = substr($ano, 0,1);
           
        }else{
            $iniano = substr($ano, 0,2);#primeiros dois digitos
        }
        
        
        
        $fimano = substr($ano, -2);#ultimos 2 digitos
        
        
        if($fimano == 00){
            $seculo = $iniano;
        }else{
            $seculo = $iniano + 1;
        }

        echo("o Seculo do ano informado é ".$seculo);
        return;
            
    }
       
    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

    */
    public function PrimoAnterior(int $numero){
         
        for($i=$numero-1; $i > 0; $i--){
            if($i%2 != 0){
                echo("Número primo anterior é ".$i);
                return;
                exit();
            }
        }
    }



     /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

    * */
    public function SegundoMaior(array $arr) {

        $multidimensional = $arr;
        $maior=$multidimensional[0][0];
        $segmaior = $maior;

        for($a=0;$a<4;$a++){
            for($j=0;$j<3;$j++){
                if($multidimensional[$a][$j] > $maior){
                    $segmaior=$maior;
                    $maior = $multidimensional[$a][$j];
                }
            }
        }

        echo "O segundo maior valor é".$segmaior;
        return;
        
        
    }



        /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr2) {
       
        
         
        
        
    }
	
	
     

    

    
 
    
}	
	
	
	
$acessar = new Funcoes();
$acessar->SeculoAno(2002);
$acessar->PrimoAnterior(77);
$acessar->SegundoMaior(array (
    array(25,22,18),
    array(10,15,13),
    array(24,5,2),
    array(80,17,15)
));
$acessar->SequenciaCrescente(array(7,1,4,9,3));