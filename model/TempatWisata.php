<?php
require_once('base/model.php');

class TempatWisata extends Model {
    public $table = 'tempat_wisata';
    public $nama_tempat;
    public $deskripsi;
    public $foto;
    public $id_user;

    public function save()
    {
        $this->atributs = ["'$this->nama_tempat'", "'$this->deskripsi'", "'$this->foto'", $this->id_user];
        return parent::save();
    }

    public function update($id)
    {
        $this->fid = 'id';
        $this->val = "nama_tempat='$this->nama_tempat', deskripsi='$this->deskripsi', foto='$this->foto', id_user=$this->id_user";
        return parent::update($id);
    }

    public function viewMtr()
    {
        return parent::viewAll('data_mtr');
    }

    public function viewLobar()
    {
        return parent::viewAll('data_lobar');
    }

    public function viewKlu()
    {
        return parent::viewAll('data_klu');
    }

    public function viewLoteng()
    {
        return parent::viewAll('data_loteng');
    }

    public function viewLotim()
    {
        return parent::viewAll('data_lotim');
    }
}