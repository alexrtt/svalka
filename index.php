<form action="index.php" method="get">
Введите выражение: <input type="text" name="operation" />
<button>CLICK</button>
</form>


<?php 

$str;
$pattern = '/(-?[0-9]{0,}) {0,}([+-\/*]) {0,}(-?[0-9]{0,})/';

if(isset($_GET['operation'])){
    $str = $_GET['operation'];
    if(preg_match_all ($pattern , $str, $m)){
                echo '<hr><pre>';
                print_r($m);
                echo '</pre>';
                echo '<hr>Ваше выражение: ' . $m[0][0] . '<br>';
                echo 'Первая переменная: ' . $m[1][0] . '<br>';
                echo 'Действие: ' . $m[2][0] . '<br>';
                echo 'Вторая переменная: ' . $m[3][0] . '<br>';

                if($m[2][0] == '+')
                {
                    $res = $m[1][0] + $m[3][0];
                }

                if($m[2][0] == '-')
                {
                    $res = $m[1][0] - $m[3][0];
                }

                if($m[2][0] == '/')
                {
                    $res = $m[1][0] / $m[3][0];
                }

                if($m[2][0] == '*')
                {
                    $res = $m[1][0] * $m[3][0];
                }
                echo 'Ответ: ' . $res;
            }
            else
            {
                echo '<hr>YOU FUCKED UP! :))))<br>';
            }
}


