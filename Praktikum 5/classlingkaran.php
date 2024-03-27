<?php
class Lingkaran{
    /**
     * Access Modifier :
     * 1. public (dpt diakses kpn pun)
     * 2. private (dpt diakses di class tsb saja)
     * 3. protected (mirip pvt tp dpt diakses jg oleh child class)
     */

    // properti
    private $jari;
    const PHI = 3.14;

    //method (function dlm class)
    //constr adalah method yg otomatis jalan ketika obj dibuat
    public function __construct($r)
    {
        $this->jari = $r;
    }

    public function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
}