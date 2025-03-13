<?php
class Mahasiswa {
    private $nim;
    private $nama;
    private $programStudi;
    
    public function setMhs($nim, $nama, $programStudi = null)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }

    public function getMhs()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi
        ];
    }   
}