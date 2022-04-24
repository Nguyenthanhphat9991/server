<?php
namespace App\Controllers;

use App\Models\M_Login;
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use \Firebase\JWT\JWT;

header('Access-Control-Allow-Origin: *'); 
//header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method"); 
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE"); 
// $method = $_SERVER['REQUEST_METHOD']; 
// if($method == "OPTIONS") { die(); }
class C_Login extends ResourceController
{

    public function register()
    {
        $db = db_connect();
        $model = new M_Login($db);

        $hovaten  = $this->request->getVar('HoVaTen');
        $email   = $this->request->getVar('Email');
        $matkhau  = $this->request->getVar('MatKhau');
        $sodienthoai   = $this->request->getVar('SoDienThoai');
        $hinhdaidien  = $this->request->getVar('HinhDaiDien');
        $vaitro   = $this->request->getVar('VaiTro');
        $landaudangnhap   = $this->request->getVar('LanDauDangNhap');
 
        $dataRegister = [
            'HoVaTen' => $hovaten,
            'Email' => $email,
            'MatKhau' => $matkhau,
            'SoDienThoai' => $sodienthoai,
            'HinhDaiDien' => $hinhdaidien,
            'VaiTro' => $vaitro,
            'LanDauDangNhap' => $landaudangnhap
        ];
 
        // $register = $model->register($dataRegister); 
        $checkEmail = $model->checkEmail($dataRegister); 

        // var_dump($checkEmail);die;

        if($checkEmail){ 
            $output = [
                'status' => 400,
                'message' => 'Email đã tồn tại, vui lòng kiểm tra lại !!!'
            ];
            return $this->respond($output, 400);
            
        } else {
            $register = $model->register($dataRegister); 
            $output = [
                'status' => 200,
                'message' => 'Đăng kí thành công'
            ];
            return $this->respond($output, 200);
        }
    }

    public function privateKey()
    {
        $privateKey = <<<EOD
            -----BEGIN RSA PRIVATE KEY-----
            MIICXAIBAAKBgQC8kGa1pSjbSYZVebtTRBLxBz5H4i2p/llLCrEeQhta5kaQu/Rn
            vuER4W8oDH3+3iuIYW4VQAzyqFpwuzjkDI+17t5t0tyazyZ8JXw+KgXTxldMPEL9
            5+qVhgXvwtihXC1c5oGbRlEDvDF6Sa53rcFVsYJ4ehde/zUxo6UvS7UrBQIDAQAB
            AoGAb/MXV46XxCFRxNuB8LyAtmLDgi/xRnTAlMHjSACddwkyKem8//8eZtw9fzxz
            bWZ/1/doQOuHBGYZU8aDzzj59FZ78dyzNFoF91hbvZKkg+6wGyd/LrGVEB+Xre0J
            Nil0GReM2AHDNZUYRv+HYJPIOrB0CRczLQsgFJ8K6aAD6F0CQQDzbpjYdx10qgK1
            cP59UHiHjPZYC0loEsk7s+hUmT3QHerAQJMZWC11Qrn2N+ybwwNblDKv+s5qgMQ5
            5tNoQ9IfAkEAxkyffU6ythpg/H0Ixe1I2rd0GbF05biIzO/i77Det3n4YsJVlDck
            ZkcvY3SK2iRIL4c9yY6hlIhs+K9wXTtGWwJBAO9Dskl48mO7woPR9uD22jDpNSwe
            k90OMepTjzSvlhjbfuPN1IdhqvSJTDychRwn1kIJ7LQZgQ8fVz9OCFZ/6qMCQGOb
            qaGwHmUK6xzpUbbacnYrIM6nLSkXgOAwv7XXCojvY614ILTK3iXiLBOxPu5Eu13k
            eUz9sHyD6vkgZzjtxXECQAkp4Xerf5TGfQXGXhxIX52yH+N2LtujCdkQZjXAsGdm
            B2zNzvrlgRmgBrklMTrMYgm1NPcW+bRLGcwgW2PTvNM=
            -----END RSA PRIVATE KEY-----
            EOD;
        return $privateKey;
    }

    public function login()
    {
        $db = db_connect();
        $model = new M_Login($db);

        $email      = $this->request->getVar('Email');
        $matkhau    = $this->request->getVar('MatKhau');

        $check_login = $model->check_login($email);

        $hovaten = $check_login["HoVaTen"]; 
        $vaitro = $check_login["VaiTro"]; 
        $hinhdaidien = $check_login["HinhDaiDien"]; 
        $landaudangnhap = $check_login["LanDauDangNhap"]; 


        if($matkhau == $check_login['MatKhau'])
        {
            $secret_key = $this->privateKey();
            $issuedat_claim = time();
            $expire_claim = $issuedat_claim + 3600; 
            $token = array(
                "exp" => $expire_claim,
                // "time" => $issuedat_claim,
                "data" => array(
                    "UserID" => $check_login['UserID'],
                    "HoVaTen" => $check_login['HoVaTen'],
                    "Email" => $check_login['Email'],
                    "MatKhau" => $check_login['MatKhau'],
                    "VaiTro" => $check_login['VaiTro'],
                    "HinhDaiDien" => $check_login['HinhDaiDien'],
                    "LanDauDangNhap" => $check_login['LanDauDangNhap'],
                )
            );
 
            $token = JWT::encode($token, $secret_key);
 
            $output = [
                'status' => 200,
                'message' => 'đăng nhập thành công',
                "token" => $token,
                "HoVaTen" => $hovaten,
                "Email" => $email,
                "VaiTro" => $vaitro,
                "HinhDaiDien" => $hinhdaidien,
                "LanDauDangNhap" => $landaudangnhap,
                "expireAt" => $expire_claim
            ];
            return $this->respond($output, 200);
        } else {
            $output = [
                'status' => 401,
                'message' => 'Email hoặc mật khẩu không đúng, vui lòng kiểm tra lại !!!',
            ];
            return $this->respond($output, 401);
        }
    }


}