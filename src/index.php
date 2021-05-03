<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Hello there</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            font-size: larger;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>
    <body>
        <img src="https://tech.osteel.me/images/2020/03/04/hello.gif" alt="Hello there" class="center">
            <!--        poche righe di codice PHP per connettersi a un database che ancora non esiste.-->
            <?php
            $connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');
            $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
            $tables     = $query->fetchAll(PDO::FETCH_COLUMN);
            
            if (empty($tables)) {
                echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
            } else {
                echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
                echo '<ul class="center">';
                foreach ($tables as $table) {
                    echo "<li>$table</li>";
                }
                echo '</ul>';
            }
            ?>
    <section class="test">
        <?php
        $string = 'Good luck!';
        $start = 10;
        //var_dump(substr($string,$start)); // string(0) ""

        //var_dump($a =2/0); //eccezione DivisionByZeroError - Error
        ?>

        <?php
        $fruits = array('a' => "lemon", 'b' => "orange", 'c' => "banana", 'd' => "apple");
        krsort($fruits);
        print_r($fruits);
        ?>
        <p>
            <?php
            $prova = array('a' => "lemon", 'b' => "orange", 'c' => "banana", 'd' => "apple");
            rsort($prova);
            print_r($prova);
            ?>
        </p>

        <p>
            <?php
            $prova = array('a' => "lemon", 'b' => "orange", 'c' => "banana", 'd' => "apple");
            array_reverse($prova);
            print_r($prova);
            ?>
        </p>
        <p>
            <?php
            $prova = array('a' => "lemon", 'b' => "orange", 'c' => "banana", 'd' => "apple");
            array_flip($prova);
            print_r($prova);
            ?>
        </p>
        <p>
<!--            Studiare cosa fanno i vari elementi-->
            <?php
            class Number {
                private $v;
                private static $sv =10;
                public function __construct($v) { $this->v = $v;}
                public function mul() {
                    return static function($x) {
                        return isset($this) ? $this->v*$x : self::$sv*$x;
                    };
                }
            }

            $one = new Number(1);
            $two = new Number(2);
            $double = $two->mul();
            $x = Closure::bind($double, null, 'Number');
            echo $x(5);
//            $prova = array('a' => "lemon", 'b' => "orange", 'c' => "banana", 'd' => "apple");
//            array_flip($prova);
//            print_r($prova);
            ?>
        </p>
        <p>
            <?php
            function z($x) {
                return function ($y) use ($x) {
                    return str_repeat($y, $x);
                };
            }
            $a =z(2);
            $b = z(3);
            echo $a(3) . $b(2);
            ?>
        </p>
        <ul>
            <li>
                <?php
                $ciao = [true, '0' => false, false => true];
                var_dump($ciao);  //array(1) { [0] => bool(true)}
                ?>
            </li>
            <li>
                <?php
                $sabato = [28, 10, 15, 16];
                array_shift($sabato);
                var_dump($sabato);
                ?>
            </li>
            <li>
                <?php
                $sa = ['a','b','c'];
                 $sa = array_keys(array_flip($sa)) ;
                print_r($sa);  //array(1) { [0] => bool(true)}
                ?>
            </li>
            <li>
                <?php
                $p = 'p';
                $q = 'q';
                echo isset($f) ? $p.$q.$f : ($f= 'c'). 'd'; //array(1) { [0] => bool(true)}
                ?>
            </li>
            <li>
                <?php
                trait MyTrait {
                    private $abc = 1;
                    public function increment() {
                        $this->abc++;
                    }
                    public function getValue() {
                        return $this->abc;
                    }
                }
                class MyClass {
                    use MyTrait;
                    public function incrementBy2()
                    {
                        $this->increment();
                        $this->abc++;
                    }
                }

                $cc = new MyClass;
                $cc->incrementBy2();
                var_dump($cc->getValue());
                ?>
            </li>
            <li>
                <?php
                class MyException extends Exception{}

                try {
                    throw new MyException('Oops!');
                } catch (Exception $e) {
                    echo "Caught Exception\n"; //stamperà questa
                } catch (MyException $e) {
                    echo "Caught MyException\n";
                }
                ?>
            </li>
            <li>
                <?php
                $xx = 5;
                $sx = '5' ;
                $z =  $xx === $sx;
                echo $z;
                ?>
            </li>
        </ul>
    </section>
    </body>
</html>

<script>
    for (let i = 0; i < 3; i++) {
        setTimeout(function (){
            console.log(i);
        }, 1000);
    }
</script>