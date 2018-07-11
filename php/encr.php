<?php

    class Encr
    {
        public $Name;
        protected $Pass;
        public $Val=array();
        function __construct()
        {
            $this->Name=$_POST['Name'];
            $this->Pass=$_POST['Pass'];   
        }

        public function encrypted()
        {

            //echo "Here " . $P;
            $this->Val=['cost' => 12];
            $Enc= password_hash($this->Pass, PASSWORD_BCRYPT, $this->Val);
            self::NN($this->Pass,$Enc);
        }
        static function NN($N,$Hash)
        {
            if (password_verify($N, $Hash)) 
            {
                echo 1;
            } else{
                echo 2;
            }
        }

    
    }
$encr=new Encr();
$encr->encrypted(); 
  
    
?>