<?php
namespace App\Controllers;

use App\Models\M_phongtro;
use App\Models\M_ThongTinPhongTro;
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class C_phongtro extends Controller
{
    public function SelectAll()
    {
        $M_phongtro = new M_phongtro();
        return $this->response->setStatusCode(200)->setJSON($M_phongtro->findAll()); 
    }

    public function SelectOne($PhongTroID){
        $M_phongtro = new M_phongtro();
        return $this->response->setStatusCode(200)->setJSON($M_phongtro->find($PhongTroID)); 
    }

    public function Add(){
        $M_phongtro = new M_phongtro();
        $data = [
            'PhongTroID'=> $this->request->getVar('PhongTroID'),     
            'TieuDe'=> $this->request->getVar('TieuDe'),           
            'MoTa'=> $this->request->getVar('MoTa'),
            'HinhAnh'=> $this->request->getVar('HinhAnh'),
            'Gia'=> $this->request->getVar('Gia'),
            'DienTich'=> $this->request->getVar('DienTich'),           
            'DiaChi'=> $this->request->getVar('DiaChi'),
            'SoDienThoai'=> $this->request->getVar('SoDienThoai'),
            'TienIch'=> $this->request->getVar('TienIch'),
            'TrangThai'=> $this->request->getVar('TrangThai'),
            'UserID'=> $this->request->getVar('UserID'),
            'KhuVucID'=> $this->request->getVar('KhuVucID'),
            'DanhMucID'=> $this->request->getVar('DanhMucID')
        ];
        
        $add=$M_phongtro->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => $data
      ];
      if($M_phongtro->errors())
      return $this->fail($M_phongtro->errors());
      if($add===false)
      return $this->failServerError();
      return $this->response->setStatusCode(200)->setJSON($response);
    }

    public function Edit($PhongTroID = null){
        $M_phongtro = new M_phongtro();
        $data = [                   
            'TieuDe'=> $this->request->getVar('TieuDe'),
            'MoTa'=> $this->request->getVar('MoTa'),           
            'HinhAnh'=> $this->request->getVar('HinhAnh'),        
            'Gia'=> $this->request->getVar('Gia'),           
            'DienTich'=> $this->request->getVar('DienTich'),        
            'DiaChi'=> $this->request->getVar('DiaChi'),           
            'SoDienThoai'=> $this->request->getVar('SoDienThoai'),   
            'TienIch'=> $this->request->getVar('TienIch'), 
            'TrangThai'=> $this->request->getVar('TrangThai'),      
            'UserID'=> $this->request->getVar('UserID'),           
            'KhuVucID'=> $this->request->getVar('PhuongID'),        
            'DanhMucID'=> $this->request->getVar('DanhMucID')       
        ];
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => $data
        ];
        $Edit=$M_phongtro->update($PhongTroID,$data);
        return $this->response->setStatusCode(200)->setJSON($response);
    }

    public function User_Edit($PhongTroID = null){
        // echo 'a';die;
        $M_phongtro = new M_phongtro();
        $data = [                   
            'SoDienThoai'=> $this->request->getVar('SoDienThoai'),   
            'TrangThai'=> $this->request->getVar('TrangThai')
        ];
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => $data
        ];
        $Edit=$M_phongtro->update($PhongTroID,$data);
        return $this->response->setStatusCode(200)->setJSON($response);
    }

    public function Remove($PhongTroID){
        $M_phongtro = new M_phongtro();
        $M_phongtro->delete($PhongTroID);
        return $this->response->setStatusCode(200); 
   }


}