<?php 
namespace App\Models;
use CodeIgniter\Model;

class M_BaoCao extends Model
{
    protected $table = 'BaoCao';
    protected $primaryKey = 'BaoCaoID';
    protected $allowedFields = ['PhongTroID','NoiDungBaoCao','HoVaTen','Email'];
}