<?php
/**
 * @Author: Asher
 * @Date:   2014-12-01 08:45:44
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-01 16:40:10
 */


class HospitalManangerPage extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    
    //构造函数时载入数据的model类，对应models目录下的news_model.php
    //首页上会包括功公告，所以会有
    //
   //$this->load->model('notice_model');
  }

  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'HospitalManangerPage';
   // $this->load->view('templates/header', $data);
    $this->load->view('HospitalManangerPage/Index', $data);
  //  $this->load->view('templates/footer');
  }


}