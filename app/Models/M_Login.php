<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;

class M_Login
{
    protected $table = "Users";
    protected $db;

    public function __construct(ConnectionInterface &$db){
        $this->db = & $db;
    }

    public function register($data)
    {
        $query= $this->db->table($this->table)->insert($data);
        return $query ? true : false;
    }


public function checkEmail($data)
{
        $result = $this->db
                        ->table('Users')
                        ->where('Email', $data["Email"])
                        ->get();
                        // $ketqua = $result->getRowArray();

                        // var_dump(count($result->getResultArray()));die;
        if (count($result->getResultArray()) > 0) {
            return true;
        } else {
            return false;
        }
        // return $ketqua;
}
    public function check_login($email)
    {
        $query = $this->db->table('Users')
        ->where('Email', $email)
        ->countAll();

        if($query >  0){
            $rs = $this->db->table('Users')
                    ->where('Email', $email)
                    ->limit(1)
                    ->get()
                    ->getRowArray();
        } else {
            $rs = array(); 
        }
        return $rs;
    }
}