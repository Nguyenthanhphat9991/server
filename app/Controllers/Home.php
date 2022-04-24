<?php namespace App\Controllers;

use App\Models\M_Login;
use \Firebase\JWT\JWT;
use App\Controllers\C_Login;
use CodeIgniter\RESTful\ResourceController;
header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

class Home extends ResourceController
{
    public function __construct()
    {   
        $this->protect = new C_Login();
    }
    public function index()
    {
        $secret_key = $this->protect->privateKey();
        $token = null;
        $authHeader = $this->request->getServer('HTTP_AUTHORIZATION');
        $arr = explode(" ", $authHeader);
        $token = $arr[1];
        if($token){
            try {
                $decoded = JWT::decode($token, $secret_key, array('HS256'));
                if($decoded){
                    $output = [
                        'message' => 'hoạt động được chấp nhập',
						$decoded,
                    ];
                    return $this->respond($output, 200);
                }
            } catch (\Exception $e){
                $output = [
                    'message' => 'hoạt động không được chấp nhận',
                    "error" => $e->getMessage()
                ];
                return $this->respond($output, 401);
            }
        }
    }

}