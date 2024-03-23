# Carro
```php
class carro{
    public $velocidade = 0;
    public $ligado = false;

    public function ligar(){
        $ligado = true;
    }

    public function desligar(){
        $ligado = false;
    }
}
```

# Ford
```php
include_once('carro.php');

$ford = new Carro();
$ford->ligar();
```

# echo - print_r - var_damp
 echo serve para string e variaveis<br>
print_r serve para e lista string e variaveis<br>
var_dump serve para lista string e variaveis e mostra a estrutura da variavel<br>
```php
/*
    echo serve para string e variaveis
    print_r serve para e lista string e variaveis
    var_dump serve para lista string e variaveis e mostra a estrutura da variavel
*/
$nome = "João";
$idade = 18;
$lista = ['azul',  'amarelo'];

echo "echo: <br>";
echo "$nome <br>";
echo "$idade <br>";
echo "$lista <br>"; // erro por ser lista


echo "<br>";


echo "print_r: <br>";
print_r("$nome <br>");
print_r("$idade <br>");
print_r($lista); //não pode ser concatenado com string
echo "<br><br>";

echo "var_dump: <br>";
var_dump($nome);
echo "<br>";
var_dump($idade);
echo "<br>";
var_dump($lista);
```
