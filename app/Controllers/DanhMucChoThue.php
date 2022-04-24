<?php
namespace App\Controllers;
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
use App\Models\M_ThongTinPhongTro;
use App\Models\M_ThongTinUser;

header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
class DanhMucChoThue extends Controller
{
    //giá phòng từ bé đến lớn
    public function Giaphongtubedenlon()
    {
        $db = db_connect();
        $model = new M_ThongTinPhongTro($db);
        $rs = $model->get_giaphongtubedenlon();

        json_encode($rs) ;
        return $this->response->setStatusCode(200)
                        ->setJSON($rs); 
    }
    //giá phòng từ lớn đến bé
    public function Giaphongtulondenbe()
    {
        $db = db_connect();
        $model = new M_ThongTinPhongTro($db);
        $rs = $model->get_giaphongtulondenbe();

        json_encode($rs) ;
        return $this->response->setStatusCode(200)
                        ->setJSON($rs); 
    }

    //diện tích từ lớn đến bé
    public function Dientichtulondenbe()
    {
        $db = db_connect();
        $model = new M_ThongTinPhongTro($db);
        $rs = $model->get_dientichtulondenbe();

        json_encode($rs) ;
        return $this->response->setStatusCode(200)
                        ->setJSON($rs); 
    }

        //diện tích từ bé đến lớn
        public function Dientichtubedenlon()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_dientichtubedenlon();
    
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực vĩnh hải {1}
        public function Khuvucvinhhai()
        {
            // echo "a";die;
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_vinhhai();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Vĩnh Hoà {2}
        public function Khuvucvinhhoa()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_vinhhoa();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Vĩnh Hoà {3}
        public function Khuvucvinhnguyen()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_vinhnguyen();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Vĩnh Phước {4}
        public function Khuvucvinhphuoc()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_vinhphuoc();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Phước Hải {5}
        public function Khuvucphuochai()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_phuochai();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Ngọc Hiệp {6}
        public function Khuvucngochiep()
        {

            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_ngochiep();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Phước Long {7}
        public function Khuvucphuoclong()
        {

            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_phuoclong();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Phước Tân {8}
        public function Khuvucphuoctan()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_phuoctan();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Phước Tiến {9}
        public function Khuvucphuoctien()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_phuoctien();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Phương Sài {10}
        public function Khuvucphuongsai()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_phuongsai();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Phương Sơn {11}
        public function Khuvucphuongson()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_phuongson();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Tân Lập {12}
        public function Khuvuctanlap()
        {

            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_tanlap();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Vạn Thạnh {13}
        public function Khuvucvanthanh()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_vanthanh();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Vạn Thắng {14}
        public function Khuvucvanthang()
        {

            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_vanthang();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Phước Hòa {15}
        public function Khuvucphuochoa()
        {

            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_phuochoa();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Lộc Thọ {16}
        public function Khuvucloctho()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_loctho();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Vĩnh Thọ {17}
        public function Khuvucvinhtho()
        {

            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_vinhtho();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Vĩnh Trường {18}
        public function Khuvucvinhtruong()
        {

            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_vinhtruong();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //khu vực Xương Huân {19}
        public function Khuvucxuonghuan()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_xuonghuan();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }
        //danh mục ở ghép
        public function DanhMucOGhep()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_oghep();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }
        //danh mục Căn hộ
        public function DanhMucCanHo()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_canho();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }
        
        //danh mục Trọ bình dân
        public function DanhMucTroBinhDan()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_trobinhdan();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //danh mục Nhà nguyên Căn
        public function DanhMucNhaNguyenCan()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->get_nhanguyencan();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //danh mục tìm kiếm phongf troj nâng cao
        public function timkiem($key)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->get_timkiem($key);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //danh mục tìm kiếm baso caso nâng cao
        public function timkiembaocao($key)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->get_timkiembaocao($key);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //danh mục chi tiết phòng tro
        public function chitiet($id)
        {
            // echo "a";die;
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->get_chitiet($id);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        public function get_thongtin($id)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->get_thongtin($id);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        public function get_baocao($id)
        {
            // echo "a";die;
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->get_baocao($id);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        public function SoBaiDang($id)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->get_sobaidang($id);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }
        
        public function userQuanLy($id)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->userQuanLy($id);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        // nội dung báo cáo
        public function NoiDungBaoCao()
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->baocao();
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //xoá báo cáo có khi bào viết bị xoá
        public function removeBaoCao($PhongTroID)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->xoabaocao_phongtroID($PhongTroID);
            json_encode($rs);
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        //xoá bài viết có khi user bị xoá
        public function removeBaiViet($UserID)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            $rs = $model->xoabaiviet_userID($UserID);
            json_encode($rs);
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

        public function thongtinphongtro($UserID)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->thongtinphongtro($UserID);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

            //giá phòng từ bé đến lớn
    public function getDataToPageHome()
    {
        $db = db_connect();
        $model = new M_ThongTinPhongTro($db);
        $rs = $model->getDataToPageHome();

        json_encode($rs) ;
        return $this->response->setStatusCode(200)
                        ->setJSON($rs); 
    }

        //phongtro lieen quan
    public function phongtrolienquan($key1,$key2)
        {
            $db = db_connect();
            $model = new M_ThongTinPhongTro($db);
            
            $rs = $model->get_phongtrolienquan($key1,$key2);
            json_encode($rs) ;
            return $this->response->setStatusCode(200)
                            ->setJSON($rs); 
        }

    public function get_cauhoibimat()
    {
        $db = db_connect();
        $model = new M_ThongTinUser($db);

        $email      = $this->request->getVar('Email');

        $check_cauhoibimat = $model->check_cauhoibimat($email); 
        if($check_cauhoibimat){
            $cauhoibimat = $check_cauhoibimat["CauHoiBiMat"]; 
            $UserID = $check_cauhoibimat["UserID"]; 

            $output = [
                'status' => 200,
                'message' => '',
                "CauHoiBiMat" => $cauhoibimat,
                "UserID" => $UserID

            ];
            return $this->response->setStatusCode(200)
                            ->setJSON($output);
        } else {
                $output = [
                'status' => 401,
                'message' => 'Email không tồn tại, vui lòng kiểm tra lại !!!',
            ];
            return $this->response->setStatusCode(401)
                            ->setJSON($output); 
        }         
    }

        //soos luogjw thanhf viene
    public function soLuongThanhVien()
    {
        $db = db_connect();
        $model = new M_ThongTinPhongTro($db);
        $rs = $model->get_SoLuongThanhVien();

        json_encode($rs) ;
        return $this->response->setStatusCode(200)
                        ->setJSON($rs); 
    }


        //soos luogjw baif vieets
    public function soLuongBaiViet()
    {
        $db = db_connect();
        $model = new M_ThongTinPhongTro($db);
        $rs = $model->get_SoLuongBaiViet();

        json_encode($rs) ;
        return $this->response->setStatusCode(200)
                        ->setJSON($rs); 
    }

            //soos luogjw ddansh gias
    public function soLuongDanhGia()
    {
        $db = db_connect();
        $model = new M_ThongTinPhongTro($db);
        $rs = $model->get_SoLuongDanhGia();

        json_encode($rs) ;
        return $this->response->setStatusCode(200)
                        ->setJSON($rs); 
    }

}