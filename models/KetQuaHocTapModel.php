<?php
class KetQuaHocTapModel {
    protected $diemHK1 = 0;
    protected $diemHK2 = 0;
    protected $avgScore;
    protected $result;
    protected $type;
    public function __construct($num1, $num2) {
        if(isset($num1) && isset($num2)) {
            $this->diemHK1 = $num1;
            $this->diemHK2 = $num2;
        }
        if ($this->GetAvgScore() >= 8) {
            $this->type = "Giỏi";
            $this->result = "Duoc len lop";
        } else if ($this->GetAvgScore() >= 6.5) {
            $this->type = "Khá";
            $this->result = "Duoc len lop";
        } else if ($this->GetAvgScore() >= 5) {
            $this->type = "Trung bình";
            $this->result = "Duoc len lop";
        } else {
            $this->type = "Yếu";
            $this->result= "O lai lop";
        }
    }
    public function GetAvgScore(){
        $this->avgScore = ($this->diemHK1 + $this->diemHK2*2) / 3;
        return $this->avgScore;
    }
    public function Result() {
        return $this->result;
    }
    public function Type() {
        return $this->type;
    }
}
?>