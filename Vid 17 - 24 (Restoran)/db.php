<?php 

    class DB{

        //properti
        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        public function __construct(){
            echo "ini adalah contoh function construct";   
        }

        //method
        public function selectData(){
            echo "ini adalah select data";
        }

        public function getDatabase(){
            return $this->database;
        }

        public function tampil(){
            $this->selectData();
        }

        public static function insertData()
        {
            echo "ini adalah static function";
        }

        
    }

        DB::insertData(); //akan muncul "static function" jika benar

        echo '<br>';

        $db = new DB; // akan muncul "ini adalah contoh function construct" jika benar

        echo '<br>';

        $db->selectData(); // akan muncul "ini adalah select data" jika benar

        echo '<br>';

        echo $db->host; // akan muncul "127.0.0.1" jika benar

        echo '<br>';

        echo $db->getDatabase(); // akan muncul "dbrestoran" jika benar

        echo '<br>';

        $db->tampil(); // akan tampil "ini adalah select data" jika benar

?>