<?php
/**
 * @Author: Asher
 * @Date:   2014-12-03 15:31:08
 * @Last Modified by:   Asher
 * @Last Modified time: 2014-12-04 21:40:45
 */
class TestControl extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url');
  }

  //SuperManagerPage/index
  public function Index()
  {
   // $data['news'] = $this->news_model->get_news();
    $data['title'] = 'testpage';
    //$this->user_model->MakeUnvalid(1,-1);
    $as=array('Ext_ID' => 1 ,'ID_number' => '546415446327841541', 'Password' => 'lovelive' ,'Name' => '小李' ,'Autority' => 1, 'Credit_Rate' => 1, 'Max_Order_Sum' => 0);

    //$data["value"]=$this->user_model->setUserExtInfo(4,array("Phone"=>"12qwe3123"));
     $data["value"]=$this->user_model->getValidDateTime(1);
    $this->load->view('TestPage/Index', $data);
      
  }
}
?>