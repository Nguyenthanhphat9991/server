<?php 
namespace App\Models;
use CodeIgniter\Model;

class M_phongtro extends Model
{
    protected $table = 'PhongTro';
    protected $primaryKey = 'PhongTroID';
    protected $allowedFields = ['TieuDe','MoTa'
                                ,'HinhAnh','Gia'
                                ,'DienTich','DiaChi'
                                ,'SoDienThoai','TienIch'
                                ,'TrangThai','UserID'
                                ,'KhuVucID','DanhMucID',];
}
