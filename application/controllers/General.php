<?php
class General extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('GeneralModel'));
        // $this->db->debug(true);
    }

    function getSurvey()
    {
        $filter = $this->input->get();

        $data =   $this->GeneralModel->getSurvey($filter);
        // echo json_encode(array('error' => false, 'data' => $data));
    }
}
