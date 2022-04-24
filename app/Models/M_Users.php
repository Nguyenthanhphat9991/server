<?php 
namespace App\Models;
use CodeIgniter\Model;

class M_Users extends Model
{
    protected $table = 'Users';
    protected $primaryKey = 'UserID';
    protected $allowedFields = ['HoVaTen','Email','MatKhau','SoDienThoai','HinhDaiDien','VaiTro','LanDauDangNhap','CauHoiBiMat'];

    
}