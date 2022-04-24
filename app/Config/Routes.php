<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('api', function($routes)
{

	$routes->group('phongtro',function($routes)
	{
		$routes->get('selectall','C_phongtro::SelectAll');
		$routes->get('selectone/(:any)','C_phongtro::SelectOne/$1');
		$routes->post('create','C_phongtro::Add');
		$routes->put('update/(:any)','C_phongtro::Edit/$1');
		$routes->put('user_update/(:any)','C_phongtro::User_Edit/$1');
		$routes->delete('delete/(:any)','C_phongtro::Remove/$1');
		$routes->get('chitiet/(:any)','DanhMucChoThue::chitiet/$1');
		$routes->get('timkiemphongtro/(:any)','DanhMucChoThue::timkiem/$1');
		$routes->get('thongtin/(:any)','DanhMucChoThue::get_thongtin/$1');
		$routes->get('baocao/(:any)','DanhMucChoThue::get_baocao/$1');
		$routes->get('thongtinphongtro/(:any)','DanhMucChoThue::thongtinphongtro/$1');
		$routes->get('dulieutrangchu','DanhMucChoThue::getDataToPageHome');
		$routes->get('phongtrolienquan/(:any)/(:any)' , 'DanhMucChoThue::phongtrolienquan/$1/$2');
		$routes->get('soluongbaiviet','DanhMucChoThue::soLuongBaiViet');

	});

	$routes->group('baocao',function($routes)
	{
		$routes->get('selectall','DanhMucChoThue::NoiDungBaoCao');
		$routes->get('timkiembaocao/(:any)','DanhMucChoThue::timkiembaocao/$1');
		$routes->post('create','C_BaoCao::Add');
		$routes->delete('delete/(:any)','C_BaoCao::Remove/$1');
		$routes->delete('deleteBaoCao/(:any)','DanhMucChoThue::removeBaoCao/$1');
		$routes->get('soluongdanhgia','DanhMucChoThue::soLuongDanhGia');
	});

	$routes->group('user',function($routes)
	{
		$routes->get('selectall','C_Users::SelectAll');
		$routes->get('selectone/(:any)','C_Users::SelectOne/$1');
		$routes->post('create','C_Users::Add');
		$routes->put('update/(:any)','C_Users::Edit/$1');
		$routes->put('update_to_profile/(:any)','C_Users::EditToProfileUser/$1');
		$routes->put('capnhatlandau/(:any)','C_Users::updateFirst/$1');	
		$routes->put('thaydoimatkhau/(:any)','C_Users::thayDoiMatKhau/$1');	
		$routes->delete('delete/(:any)','C_Users::Remove/$1');
		$routes->get('sobaidang/(:any)','DanhMucChoThue::SoBaiDang/$1');
		$routes->get('userQuanLy/(:any)','DanhMucChoThue::userQuanLy/$1');
		$routes->get('timkiem/(:any)','C_Users::timkiem/$1');
		$routes->delete('deletebaiviet/(:any)','DanhMucChoThue::removeBaiViet/$1');
		$routes->post('cauhoibimat','DanhMucChoThue::get_cauhoibimat');
		$routes->get('soluongthanhvien','DanhMucChoThue::soLuongThanhVien');
	});

	$routes->group('giaphong',function($routes)
	{
		$routes->get('giamdan','DanhMucChoThue::Giaphongtulondenbe');
		$routes->get('tangdan','DanhMucChoThue::Giaphongtubedenlon');
		$routes->get('timkiem/(:any)','DanhMucChoThue::Timkiem/$1');

	});
	$routes->group('dientich',function($routes)
	{
		$routes->get('giamdan','DanhMucChoThue::Dientichtulondenbe');
		$routes->get('tangdan','DanhMucChoThue::Dientichtubedenlon');

	});
	// DanhMucOGhep
	$routes->group('khuvuc',function($routes)
	{
		$routes->get('vinhhai','DanhMucChoThue::Khuvucvinhhai');//1
		$routes->get('vinhhoa','DanhMucChoThue::Khuvucvinhhoa');//2
		$routes->get('vinhnguyen','DanhMucChoThue::Khuvucvinhnguyen');//3
		$routes->get('vinhphuoc','DanhMucChoThue::Khuvucvinhphuoc');//4
		$routes->get('phuochai','DanhMucChoThue::Khuvucphuochai');//5
		$routes->get('ngochiep','DanhMucChoThue::Khuvucngochiep');//6		
		$routes->get('phuoclong','DanhMucChoThue::Khuvucphuoclong');//7
		$routes->get('phuoctan','DanhMucChoThue::Khuvucphuoctan');//8
		$routes->get('phuoctien','DanhMucChoThue::Khuvucphuoctien');//9
		$routes->get('phuongsai','DanhMucChoThue::Khuvucphuongsai');//10
		$routes->get('phuongson','DanhMucChoThue::Khuvucphuongson');//11
		$routes->get('tanlap','DanhMucChoThue::Khuvuctanlap');//12		
		$routes->get('vanthanh','DanhMucChoThue::Khuvucvanthanh');//13
		$routes->get('vanthang','DanhMucChoThue::Khuvucvanthang');//14
		$routes->get('phuochoa','DanhMucChoThue::Khuvucphuochoa');//15
		$routes->get('loctho','DanhMucChoThue::Khuvucloctho');//16
		$routes->get('vinhtho','DanhMucChoThue::Khuvucvinhtho');//17
		$routes->get('vinhtruong','DanhMucChoThue::Khuvucvinhtruong');//18
		$routes->get('xuonghuan','DanhMucChoThue::Khuvucxuonghuan');//19
	});

	$routes->group('danhmuc',function($routes)
	{
		$routes->get('oghep','DanhMucChoThue::DanhMucOGhep');
		$routes->get('canho','DanhMucChoThue::DanhMucCanHo');
		$routes->get('trobinhdan','DanhMucChoThue::DanhMucTroBinhDan');
		$routes->get('nhanguyencan','DanhMucChoThue::DanhMucNhaNguyenCan');
	});

	$routes->group('auth',function($routes)
	{
		$routes->post('dangki','C_Login::register');
		$routes->post('dangnhap','C_Login::login');
		$routes->get('home','Home::index');//class Home  nao vay  em


	});
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
