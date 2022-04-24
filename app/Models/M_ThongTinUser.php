<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;


class M_ThongTinUser
{
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db = & $db;
    }
        function get_timkiem($keyword){
            return $this->db->table('Users')
                        ->like('HoVaTen', $keyword)
                        ->orLike('Email', $keyword)
                        ->orLike('SoDienThoai', $keyword)
                        ->orLike('VaiTro', $keyword)
                        ->get()->getResult();
        }


    public function check_cauhoibimat($Email)
    {
            $result = $this->db
                            ->table('Users')
                            ->where('Email', $Email)
                            ->get();
                            
            if (count($result->getResultArray()) > 0) {
                 $rs = $this->db->table('Users')
                    ->where('Email', $Email)
                    ->limit(1)
                    ->get()
                    ->getRowArray();
        } else {
            $rs = ""; 
        }
        return $rs;
    }
}
