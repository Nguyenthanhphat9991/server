<?php

namespace App\Controllers;

use App\Models\M_BaoCao;
use App\Models\M_ThongTinPhongTro;
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method"); 
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE"); 
$method = $_SERVER['REQUEST_METHOD']; 
if($method == "OPTIONS") { die(); }

class C_BaoCao extends Controller
{

   public function SelectAll()
    {
        $M_phongtro = new M_BaoCao();
        return $this->response->setStatusCode(200)->setJSON($M_phongtro->findAll()); 
    }

    // public function SelectOne($PhongTroID){
    //     $M_phongtro = new M_phongtro();
    //     return $this->response->setStatusCode(200)->setJSON($M_phongtro->find($PhongTroID)); 
    // }

    public function Add(){
        $M_Users = new M_BaoCao();
        $data = [
            'PhongTroID'=> $this->request->getVar('PhongTroID'),     
            'NoiDungBaoCao'=> $this->request->getVar('NoiDungBaoCao'),           
            'HoVaTen'=> $this->request->getVar('HoVaTen'),
            'Email'=> $this->request->getVar('Email')
        ];
        
        $add=$M_Users->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => $data
      ];
      
      if($M_Users->errors())
      return $this->fail($M_Users->errors());
      if($add===false)
      return $this->failServerError();
      return $this->response->setStatusCode(200)->setJSON($response);
    }

   //  public function Edit($PhongTroID = null){
   //      $M_phongtro = new M_phongtro();
   //      $data = [                   
   //          'TieuDe'=> $this->request->getVar('TieuDe'),
   //          'MoTa'=> $this->request->getVar('MoTa'),           
   //          'HinhAnh'=> $this->request->getVar('HinhAnh'),        
   //          'Gia'=> $this->request->getVar('Gia'),           
   //          'DienTich'=> $this->request->getVar('DienTich'),        
   //          'DiaChi'=> $this->request->getVar('DiaChi'),           
   //          'SoDienThoai'=> $this->request->getVar('SoDienThoai'),        
   //          'UserID'=> $this->request->getVar('UserID'),           
   //          'PhuongID'=> $this->request->getVar('PhuongID'),        
   //          'DanhMucID'=> $this->request->getVar('DanhMucID')       
   //      ];
   //      $response = [
   //          'status'   => 201,
   //          'error'    => null,
   //          'messages' => $data
   //      ];
   //      $Edit=$M_phongtro->update($PhongTroID,$data);
   //      return $this->response->setStatusCode(200)->setJSON($response);
   //  }



    public function Remove($BaoCaoID){
        $M_phongtro = new M_BaoCao();
        $M_phongtro->delete($BaoCaoID);
        return $this->response->setStatusCode(200); 
   }



}