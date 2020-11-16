<?php

class Data_Record_Model extends CI_Model {

    public function her_two_rpt($data) {
        $this->db->insert('tb_her_two', $data);
    }

    public function immuno_single_line_info_record($data) {
        $this->db->insert('tbl_immuno_single_rpt', $data);
    }

    public function save_semen_analysis($data) {
        $this->db->insert('tbl_semen', $data);
    }

    public function save_bone_marrow($data) {
        $this->db->insert('tbl_bone_marrow', $data);
    }

    public function save_ascitic_fluid_info($data) {
        $this->db->insert('tbl_ascitic_fluid', $data);
    }

    public function save_urine_re_rpt($data) {
        $this->db->insert('tbl_urine_re', $data);
    }

    public function save_mt_test_info($data) {
        $this->db->insert('tbl_mt', $data);
    }

    public function Insert_UserInformation($data) {
        $this->db->insert('tbl_registration', $data);
    }

    public function add_hospital_info($data) {
//$this->db->insert('tbl_hospital_name',$data);     
        $this->db->select('*');
        $this->db->from('tbl_hospital_name');
        $this->db->where('hospital_name', $data['hospital_name']);
        // $this->db->or_where('email', $data['email']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_hospital'] = '<font color="red">Sorry Alreay Save Please Try Again..!</font>';
            $this->session->set_userdata($sdata);
            redirect("welcome/add_new_hospital");
        } else {

            $this->db->select('*');
            $this->db->from('tbl_hospital_name');
            $this->db->insert('tbl_hospital_name', $data);
            //$userid = $this->db->insert_id();
            //  return $userid;
            $sdata = array();
            $sdata['save_hospital'] = 'Successfully Saved!';
            $this->session->set_userdata($sdata);
            redirect("welcome/add_new_hospital");
        }
    }

    public function add_doctor_info($data) {
//$this->db->insert('tbl_ref_byadd_doctor',$data);     
        $this->db->select('*');
        $this->db->from('tbl_ref_byadd_doctor');
        $this->db->where('ref_by', $data['ref_by']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Doctor Name Alreadly Save....!</font>';
            $this->session->set_userdata($sdata);
            redirect("welcome/add_new_doctor");
        } else {

            $this->db->select('*');
            $this->db->from('tbl_ref_byadd_doctor');
            $this->db->insert('tbl_ref_byadd_doctor', $data);
            $sdata = array();
            $sdata['save_message'] = 'Information Successfully Added ..!!';
            $this->session->set_userdata($sdata);
            redirect("welcome/add_new_doctor");
        }
    }

    public function hospitalName_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_hospital_name');
        $this->db->order_by("hospital_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function lasthospitalName_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_hospital_name');
        $this->db->order_by("hospital_id", "desc");
        $this->db->limit(1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function UserInfo_by_search($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_registration');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function UserInfo_by_searchAll() {
        $this->db->select('*');
        $this->db->from('tbl_registration');
        //$this->db->where('user_id',$user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function lastSpecimenName_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_speciment');
        $this->db->order_by("speciment_id", "desc");
        $this->db->limit(1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function LastDoctorName_by_search() {

        $this->db->select('*');
        $this->db->from('tbl_ref_byadd_doctor');
        $this->db->order_by("ref_by_doctor_id", "desc");
        $this->db->limit(1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function erprhertwo_by_search() {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_info() {
        $this->db->select('er_result');
        $this->db->select('test_id');
        $this->db->from('tb_her_two');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_hertwo() {
        $this->db->select('her_two_result');
        $this->db->select('test_id');
        $this->db->from('tb_her_two');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_erprhertwo() {
        $this->db->select('test_id');
        $this->db->select('er_result');
        $this->db->select('pr_result');
        $this->db->select('her_two_result');
        $this->db->from('tb_her_two');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_single_rpt() {
        $this->db->select('*');
        //$this->db->select('er_result');
        //$this->db->select('pr_result');
        //$this->db->select('her_two_result');
        $this->db->from('tbl_immuno_single_rpt');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_single_rpt_er() {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_single_rpt_pr() {
        $this->db->select('pr_result');
        $this->db->from('tb_her_two');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_single_rpt_hertwo() {
        $this->db->select('her_two_result');
        $this->db->from('tb_her_two');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function search_by_hospital_name_search($hospital_name) {
        $this->db->select('*');
        $this->db->from('tbl_hospital_name');
        $this->db->where('hospital_name', $hospital_name);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchSpecimentInformation($specimen_name) {
        $this->db->select('*');
        $this->db->from('tbl_speciment');
        $this->db->limit(1);
        $this->db->where('tbl_speciment.specimen_name', $specimen_name);
        $this->db->order_by("specimen_name", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchErprhertwo($test_id) {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        $this->db->limit(1);
        $this->db->where('tb_her_two.test_id', $test_id);
        //$this->db->order_by("specimen_name", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchInfoBoneMarrow($test_id) {
        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->limit(1);
        $this->db->where('tbl_bone_marrow.test_id', $test_id);
        //$this->db->order_by("specimen_name", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchFluid($test_id = null) {
        $this->db->select('*');
        $this->db->from('tbl_ascitic_fluid');
        $this->db->limit(1);
        $this->db->where('tbl_ascitic_fluid.test_id', $test_id);
        //$this->db->order_by("specimen_name", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function Searchmtreport($test_id = null) {
        $this->db->select('*');
        $this->db->from('tbl_mt');
        $this->db->limit(1);
        $this->db->where('tbl_mt.test_id', $test_id);
        //$this->db->order_by("specimen_name", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchSingleLinetwo($test_id) {
        $this->db->select('*');
        $this->db->from('tbl_immuno_single_rpt');
        $this->db->limit(1);
        $this->db->where('tbl_immuno_single_rpt.test_id', $test_id);
        //$this->db->order_by("specimen_name", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function search_by_doctor_name_search($doctor_name) {
        $this->db->select('*');
        $this->db->from('tbl_ref_byadd_doctor');
        $this->db->where('ref_by', $doctor_name);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchSpecimentName($specimen_name) {
        $this->db->select('*');
        $this->db->from('tbl_speciment');
        $this->db->where('tbl_speciment.specimen_name', $specimen_name);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchHospitalName($hospital_name) {
        $this->db->select('*');
        $this->db->from('tbl_hospital_name');
        $this->db->where('hospital_name', $hospital_name);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchBoneMarrow($test_id_bonemarrow) {
        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->where('tbl_bone_marrow.test_id', $test_id_bonemarrow);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function SearchFluidrpt($test_id) {
        $this->db->select('*');
        $this->db->from('tbl_ascitic_fluid');
        $this->db->where('tbl_ascitic_fluid.test_id', $test_id);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchMtrpt($test_id) {
        $this->db->select('*');
        $this->db->from('tbl_mt');
        $this->db->where('tbl_mt.test_id', $test_id);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchErprhertwo_rpt($test_id) {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        $this->db->where('tb_her_two.test_id', $test_id);
        //$this->db->where('tb_her_two.her_two_id',$her_two_id);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchBoneMarrowData($test_id) {
        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->where('tbl_bone_marrow.test_id', $test_id);
        //$this->db->where('tb_her_two.her_two_id',$her_two_id);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchSingleLine_rpt($test_id) {
        $this->db->select('*');
        $this->db->from('tbl_immuno_single_rpt');
        $this->db->where('tbl_immuno_single_rpt.test_id', $test_id);
        //$this->db->where('tb_her_two.her_two_id',$her_two_id);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchDoctorName($doctor_name) {
        $this->db->select('*');
        $this->db->from('tbl_ref_byadd_doctor');
        $this->db->where('ref_by', $doctor_name);
        //$this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_erprhertwo_testid() {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function erprhertwo_by_search_pr() {
        $this->db->select('pr_result');
        $this->db->select('test_id');
        $this->db->from('tb_her_two');
        // $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function single_line_rpt_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_immuno_single_rpt');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function haematology_rpt_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_haematology_report');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function stool_rpt_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_stool_re');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function urine_rpt_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_urine_re');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function asciticFluid_rpt_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_ascitic_fluid');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function mt_rpt_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_mt');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function semen_rpt_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_semen');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function bonemarrow_rpt_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->order_by("patient_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function doctorName_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_ref_byadd_doctor');
        $this->db->order_by("ref_by", "asc");

        //$this->db->limit(15);
        //$this->db->like("ref_by_doctor_id");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function er_pr_hertwoby_search_male() {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        $this->db->where('sex', 'Male');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = count($query_result->result());
        return $result;
    }

    public function singline_data_male_search_male() {
        $this->db->select('*');
        $this->db->from('tbl_immuno_single_rpt');
        $this->db->where('sex', 'Male');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = count($query_result->result());
        return $result;
    }

    public function singline_databy_searchFemale() {
        $this->db->select('*');
        $this->db->from('tbl_immuno_single_rpt');
        $this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = count($query_result->result());
        return $result;
    }

    public function singlineby_searchtpatient() {
        $this->db->select('*');
        $this->db->from('tbl_immuno_single_rpt');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = count($query_result->result());
        return $result;
    }

    public function er_pr_hertwoby_searchFemale() {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        $this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = count($query_result->result());
        return $result;
    }

    public function er_pr_hertwoby_searchtpatient() {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = count($query_result->result());
        return $result;
    }

    public function specimenName_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_speciment');
        //  $this->db->order_by("specimen_name", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function specimenName_by_searchInformation() {
        $this->db->select('*');
        $this->db->from('tbl_speciment');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchByErprhertwoID() {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchByErprhertwoIDinfo() {

        $this->db->select('tb_her_two.her_two_id');
        $this->db->from('tb_her_two');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchByMTID() {
        $this->db->select('*');
        $this->db->from('tbl_mt');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchBySingleLineID() {
        $this->db->select('*');
        $this->db->from('tbl_immuno_single_rpt');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchBySingleLineIDinfo() {

        $this->db->select('tbl_immuno_single_rpt.immu_id');
        $this->db->from('tbl_immuno_single_rpt');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchByBonemarrowIDNfo() {
        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function SearchByfluidIDNfo() {
        $this->db->select('*');
        $this->db->from('tbl_ascitic_fluid');
        //$this->db->where('sex', 'Female');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function cd15currentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD15%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    
    
    public function CD117currentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD117%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }
    
   

    public function lcacurrentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%LCA%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function CD30currentyear($currentyear) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD30%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function CD20currentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD20%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function CD99currentyear($currentyear) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD99%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function CKcurrentyear($currentyear) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CK%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function S100currentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%S100%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function Vimentincurrentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%Vimentin%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function HMB45currentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%HMB45%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function Kappacurrentyear($currentyear) {


        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%Kappa%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function desmincurrentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%Desmin%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function Lambdacurrentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%Lambda%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function GFAFcurrentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%GFAF%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function EMAcurrentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%EMA%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function T_T_F1currentyear($currentyear) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%T.T.F1%' AND YEAR(tbl_immuno_single_rpt.current_date)='$currentyear'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_january($year) {

        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='01' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_February($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='02' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_March($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='03' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_april($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='04' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_may($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='05' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_june($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='06' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_july($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='07' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_augs($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='08' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_sep($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='09' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_octo($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='10' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_nov($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='11' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_devem($year) {
        $sql = "SELECT * FROM tb_her_two WHERE MONTH(tb_her_two.current_date)='12' "
                . "AND YEAR(tb_her_two.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    // singline report

    public function m_patient_january_singline($year) {

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='01' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_February_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='02' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_March_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='03' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_april_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='04' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_may_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='05' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_june_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='06' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_july_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='07' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_augs_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='08' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_sep_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='09' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_octo_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='10' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_nov_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='11' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_devem_singline($year) {
        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE MONTH(tbl_immuno_single_rpt.current_date)='12' "
                . "AND YEAR(tbl_immuno_single_rpt.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    // end
    public function patientinfo_groupID($date_from, $date_to, $value) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        //$sql="SELECT * FROM tb_her_two WHERE tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date'AND tb_her_two.er_result='$value'AND tb_her_two.pr_result='$value'AND tb_her_two.her_two_result='$value'";
        $sql = "SELECT * FROM tb_her_two WHERE tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date' AND tb_her_two.er_result='$value' AND tb_her_two.pr_result='$value' AND tb_her_two.her_two_result='$value'";
        $result = $this->db->query($sql);
        //$result=$this->db->get();
        return $result->result();
    }

    public function erprhertwopatientinfo_groupID($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        //$sql="SELECT * FROM tb_her_two WHERE tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date'AND tb_her_two.er_result='$value'AND tb_her_two.pr_result='$value'AND tb_her_two.her_two_result='$value'";
        $sql = "SELECT * FROM tb_her_two WHERE tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $result = $this->db->query($sql);
        //$result=$this->db->get();
        return $result->result();
    }

    public function er_comment_searcingInformation($starting_date, $ending_date, $value) {

        $student_date_range = "tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date' AND tb_her_two.er_result='$value'";
        $date_range = "tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date'";

        if ($value) {
            $this->db->select('*');
            $this->db->from('tb_her_two');
            $this->db->where($student_date_range);
            $this->db->like('tb_her_two.er_result', $value);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        } elseif ($value == "") {
            $this->db->select('*');
            $this->db->from('tb_her_two');
            $this->db->where($date_range);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        } else {
            
        }
    }

    public function byGender_er_pr_her_two_DateRange_comment_searcingInformation($date_from, $date_to, $value) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        $sql = "SELECT * FROM tb_her_two WHERE tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date' AND tb_her_two.sex='$value'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function byGender_singleLine_DateRange_comment_searcingInformation($date_from, $date_to, $value) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        $sql = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date' AND tbl_immuno_single_rpt.sex='$value'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function pr_comment_searcingInformation($date_from, $date_to, $value) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $student_date_range = "tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date' AND tb_her_two.pr_result='$value'";
        $date_range = "tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date'";

        if ($value) {
            $this->db->select('*');
            $this->db->from('tb_her_two');
            $this->db->where($student_date_range);
            $this->db->like('tb_her_two.pr_result', $value);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        } elseif ($value == "") {
            $this->db->select('*');
            $this->db->from('tb_her_two');
            $this->db->where($date_range);
            $query_result = $this->db->get();
            $result = $query_result->result();
            return $result;
        } else {
            
        }
    }

    public function hertwocomment_searcingInformation($date_from, $date_to, $value) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $sql = "SELECT * FROM tb_her_two WHERE tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date' AND tb_her_two.her_two_result='$value'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    //SELECT *
//FROM `tbl_immuno_single_rpt`
//WHERE `note` LIKE '%LCA%'
//LIMIT 0 , 30
    public function select_by_prescription_adviceinfo_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_investigation_name.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_investigation_name');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_investigation_name.manual_pid');
        $this->db->where('tbl_investigation_name.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_investigation_name.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function singleLinecomment_searcingInformationCall($value) {


        $sql = "SELECT tbl_immuno_single_rpt.note,tbl_immuno_single_rpt.test_id,tbl_immuno_single_rpt.sl_no,tbl_immuno_single_rpt.patient_name,tbl_immuno_single_rpt.age,tbl_immuno_single_rpt.sex,tbl_immuno_single_rpt.reciv_date,tbl_immuno_single_rpt.deli_date FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%{$value}%'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function singleLinecomment_searcingInformation($date_from, $date_to, $value) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //$sql = $this->db->query("SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%$value%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'");
        $sql = $this->db->query("SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%LCA%' AND tbl_immuno_single_rpt.current_date BETWEEN '2016-01-01' AND '2016-12-11'");
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function patientinfo_dateRangeInfo($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $sql = "SELECT * FROM tb_her_two WHERE tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date' ";
        $result = $this->db->query($sql);
        //$result=$this->db->get();
        return $result->result();
    }

    public function patientinfo__single_line_statment($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $CD15 = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD15%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($CD15);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentCD117($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $CD117 = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD117%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($CD117);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentCD30($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $CD30 = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD30%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($CD30);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentCD20($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $CD20 = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD20%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($CD20);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentCD_99($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $CD_99 = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CD99%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($CD_99);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentS100($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $S100 = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%S100%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($S100);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentVimentin($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $Vimentin = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%Vimentin%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($Vimentin);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentHMB45($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $HMB45 = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%HMB45%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($HMB45);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentKappa($date_from, $date_to) {


        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $Kappa = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%Kappa%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($Kappa);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentdesmin($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $desmin = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%Desmin%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($desmin);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentLambda($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $Lambda = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%Lambda%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($Lambda);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentGFAF($date_from, $date_to) {


        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $GFAF = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%GFAF%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($GFAF);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentEMA($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $EMA = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%EMA%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($EMA);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentT_T_F1($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $T_T_F1 = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%T.T.F1%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($T_T_F1);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentlca($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $LCA = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%LCA%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($LCA);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo__single_line_statmentCk($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        $ck = "SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%CK%' AND tbl_immuno_single_rpt.current_date BETWEEN '$starting_date' AND '$ending_date'";
        $query_result = $this->db->query($ck);
        $result = count($query_result->result());
        return $result;
    }

    public function patientinfo_groupID_groupBy($date_from, $date_to, $value) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $value;
        //exit();
        //$sql = "SELECT tb_her_two.current_date WHERE current_date BETWEEN '$starting_date' AND '$ending_date' ";
        $sql = "SELECT * FROM tb_her_two WHERE tb_her_two.current_date BETWEEN '$starting_date' AND '$ending_date' AND tb_her_two.er_result='$value' AND tb_her_two.pr_result='$value' AND tb_her_two.her_two_result='$value'";
        // $this->db->join('tbl_prescription_patient_info','tbl_prescription_patient_info.patient_id=tbl_patient_history_info.patient_id');
        $result = $this->db->query($sql);
        //$result=$this->db->get();
        return $result->result();
    }

    public function bonemarrowClinicalFindings_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->order_by("ce", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_doctor() {
        $this->db->select('*');
        $this->db->from('tbl_ref_byadd_doctor');
        $this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_hertwo_score() {
        $this->db->select('*');
        $this->db->from('tbl_her_two_score');
        //$this->db->order_by("ref_by", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_hospital() {
        $this->db->select('*');
        $this->db->from('tbl_hospital_name');
        $this->db->order_by("hospital_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function Searchhertworesult($Value) {
        $this->db->select('*');
        $this->db->from('tbl_her_two_score');
        $this->db->where('tbl_her_two_score.Value', $Value);
        //$this->db->order_by("tbl_her_two_score.Value", "desc");
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function SearchByBMPtInfo($test_id) {

        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->where('tbl_bone_marrow.test_id', $test_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function SearchByFindTestid($test_id) {
        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->where('tbl_bone_marrow.test_id', $test_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_specimen() {
        $this->db->select('*');
        $this->db->from('tbl_speciment');
        $this->db->order_by("specimen_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function hospitalInfo($hospital_id) {
        $this->db->select('*');
        $this->db->from('tbl_hospital_name');
        $this->db->where('hospital_id', $hospital_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function doctorInfo($ref_by_doctor_id) {
        $this->db->select('*');
        $this->db->from('tbl_ref_byadd_doctor');
        $this->db->where('ref_by_doctor_id', $ref_by_doctor_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function specimentInfo($speciment_id) {
        $this->db->select('*');
        $this->db->from('tbl_speciment');
        $this->db->where('speciment_id', $speciment_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function erprhertwo_by_searchinfo($her_two_id) {
        $this->db->select('*');
        $this->db->from('tb_her_two');
        $this->db->where('her_two_id', $her_two_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function singlieLine_by_searchinfo($immu_id) {
        $this->db->select('*');
        $this->db->from('tbl_immuno_single_rpt');
        $this->db->where('immu_id', $immu_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function bonemarrow_by_searchinfo($bone_maro_id) {
        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->where('bone_maro_id', $bone_maro_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function haematology_by_searchinfo($haematology_id) {
        $this->db->select('*');
        $this->db->from('tbl_haematology_report');
        $this->db->where('haematology_id', $haematology_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function update_stool_info($data) {
        $this->db->where('stool_id', $data['stool_id']);
        $this->db->update('tbl_stool_re', $data);
    }

    public function stool_by_searchinfo($stool_id) {
        $this->db->select('*');
        $this->db->from('tbl_stool_re');
        $this->db->where('stool_id', $stool_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function urine_by_searchinfo($urine_id) {
        $this->db->select('*');
        $this->db->from('tbl_urine_re');
        $this->db->where('urine_id', $urine_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function asciticFluid_by_searchinfo($ascitic_fluid_id) {
        $this->db->select('*');
        $this->db->from('tbl_ascitic_fluid');
        $this->db->where('ascitic_fluid_id', $ascitic_fluid_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function mt_by_searchinfo($mt_id) {
        $this->db->select('*');
        $this->db->from('tbl_mt');
        $this->db->where('mt_id', $mt_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function semen_by_searchinfo($semen_id) {
        $this->db->select('*');
        $this->db->from('tbl_semen');
        $this->db->where('semen_id', $semen_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function SearchByBoneMarrowReport($bone_maro_id) {

        $this->db->select('*');
        $this->db->from('tbl_bone_marrow');
        $this->db->where('tbl_bone_marrow.bone_maro_id', $bone_maro_id);
        $qurery_result = $this->db->get();
        $result = $qurery_result->row();
        return $result;
    }

    public function update_her_two_rpt_immuno($data) {
        $this->db->where('her_two_id', $data['her_two_id']);
        $this->db->update('tb_her_two', $data);
    }

    public function update_mt_test_info($data) {
        $this->db->where('mt_id', $data['mt_id']);
        $this->db->update('tbl_mt', $data);
    }

    public function update_urine_re_rpt($data) {
        $this->db->where('urine_id', $data['urine_id']);
        $this->db->update('tbl_urine_re', $data);
    }

    public function Update_haematology_report_data($data) {
        $this->db->where('haematology_id', $data['haematology_id']);
        $this->db->update('tbl_haematology_report', $data);
    }

    public function update_bone_marrow($data) {
        $this->db->where('bone_maro_id', $data['bone_maro_id']);
        $this->db->update('tbl_bone_marrow', $data);
    }

    public function update_immuno_single_line_info_record($data) {
        $this->db->where('immu_id', $data['immu_id']);
        $this->db->update('tbl_immuno_single_rpt', $data);
    }

    public function update_semeanalysis_info($data) {
        $this->db->where('semen_id', $data['semen_id']);
        $this->db->update('tbl_semen', $data);
    }

    //update_semeanalysis_info($data)

    public function update_hospital_info_record($data) {
        $this->db->where('hospital_id', $data['hospital_id']);
        $this->db->update('tbl_hospital_name', $data);
    }

    public function update_UserInformation($data) {
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('tbl_registration', $data);
    }

    public function update_doctor_info_record($data) {
        $this->db->where('ref_by_doctor_id', $data['ref_by_doctor_id']);
        $this->db->update('tbl_ref_byadd_doctor', $data);
    }

    public function update_ascitic_fluid_info($data) {
        $this->db->where('ascitic_fluid_id', $data['ascitic_fluid_id']);
        $this->db->update('tbl_ascitic_fluid', $data);
    }

    public function update_specimen_info_record($data) {
        $this->db->where('speciment_id', $data['speciment_id']);
        $this->db->update('tbl_speciment', $data);
    }

    public function save_haematology_report_info($data) {
        $this->db->insert('tbl_haematology_report', $data);
    }

    public function save_stool_re($data) {
        $this->db->insert('tbl_stool_re', $data);
    }

    public function save_haematology_report_info_multiple_table($hospital) {
        $this->db->insert('tbl_hospital_name', $hospital);
    }

    public function save_haematology_report_info_multiple_table_doctor($doctor) {
        $this->db->insert('tbl_ref_byadd_doctor', $doctor);
    }

    public function add_speciment_info($data) {
        $this->db->select('*');
        $this->db->from('tbl_speciment');
        $this->db->where('specimen_name', $data['specimen_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Specimen Name Alreadly Save....!</font>';
            $this->session->set_userdata($sdata);
            redirect("welcome/add_new_speciment");
        } else {

            $this->db->select('*');
            $this->db->from('tbl_speciment');
            $this->db->insert('tbl_speciment', $data);
            $sdata = array();
            $sdata['save_message'] = 'Information Successfully Added ..!!';
            $this->session->set_userdata($sdata);
            redirect("welcome/add_new_speciment");
        }
    }

}

?>