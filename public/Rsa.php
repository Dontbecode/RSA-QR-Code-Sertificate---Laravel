<?php

class Rsa {

    private $p; // bilangan prima pertama
    private $q; // bilangan prima kedua
    private $n; // bilangan modulus
    private $m; // bilangan totient
    private $e; // exponen enkripsi (kunci publik untuk enkripsi)
    private $d; // exponen dekripsi (kunci privat untuk dekripsi)
    private $e_arr; // array dari e yang tersedia
    private $d_arr; // array dari sekian d yang tersedia


    function gen_key($p, $q) {
        $this->p = $p;
        $this->q = $q;
        $this->n = $p * $q;
        $this->m = ($p - 1) * ($q - 1);
        $this->gen_e($this->m);
        $this->gen_d($this->m, $this->e);
    }
    
    // function to check wether a number is a prime number

    // function to encrypt a text with the public key pair (e, n)
    // parameter pertama: teks yang akan dienkripsi
    // parameter kedua: kunci publik untuk enkripsi (e)
    // parameter ketiga: bilangan modulus
    function encrypt($text, $e, $n) {
        // teks di pisah per 1 karakter menjadi bentuk array
        $text_arr = str_split($text);

        foreach ($text_arr as $text_arr) {
            $ord_text = ord($text_arr); // ubah karakter ke angka desimal
            $chip_arr[] = bcpowmod($ord_text, $e, $n); // rumus enkripsi
        }

        $ord_chip = implode(",", $chip_arr); // array desimal disatukan dengan pemisah koma
        return $ord_chip;
    }

    // function to decrypt a text with the private key pair (d, n)
    // parameter pertama: teks yang akan didekripsi
    // parameter kedua: kunci privat untuk dekripsi (d)
    // parameter ketiga: bilangan pembagi/modulus
    function decrypt($ord_chip, $d, $n) {
        $chip_arr = preg_split("/[^0-9]/", $ord_chip); // array desimal dipisah sesuai koma
        
        foreach ($chip_arr as $chip_arr) {
            $ord_chip = bcpowmod($chip_arr, $d, $n); // rumus dekripsi
            $text_arr[] = chr($ord_chip); // ubah angka desimal ke karakter/huruf
        }
        
        $text = implode("", $text_arr); // satukan karakter tanpa pemisah
        return $text;
    }


    function gen_e($m) {
        for ($i = 8; $i < $m; $i++) {
            if ( $this->gcd($m, $i) == 1 ) {
                $e[] = $i;
            }
        }
        
        $this->e_arr = $e;
        $this->e = $e[0];
    }

    function gen_d($m, $e, $limit = 100) {
        $j=0;
        for ($i = 7; $i < $limit; $i++) {

            $result = (1 + ( $i * $m )) % $e;
            if ( $result == 0 ) {
                $the_d[] = (1 + ( $i * $m )) / $e;
                $j++;
            }
        }

        $this->d_arr = $the_d; 
        $this->d = $the_d[0];
    }

    // recursive function to calculate the Greatest common divisor from two number
    function gcd($x, $y) {
        return (bcmod($x, $y)) ? $this->gcd($y, bcmod($x, $y)) : $y;
    }

    // getter
    function get_n() {
        return $this->n;
    }

    function get_m() {
        return $this->m;
    }

    function get_p() {
        return $this->p;
    }

    function get_q() {
        return $this->q;
    }
    
    function get_e() {
        return $this->e;
    }
    
    function get_d() {
        return $this->d;
    }

    function get_e_arr() {
        return $this->e_arr;
    }

    function get_d_arr() {
        return $this->d_arr;
    }

    // setter
    
}

?>