<?php
error_reporting(0);

class begin {
    public $var1;
    public $var2;

    public function __construct($a) {
        $this->var1 = $a;
    }
    function __destruct() {
        echo $this->var1;
    }

    public function __toString() {
        $newFunc = $this->var2;
        return $newFunc();
    }
}


class starlord {
    public $var4;
    public $var5;
    public $arg1;

    public function __call($arg1, $arg2) {
        $function = $this->var4;
        return $function();
    }

    public function __get($arg1) {
        $this->var5->ll2('b2');
    }
}

class anna {
    public $var6;
    public $var7;

    public function __toString() {
        $long = @$this->var6->add();
        return $long;
    }

    public function __set($arg1, $arg2) {
        if ($this->var7->tt2) {
            echo "yamada yamada";
        }
    }
}

class eenndd {
    public function __get($arg1)
    {
        array_walk($this, function ($day1, $day2) {
            $day3 = new $day2($day1);
            foreach ($day3 as $day4) {
                echo($day4 . '<br>');
            }
        });
    }
}

class flaag {
    public $var10;
    public $var11="1145";

    public function __invoke() {
        if (md5(md5($this->var11)) == 666) {
            return $this->var10->hey;
        }
    }
}


class yamada {
    public $var12;
    private $var13;

    public function __set($name, $value) {
        $this->$name = $value;
        if ($this->var13 == "xxx") {
            strtolower($this->var12);
        }
    }
}

if (isset($_POST['ISCTF'])) {
    unserialize($_POST['ISCTF']);
} else {
    highlight_file(__FILE__);
}
