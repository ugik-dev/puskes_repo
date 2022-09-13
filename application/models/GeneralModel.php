<?php
class GeneralModel extends CI_Model
{
    function submit_survey($data)
    {
        $this->db->insert('data', $data);
    }

    function getSurvey($data)
    {
        $this->db->select('*');
        $this->db->from('data');
        $res = $this->input->get();
        return $res->result_array();
    }
}
