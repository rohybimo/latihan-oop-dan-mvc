<?php
Class mahasiswa{
    public $nama;
    public$nim;
    
    function _construct($a,$b){
        $this->nama=$a;
        $this->nim=$b;
        echo "Kelas telah dibuat<br/><br/>";
    }
    function cetak(){
        echo $this->nama."<br/>".$this->nim."<br/><br/>";
    }
    function _destruct(){
        echo "Kelas telah dihancurkan";
    }

}
?>