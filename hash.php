<?php
class Hashes
{
    protected $opciones=array();
    public $Pass;
    public function pass($P)
    {
        $this->Pass=$P;
        
        /*
        $this->opciones= ["Clave"=>"Valor"];

        print $this->opciones["Clave"];*/
      

        self::encrypted($this->Pass);

        }

    static function encrypted($Pa)
    {
       // print $Pa ."   " ;

       $this->opciones= ['cost' => 12];

       echo $this->opciones['cost'];
        
//

    //$Enc= password_hash($EnPa, PASSWORD_BCRYPT, $opciones);
    
    /*
    if (password_verify($Pass, $Enc)) {
        echo '¡La contraseña es válida!';
    } else {
        echo 'La contraseña no es válida.';
    }
       */ 
        
    }
}

$hashes=new Hashes();
$hashes->pass("ese ese ese");
?>