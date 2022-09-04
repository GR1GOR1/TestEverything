<?
echo ('Start test<br>');
print(' Start print');

$strHell = "Hello";
$year = 2022;
echo('<br>');
echo ($strHell . ' from ' . $year);

$colors = array('red', 'green');

class SimpleClass
{
    public $var = '<br> Простой класс';

    
    public function displayVar() {
        echo $this->var;
    }
    static function interesting() {
        echo ("<br>Interesting");
    }
}
$a = new SimpleClass;
//var_dump($a);
$a->displayVar();
SimpleClass::interesting();
echo('<br>----------------STR----------------<br>');
$strOut = 'Very interesting message';
echo strlen($strOut);
echo('-->');
echo $strOut; 
echo('-->');
echo str_word_count($strOut);
echo('-->');
echo strrev($strOut);
echo('-->');
echo strpos($strOut,'message');
echo('-->');
echo str_replace('Very', 'Not very', $strOut);
echo ('<br>');
echo('<br>--------------------------------<br>');
var_dump($a,$strHell);
echo('<br>--------------------------------<br>');
echo (6 <=> 2);
echo('<br>--------------------------------<br>');
if (4 > 5) {
    echo ('4 больше 3 !');
} elseif (4 < 5) {
    echo ('4 меньше 5 !');
}
echo('<br>--------------------------------<br>');
$user;// = 'Varvar88';
$mes = 'Hello' . ($user == !NULL ? $user : ' Guest');
echo $mes;
echo('<br>--------------------------------<br>');
$i = 2;
switch ($i) {
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
       echo "i не равно 0, 1 или 2";
}
echo('<br>--------------------------------<br>');
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}
recursion(5);
echo('<br>--------------------------------<br>');

function foo()
{
    $numargs = func_num_args();
    echo "Количество аргументов: $numargs\n";
    if ($numargs >= 2) {
        echo "Второй аргумент: " . func_get_arg(1) . "\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Аргумент №$i: " . $arg_list[$i] . "\n";
    }
}

foo(1, 2, 3);
echo('<br>--------------------------------<br>');
echo('Сортировка массивов <br>');
echo('sort() rsort() asort() ksort() arsort() krsort()');
echo('<br>--------------------------------<br>');
//GET работает через URL
//Не использовать для отправки паролей - информация видна всем. Имеет ограничение на 2000 символов
//POST работает через HTTP
//Информация невидима и не имеет ограничений
//Include и require выдают разные ошибки. Include продолжает исполняться 
?>