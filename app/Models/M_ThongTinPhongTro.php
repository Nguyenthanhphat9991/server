<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;

class M_ThongTinPhongTro
{
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db = & $db;
    }

    //lấy thông tin giá phòng từ bé đến lớn
    function get_giaphongtubedenlon(){
        return $this->db->table('PhongTro')
                    ->orderBy('Gia', 'asc')
                    ->get()->getResult();
    }

    //lấy thông tin giá phòng từ lớn đến bé
    function get_giaphongtulondenbe(){
        return $this->db->table('PhongTro')
                    ->orderBy('Gia', 'desc')
                    ->get()->getResult();
    }

    //lấy thông tin diện tích từ lớn đến bé
    function get_dientichtulondenbe(){
        return $this->db->table('PhongTro')
                    ->orderBy('DienTich', 'desc')
                    ->get()->getResult();
    }

        //lấy thông tin diện tích từ bé đến lớn
        function get_dientichtubedenlon(){
            return $this->db->table('PhongTro')
                        ->orderBy('DienTich', 'asc')
                        ->get()->getResult();
        }



        //lấy thông tin khu vuc Vĩnh Hoà {1}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'VinhHoa'
        function get_vinhhoa(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'VinhHoa')
                        ->get()->getResult();
        }

        //lấy thông tin khu vuc Vĩnh Nguyên {2}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'vinhnguyen'
        function get_vinhnguyen(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'vinhnguyen')
                        ->get()->getResult();
        }

        //lấy thông tin khu vuc Vĩnh Phước {3}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'vinhphuoc'
        function get_vinhphuoc(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'vinhphuoc')
                        ->get()->getResult();
        }

        //lấy thông tin khu vuc Phước Hải {4}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'phuochai'
        function get_phuochai(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'phuochai')
                        ->get()->getResult();
        }

        //lấy thông tin khu vuc Ngọc Hiệp {5}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'ngochiep'
        function get_ngochiep(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'ngochiep')
                        ->get()->getResult();
        }

        //lấy thông tin khu vuc Phước Long {6}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'phuoclong'
        function get_phuoclong(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'phuoclong')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Vĩnh Hải {7}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'VinhHai'
        function get_vinhhai(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'VinhHai')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Phước Tân {8}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'phuoctan'
        function get_phuoctan(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'phuoctan')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Phước Tiến {9}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'phuoctien'
        function get_phuoctien(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'phuoctien')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Phương Sài {10}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'phuongsai'
        function get_phuongsai(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'phuongsai')
                        ->get()->getResult();
        }


        // //lấy thông tin khu vuc Phương Sơn {11}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'phuongson'
        function get_phuongson(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'phuongson')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Tân Lập {12}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'tanlap'
        function get_tanlap(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'tanlap')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Vạn Thạnh {13}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'vanthanh'
        function get_vanthanh(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'vanthanh')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Vạn Thắng {14}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'vanthang'
        function get_vanthang(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'vanthang')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Phước Hòa {15}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'phuochoa'
        function get_phuochoa(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'phuochoa')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Lộc Thọ{16}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'loctho'
        function get_loctho(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'loctho')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Vĩnh Thọ {17}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'vinhtho'
        function get_vinhtho(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'vinhtho')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Vĩnh Trường {18}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'vinhtruong'
        function get_vinhtruong(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'vinhtruong')
                        ->get()->getResult();
        }

        // //lấy thông tin khu vuc Xương Huân{19}
        // SELECT * FROM phongtro inner join KhuVuc on KhuVuc.KhuVucID = phongtro.KhuVucID where VietTat = 'xuonghuan'
        function get_xuonghuan(){
            return $this->db->table('PhongTro')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('VietTat', 'xuonghuan')
                        ->get()->getResult();
        }




        //Danh mục ở ghép
        //SELECT * FROM phongtro inner join danhmuc on phongtro.DanhMucID=danhmuc.DanhMucID WHERE viettat="oghep"
        function get_oghep(){
            return $this->db->table('PhongTro')
                        ->join('DanhMuc', 'PhongTro.DanhMucID = DanhMuc.DanhMucID')
                        ->where('VietTat', 'oghep')
                        ->get()->getResult();
        }

        //Danh mục căn hộ 
        //SELECT * FROM phongtro inner join danhmuc on phongtro.DanhMucID=danhmuc.DanhMucID WHERE viettat="canho"
        function get_canho(){
            return $this->db->table('PhongTro')
                        ->join('DanhMuc', 'PhongTro.DanhMucID = DanhMuc.DanhMucID')
                        ->where('VietTat', 'canho')
                        ->get()->getResult();
        }

        //Danh mục trọ bình dân
        //SELECT * FROM phongtro inner join danhmuc on phongtro.DanhMucID=danhmuc.DanhMucID WHERE viettat="trobinhdan"
        function get_trobinhdan(){
            return $this->db->table('PhongTro')
                        ->join('DanhMuc', 'PhongTro.DanhMucID = DanhMuc.DanhMucID')
                        ->where('VietTat', 'trobinhdan')
                        ->get()->getResult();
        }

        //Danh mục Nhà nguyên Căn
        //SELECT * FROM phongtro inner join danhmuc on phongtro.DanhMucID=danhmuc.DanhMucID WHERE viettat="nhanguyencan"
        function get_nhanguyencan(){
            return $this->db->table('PhongTro')
                        ->join('DanhMuc', 'PhongTro.DanhMucID = DanhMuc.DanhMucID')
                        ->where('VietTat', 'nhanguyencan')
                        ->get()->getResult();
        }


        function get_timkiem($keyword){
            return $this->db->table('PhongTro')
                        ->join('DanhMuc', 'PhongTro.DanhMucID = DanhMuc.DanhMucID','left')
                        ->join('KhuVuc', 'PhongTro.KhuVucID = KhuVuc.KhuVucID','left')
                        ->like('MoTa', $keyword)
                        ->orLike('TieuDe', $keyword)
                        ->orLike('Gia', $keyword)
                        ->orLike('DienTich', $keyword)
                        ->orLike('DiaChi', $keyword)
                        ->orLike('TienIch', $keyword)
                        ->orLike('TrangThai', $keyword)
                        ->orLike('TenKhuVuc', $keyword)
                        ->orLike('TenDanhMuc', $keyword)
                        ->orLike('TrangThai', $keyword)
                        // ->distinct()
                        ->get()->getResult();
        }

        function get_timkiembaocao($keyword){

            return $this->db->table('BaoCao')
                        ->join('PhongTro', 'BaoCao.PhongTroID = PhongTro.PhongTroID')
                        ->like('NoiDungBaoCao', $keyword)
                        ->orLike('HoVaTen', $keyword)
                        ->orLike('Email', $keyword)
                        ->orLike('TieuDe', $keyword)
                        ->get()->getResult();
        }

        //thông tin chi tiết phòng trọ
        // SELECT * from phongtro INNER join baocao on baocao.BaoCaoID = phongtro.BaoCaoID INNER join users on users.UserID=baocao.UserID where phongtro.PhongTroID=2
        function get_chitiet($id){
            return $this->db->table('PhongTro')
                        ->select('*')
                        ->join('BaoCao', 'PhongTro.PhongTroID = BaoCao.PhongTroID')
                        ->join('DanhMuc', 'PhongTro.DanhMucID = DanhMuc.DanhMucID')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        ->where('PhongTro.PhongTroID', $id)
                        ->get()->getResult();
        }

        function get_test(){
            return $this->db
                        ->table('PhongTro')
                        ->join('BaoCao', 'PhongTro.PhongTroID = BaoCao.PhongTroID')
                        ->where('PhongTro.PhongTroID', 1)
                        ->where('`PhongTro.UserID` in', '(select UserID from Users)')
                        ->get()->getResult();
        }


        //3 bảng phongtro danh muc khu vục
        function get_thongtin($id){
            return $this->db
                        ->table('PhongTro')
                        ->join('DanhMuc', 'PhongTro.DanhMucID = DanhMuc.DanhMucID')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')
                        // ->join('users', 'users.UserID = phongtro.UserID')
                        ->where('PhongTro.PhongTroID', $id)
                        ->get()->getResult();
        }


        function get_baocao($id){
            return $this->db
                        ->table('PhongTro')
                        ->join('BaoCao', 'PhongTro.PhongTroID = BaoCao.PhongTroID')
                        ->where('PhongTro.PhongTroID', $id)
                        ->get()->getResult();
        }

        public function checkDangKi($email){
               return $this->db
                        ->table('Users')
                        ->where('Email', $email)
                        ->get()->getResult();
        }


        function get_sobaidang($id){
            return $this->db
                        ->table('Users')->selectCount('Users.UserID','sobaidang')
                        ->join('PhongTro', 'PhongTro.UserID = Users.UserID')
                        ->where('Users.UserID', $id)
                        ->get()->getResult();
        }

        // SELECT tieude,SoDienThoai,TrangThai FROM phongtro INNER join KhuVuc on phongtro.KhuVucID=KhuVuc.KhuVucID INNER JOIN danhmuc on danhmuc.DanhMucID=phongtro.DanhMucID WHERE phongtro.UserID=1

        function userQuanLy($id){
            return $this->db
                        ->table('PhongTro')->select("PhongTro.PhongTroID,TieuDe,SoDienThoai,TrangThai,UserID")
                        ->join('KhuVuc', 'PhongTro.KhuVucID=KhuVuc.KhuVucID')
                        ->join('DanhMuc', 'DanhMuc.DanhMucID=phongtro.DanhMucID')
                        ->where('PhongTro.UserID', $id)
                        ->orderBy('PhongTro.PhongTroID', 'asc')
                        ->get()->getResult();
        }

        function baocao(){
            return $this->db
                        ->table('BaoCao')->select("BaoCaoID,Baocao.PhongTroID,NoiDungBaoCao,TieuDe,HoVaTen,Email")
                        ->join('PhongTro', 'BaoCao.PhongTroID = PhongTro.PhongTroID')
                        ->get()->getResult();
        }

        //xoá báo cáo có khi bào viết bị xoá
       function xoabaocao_phongtroID($PhongTroID){
            return $this->db
                        ->table('BaoCao')
                        ->where('PhongTroID', $PhongTroID)
                        ->delete();
        }

       //xoá bài viết có user bị xoá
       function xoabaiviet_userID($UserID){
            return $this->db
                        ->table('PhongTro')
                        ->where('UserID', $UserID)
                        ->delete();
        }

        //thông tin phòng trọ của userid
       function thongtinphongtro($UserID){
            return $this->db
                        ->table('PhongTro')
                        ->where('PhongTro.UserID', $UserID)
                        ->get()->getResult();
        }

        //hiển thị 3 item lên trang chủ
       function getDataToPageHome(){
            return $this->db
                        ->table('PhongTro')
                        ->orderBy('PhongTroID', 'desc')
                        ->limit(3)
                        ->get()->getResult();
        }

        //phongtro lieen quan
        function get_phongtrolienquan($TenKhuVuc,$TenDanhMuc){
            return $this->db->table('PhongTro')
                        ->join('DanhMuc', 'PhongTro.DanhMucID = DanhMuc.DanhMucID')
                        ->join('KhuVuc', 'KhuVuc.KhuVucID = PhongTro.KhuVucID')

                        ->like('TenKhuVuc', $TenKhuVuc)
                        ->orLike('TenDanhMuc', $TenDanhMuc)
                        ->orderBy('PhongTroID', 'desc')
                        ->limit(3)
                        ->get()->getResult();
        }

        // toongr soos luongj thanhf viene
            function get_SoLuongThanhVien(){
        return $this->db->table('Users')->selectCount('UserID')
                    ->get()->getResult();
    }
    
            // toongr soos luongj bai vieets
            function get_SoLuongBaiViet(){
        return $this->db->table('PhongTro')->selectCount('PhongTroID')
                    ->get()->getResult();
    }

                // toongr soos luongj danh gia
            function get_SoLuongDanhGia(){
        return $this->db->table('BaoCao')->selectCount('BaoCaoID')
                    ->get()->getResult();
    }
}
