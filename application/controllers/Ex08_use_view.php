<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
	/controlloers/Ex07_use_view.php
	뷰 사용법
*/


class Ex08_use_view extends CI_Controller{


	public function __construct(){
		/*	생성자, 컨트롤러가 사용할 기능들 로드	*/
		parent::__construct();
	}
/*
	뷰페이지 연결
	http://localhost/Ex08_use_view
*/	

	public function index(){

		// 'application/views' 폴더를 기준으로 하위 경로를 지정.
		// 지정된 파일이 없는 경우 404 에러가 표시됨.
		$this->load->view('ex08_use_view/index');
	}

/*
	뷰에 데이터 주입하기
	http://localhost/Ex08_use_view/set_data

*/
	public function set_data(){
		// 연관 배열로  HTML코드에 전달할 데이터 구성하기
		$array_data =[
			'name'		=> '코드이그나이터',
			'language'	=> 'PHP',
			'level'		=> '중급'
		];

		// 로드할 view와 전달할 데이터 설정 (데이터는 생략 가능)
		$this->load->view('ex08_use_view/set_data',$array_data);
	}

/*
	뷰에 데이터 주입하기
	http://localhost/Ex08_use_view/set_object

*/
	public function set_object(){
		// 앞으로 로드할 뷰에 변수만 미리 등록해 놓기
		// 배열, 객체등 모두 설정 가능

		// (1) 하나씩 설정시 (키,밸류)
		$this->load->vars('address','서울시 강남구');

		// (2) 배열로 넣기

		// (3) 객체 만들어 넣기

		//빈 객체를 생성한 후 멤버변수 형태로 확장
		$object_data = new stdClass();

		$object_data->name		= '코드이그나이터';
		$object_data->language	= 'PHP';
		$object_data->level		= '중급';

		// 로드할 view와 전달할 데이터 설정 (데이터는 생략 가능)
		$this->load->view('ex08_use_view/set_object',$object_data);
	}



}