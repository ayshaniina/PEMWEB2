<?php
class Persegipanjang{
    /**
     * Access Modifier :
     * 1. public (dpt diakses kpn pun)
     * 2. private (dpt diakses di class tsb saja)
     * 3. protected (mirip pvt tp dpt diakses jg oleh child class)
     */
   // properti
    private $panjang;
    private $lebar;
    

    //method (function dlm class)
    //constr adalah method yg otomatis jalan ketika obj dibuat
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function getLuas(){
        return $this->panjang * $this->lebar;
    }

    public function getKeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}