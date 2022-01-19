
<?php

    /**
     *      
     *      Definire classe Computer:
     *          ATTRIBUTI:
     *          - codice univoco
     *          - modello
     *          - prezzo
     *          - marca
     * 
     *          METODI:
     *          - costruttore che accetta codice univoco e prezzo
     *          - proprieta' getter/setter per tutte le variabili d'istanza
     *          - printMe: che stampa se stesso (come quella vista a lezione)
     *          - toString: "marca modello: prezzo [codice univoco]"
     * 
     *          ECCEZIONI:
     *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
     *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
     *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
     * 
     *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
     *      il corretto funzionamento dell'algoritmo
     */

    class Computer {
        private $codiceUnivoco;
        private $prezzo;
        private $modello;
        private $marca;


        public function __construct($codiceUnivoco, $prezzo) {
            $this -> setUniqueCode($codiceUnivoco);
            $this -> setPrice($prezzo);
        }

        // codice univoco
        public function getUniqueCode() {
            return $this -> codiceUnivoco;
        } 

        public function setUniqueCode($codiceUnivoco){
            if (strlen($codiceUnivoco) != 6)
                throw new Exception("Il codice univoco deve composto da esattamente 6 cifre");
            $this -> codiceUnivoco = $codiceUnivoco;
        }

        // prezzo
        public function getPrice() {  
            return $this -> prezzo;
        } 

        public function setPrice($prezzo){
            if(!is_int($prezzo) < 0 ||  $prezzo >2000)
                throw new Exception("Il prezzo deve avere un numero intero compreso tra 0 e 2000");
            $this -> prezzo = $prezzo;
        }

        // modello
        public function getModel() {
            return $this -> modello;
        } 

        public function setModel($modello){
            if(strlen($modello) < 3 || strlen($modello)>20)
                throw new Exception ("Il modello deve essere costituito dai 3 ai 20 caratteri");
            $this -> modello = $modello;
        }

        // marca
        public function getBrand() {
            return $this -> marca;
        } 

        public function setBrand($marca){
            if(strlen($marca) < 3 || strlen($marca)>20)
                throw new Exception ("La marca deve essere costituita dai 3 ai 20 caratteri");
            $this -> marca = $marca;
        }

        public function printMe() {
            echo $this . "<br>";
        }

        public function __toString() {
            return $this -> getBrand() . " " . $this -> getModel() . ": ". $this ->  getPrice() . "€" . " [" . $this -> getUniqueCode() . "]";
            
        }


    }

    try {
        $computer1 = new Computer("eeeeee", 50);

        $computer1 -> setModel ("blalbalba");
        $computer1 -> setBrand ("blalbalbas");


        $computer1 -> printMe();
    } catch (Exception $e) {
        echo "<br><h1>" . $e -> getMessage() . "</h1>";
    } finally {
        echo "esecuzione finale indipendente dagli errori";
    }

    

    
    

?>

