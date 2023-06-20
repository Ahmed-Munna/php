<?php

    class human{

        private function hand() {
            echo "This is my hand";
        }

        private function legs() {
            echo "This is my legs";
        }

       public function both() {
            $this->hand();
            $this->legs();
        }

    }

 $man = new human;
 $man->both();









?>