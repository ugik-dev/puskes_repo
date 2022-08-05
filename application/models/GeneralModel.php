<?php
class GeneralModel extends CI_Model
{
    function submit_survey($data)
    {
        $this->db->insert('data', $data);
    }
}
