<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/application/config/upload.php 파일 생성
	파일 업로드 시 사용되는 기본 설정 정보

*/
//$nowtime = date('YmdHis');

$config['upload']['upload_path']		= './files/upload/';// 업로드 파일 저장 경로
$config['upload']['allowed_types']		= 'gif|jpg|png';	// 업로드 허용 확장자
$config['upload']['file_ext_tolower']	= TRUE;				// 확장자는 소문자로 저장
$config['upload']['overwrite']			= FALSE;			// 덮어쓰기 방지
$config['upload']['encrypt_name']		= TRUE;				// 암호화된 파일명 사용
//$config['upload']['file_name']		= 'test_'.$nowtime.'.png';		// 업로드 될 파일명 지정

// 이 설정값들을 초과하는 파일은 업로드 되지 않는다.
// --> 사용하지 않는것을 권장함.
// $config['upload']['max_size']	= '100';
// $config['upload']['max_width']	= '1024';
// $config['upload']['max_height']	= '768';