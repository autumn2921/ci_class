<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	/controlloers/Ex12_cookie.php
	쿠키
*/

class Ex12_cookie extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();

		// url -helper
		$this->load->helper('url');
	}

/*
	url 파라미터를 전달하기 위한 페이지
	http://localhost/Ex12_cookie
*/
	public function index(){
		// 저장되어 있는 쿠키값 읽어오기
		// --> config.php 에서 설정한 prefix가 있다면 명시해야함.
		$cookie_name 	= $this->config->item('cookie_prefex').'hello_cookie';
		$mycookie		= $this->input->cookie($cookie_name);

		// 읽어온 쿠키를 View에 전달하기
		$data = new stdClass();
		$data->mycookie = $mycookie;

		$this->load->view('ex12_cookie/index',$data);
	}

	public function result(){
		//사용자의 입력값 받기
		$username = $this->input->post('username');

		if($username){
			/* 1) 입력값이 있다면 쿠키 저장하기 */
			// 파라미터 설정 값
			// --> $key, $value, $time, $domain, $path
			// $domain, $path가 생략될 경우 config.php의 설정값을 사용.
			// $time이 생략될 경우 브라우저 종료시 자동 삭제.
			// --> 여기서는 60초 동안만 유지됨
			$this->input->set_cookie("hello_cookie",$username,60);
		}else{
			/* 2) 입력값이 없다면 쿠키 삭제하기 */
			// $time 값을 음수값으로 설정할 경우 쿠키 즉시 삭제함.
			$this->input->set_cookie("hello_cookie",false,-1);
		}

		// URL헬퍼에 내장된 함수를 사용하여 페이지 이동
		// --> config.php 설정파일에 base_url 값을 반드시 지정해야 함.
		// $this->load->view('ex12_cookie/index');
		redirect('ex12_cookie');
	}
}