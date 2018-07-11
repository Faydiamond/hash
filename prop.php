<?php
    class Prop
    {
        public $Arr=array();
        protected $Pass;

        public function pass($P)
        {
            $this->Pass=$P;
            echo $this->Pass;
            self::encrryptt($this->Pass);
            
        }

        public function encrryptt($Pa)
        {
            print "Here!"." "."<br>";
            $this->Arr=['cost' => 12];
            $Enc= password_hash($Pa, PASSWORD_BCRYPT, $this->Arr);
            echo $this->Arr['cost'];
            echo "<br>". "  ".$Enc;
            self::Verify($Pa,$Enc);
        }

        public function Verify($Pp,$Ha)
        {
            if (password_verify($Pp, $Ha)) {
                echo '¡La contraseña es válida!';
            } else {
                echo 'La contraseña no es válida.';
            }
        }


    }

    $prop=new Prop();
    $prop->pass("sdfghj");
    
?>