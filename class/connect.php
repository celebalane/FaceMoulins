<?php
    class Connect 
    {
        private $host, $login, $pass, $bddName, $bddConnect, $colone, $valeur;


        public function __construct($bddName, $login, $pass, $host="localhost"){
            $this->host = $host;
            $this->bddName = $bddName;
            $this->login = $login;
            $this->pass = $pass;
            $this->bddConnect = new PDO('mysql:host='.$this->host.';dbname='.$this->bddName.';charset=utf8', $this->login, $this->pass);
        }

        public function select($what, $where, $limite=0, $si="0", $condition="1"){
            if($si=="0" AND $limite==0){
                $req = $this->bddConnect->prepare("SELECT $what FROM $where");
                $req->execute();
                return $req;
            }
            elseif($si!="0" AND $limite==0){
                $req = $this->bddConnect->prepare("SELECT $what FROM $where WHERE $si");
                $req->execute(array($condition));
                return $req;
            }
            elseif($si=="0" AND $limite > 0){
                $req = $this->bddConnect->prepare("SELECT $what FROM $where LIMIT $limite");
                $req->execute();
                return $req;
            }
        }
        public function insertInto($where, $array1, $array2){
            
            $req = $this->bddConnect->prepare("INSERT INTO $where SET $array1");
            $req->execute($array2);
        }
        public function update($what, $where, $array1, $array2, $limite=0){
            if($limite==0){
                for($i=0;$i<count($array1);$i++){
                     $i==count($array1)-1? $this->valeur.="$array1[$i]": $this->valeur.="$array1[$i], ";
                }
                $req = $this->bddConnect->prepare("UPDATE $where SET $what WHERE $array1");
                $req->execute($array2);
            }
        }
        public function delete($where, $array1, $array2, $limite=0){
            if($limite==0){
                $req = $this->bddConnect->prepare("DELETE FROM $where WHERE $array1");
                $req->execute($array2);
                return $req;
            }
        }
    }