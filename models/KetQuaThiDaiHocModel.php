<?php
class KetQuaThiDaiHocModel {
    protected $toan;
    protected $ly;
    protected $hoa;
    protected $diemChuan = 20;
    protected $result;
    protected $scoreTotal;
    public function __construct($toan, $ly, $hoa, $diemChuan) {
        $this->toan = $toan;
        $this->ly = $ly;
        $this->hoa = $hoa;
        $this->diemChuan = $diemChuan;
        if($toan == 0 || $ly == 0 || $hoa == 0) {
            $this->result = "Rot";
        } else {
            if ($this->GetScoreTotal() >= $this->diemChuan) {
                $this->result = "Dau";
            } else {
                $this->result = "Rot";
            }
        }
    }
    public function GetScoreTotal(){
        $this->scoreTotal = $this->toan + $this->ly + $this->hoa;
        return $this->scoreTotal;
    }
    public function Result() {
        return $this->result;
    }
}
?>