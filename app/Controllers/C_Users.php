<?php 
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\M_Users;
use App\Models\M_ThongTinUser;

use CodeIgniter\Controller;

header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, OPTIONS");
//header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
class C_Users extends Controller
{
    public function SelectAll()
    {
        $M_Users= new M_Users();
        return $this->response->setStatusCode(200)->setJSON($M_Users->findAll()); 
    }

    public function SelectOne($UserID){
        $M_Users = new M_Users();
        return $this->response->setStatusCode(200)->setJSON($M_Users->find($UserID)); 
    }

    public function Add(){
        $M_Users = new M_Users();
        $data = [
            'HoVaTen'=> $this->request->getVar('HoVaTen'),     
            'Email'=> $this->request->getVar('Email'),           
            'MatKhau'=> $this->request->getVar('MatKhau'),
            'SoDienThoai'=> $this->request->getVar('SoDienThoai'),
            'HinhDaiDien'=> $this->request->getVar('HinhDaiDien'),
            'VaiTro'=> $this->request->getVar('VaiTro'),
            'LanDauDangNhap'=> $this->request->getVar('LanDauDangNhap')
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

    public function Edit($UserID = null){
        $M_user = new M_Users();
        $data = [                   
            // 'HoVaTen'=> $this->request->getVar('HoVaTen'),     
            // 'MatKhau'=> $this->request->getVar('MatKhau'),
            // 'SoDienThoai'=> $this->request->getVar('SoDienThoai'),
            // 'HinhDaiDien'=> $this->request->getVar('HinhDaiDien'),
            'VaiTro'=> $this->request->getVar('VaiTro')   
        ];
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => $data
        ];
        $Edit=$M_user->update($UserID,$data);
        return $this->response->setStatusCode(200)->setJSON($response);
    }

        public function EditToProfileUser($UserID = null){
        $M_user = new M_Users();
        $data = [                   
            'HoVaTen'=> $this->request->getVar('HoVaTen'),     
            'MatKhau'=> $this->request->getVar('MatKhau'),
            'SoDienThoai'=> $this->request->getVar('SoDienThoai'),
            'HinhDaiDien'=> $this->request->getVar('HinhDaiDien')
        ];
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => $data
        ];
        $EditToProfileUser=$M_user->update($UserID,$data);
        return $this->response->setStatusCode(200)->setJSON($response);
    }

    public function Remove($UserID){
        $M_Users = new M_Users();
        $M_Users->delete($UserID);
        return $this->response->setStatusCode(200); 
   }

    //danh mục tìm kiếm nâng cao
    public function timkiem($keySearch)
    {
        $db = db_connect();
        $model = new M_ThongTinUser($db);
        
        $rs = $model->get_timkiem($keySearch);
        json_encode($rs) ;
        return $this->response->setStatusCode(200)
                        ->setJSON($rs); 
    }

    public function updateFirst($UserID = null){
        $M_user = new M_Users();
        $data = [                   
            'SoDienThoai'=> $this->request->getVar('SoDienThoai'),
            'HinhDaiDien'=> $this->request->getVar('HinhDaiDien'),
            'LanDauDangNhap'=> $this->request->getVar('LanDauDangNhap'),
            'CauHoiBiMat'=> $this->request->getVar('CauHoiBiMat')

        ];
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => $data
        ];
        $Edit=$M_user->update($UserID,$data);
        return $this->response->setStatusCode(200)->setJSON($response);
    }


    public function thayDoiMatKhau($UserID = null){
        $M_user = new M_Users();
        $data = [                   
            'MatKhau'=> $this->request->getVar('MatKhau')
        ];
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => $data
        ];
        $Edit=$M_user->update($UserID,$data);
        return $this->response->setStatusCode(200)->setJSON($response);
    }

    //     public function thayDoiMatKhauKhiQuen($UserID = null){
    //     $M_user = new M_Users();
    //     $data = [                   
    //         'MatKhau'=> $this->request->getVar('MatKhau')
    //     ];
    //     $response = [
    //         'status'   => 201,
    //         'error'    => null,
    //         'messages' => $data
    //     ];
    //     $Edit=$M_user->update($UserID,$data);
    //     return $this->response->setStatusCode(200)->setJSON($response);
    // }

        
}