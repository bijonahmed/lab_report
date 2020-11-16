<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_Record extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();

        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            redirect("login/index", 'refresh');

            //$this->load->view('home');
        }

        $this->load->model('data_record_model');
    }

//------------------------------------------------------------------- print preview function-----------------------------------
    public function print_preview_stoolre() {
        $this->load->view('print_preview/report_stool_re_print_preview');
    }

    public function print_preview_immuno_single_line() {
        $this->load->view('print_preview/final_immuno_preview_printing');
    }

    public function print_preview_print_preview_frozenSection() {
        $this->load->view('print_preview/frozen_section');
    }

    public function by_dfart_immuno_singline_rpt() {
        $this->load->view('print_preview/final_immuno_preview_printing_by_draft');
    }

    public function print_preview_mt_test() {
        $this->load->view('print_preview/mt_test_print_preview');
    }

    public function er_pr_her() {
        $this->load->view('print_preview/her_two_preview_print');
    }

    public function haematology_view() {
        $this->load->view('test');
    }

    public function semen_analysis_print_preview() {
        $this->load->view('print_preview/semen_analysis_preview_print');
    }

    public function bone_marrow_report() {
        $this->load->view('print_preview/bone_marrow_print_preview');
    }

    public function print_preview_cytospine_fluid() {
        $this->load->view('print_preview/cytology_fluid_preview');
//ER_PR_HER-2
    }

    public function by_draf_er_pr_her_two() {
        $this->load->view('print_preview/by_draft_her_two');
    }

    public function print_preview_histopathology() {
        $this->load->view('print_preview/histopathology_print_preview');
//ER_PR_HER-2
    }

    public function print_preview_cytology() {
        $this->load->view('print_preview/cytology_print_preview');
//ER_PR_HER-2
    }

    public function cetificate_info() {
        $this->load->view('print_preview/certificate_print_preview');
    }

    public function print_preview_haematology() {
        $this->load->view('print_preview/haematology_print_preview');
    }

    public function print_preview_urinere() {
        $this->load->view('print_preview/urinere_print_preview');
    }

    public function print_preview_ascitic_fluid() {
        $this->load->view('print_preview/ascitic_fluid_print_preview');
    }

    public function print_preview_anti_hbs() {
        $this->load->view('print_preview/anti_hbs_printpreview');
    }

    public function print_preview_biochemistry() {
        $this->load->view('print_preview/biochemistry_print_preview');
    }

    public function protein_electrophoresis() {
        $this->load->view('print_preview/protein_electrophoresis');
    }

// ------------------------------------------------------------------delete all function----------------------------------------------------
    public function delete_doseName($dose_id) {
        $this->data_record_model->delete_dosename_info($dose_id);
        redirect("welcome/viewdoeseInfo");
    }

// ------------------------------------------------------------------edit form all function----------------------------------------------------


    public function edit_form_urine_re($urine_id) {
        $data['urinereport'] = $this->data_record_model->urinereInfo($urine_id);
        $data['maincontent'] = $this->load->view('source_file/update_urinere', $data);
        $this->load->view('home', $data);
    }

    public function edit_hospital_name($hospital_id) {
        $data['hospital'] = $this->data_record_model->hospitalInfo($hospital_id);
        $data['maincontent'] = $this->load->view('source_file/update_hospital', $data);
        $this->load->view('home', $data);
    }

    public function edit_doctor_name($ref_by_doctor_id) {
        $data['doctorInformation'] = $this->data_record_model->doctorInfo($ref_by_doctor_id);
        $data['maincontent'] = $this->load->view('source_file/update_doctor', $data);
        $this->load->view('home', $data);
    }

    public function edit_speicment_name($speciment_id) {
        $data['speciment_Information'] = $this->data_record_model->specimentInfo($speciment_id);
        $data['maincontent'] = $this->load->view('source_file/update_specimen', $data);
        $this->load->view('home', $data);
    }

    public function edit_erprhertwo_rpt($her_two_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_erprhertwo'] = $this->data_record_model->erprhertwo_by_searchinfo($her_two_id);
        //echo '<pre>';
        //print_r($data['search_erprhertwo']);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/update_er_pr_hertwo_report', $data);
        $this->load->view('home', $data);
    }

    public function edit_sineline_rpt($immu_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_single_line'] = $this->data_record_model->singlieLine_by_searchinfo($immu_id);
        $data['maincontent'] = $this->load->view('source_file/update_singlie_line_report', $data);
        $this->load->view('home', $data);
    }

    public function edit_bonemarrow_rpt($bone_maro_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_bonemarrow'] = $this->data_record_model->bonemarrow_by_searchinfo($bone_maro_id);
        $data['maincontent'] = $this->load->view('source_file/update_bonemarrow', $data);
        $this->load->view('home', $data);
    }

    public function edit_haematology_rpt($haematology_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_haematology'] = $this->data_record_model->haematology_by_searchinfo($haematology_id);
        $data['maincontent'] = $this->load->view('source_file/update_haematology', $data);
        $this->load->view('home', $data);
    }

    public function edit_stool_rpt($stool_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_stool_re'] = $this->data_record_model->stool_by_searchinfo($stool_id);
        $data['maincontent'] = $this->load->view('source_file/update_stool_re', $data);
        $this->load->view('home', $data);
    }

    public function edit_urine_rpt($urine_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        //$data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_urine_re'] = $this->data_record_model->urine_by_searchinfo($urine_id);
        $data['maincontent'] = $this->load->view('source_file/update_urinere', $data);
        $this->load->view('home', $data);
    }

    public function edit_fluid_rpt($ascitic_fluid_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_fluid_rpt'] = $this->data_record_model->asciticFluid_by_searchinfo($ascitic_fluid_id);
        $data['maincontent'] = $this->load->view('source_file/update_asciticFluid', $data);
        $this->load->view('home', $data);
    }

    public function edit_mt_rpt($mt_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_mt_rpt'] = $this->data_record_model->mt_by_searchinfo($mt_id);
        $data['maincontent'] = $this->load->view('source_file/update_mt', $data);
        $this->load->view('home', $data);
    }

    public function edit_semen_rpt($semen_id) {
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['search_semen_rpt'] = $this->data_record_model->semen_by_searchinfo($semen_id);
        $data['maincontent'] = $this->load->view('source_file/update_semen', $data);
        $this->load->view('home', $data);
    }

    //edit_speicment_name
// ----------------------------------------------------------------------------- all report update function--------------------------------------------------


    public function find_data_bonemarrowTestid() {
        $data = array();
        $test_id_bonemarrow = $this->input->post('test_id');
        $data['BonemarrowInfo'] = $this->data_record_model->SearchBoneMarrow($test_id_bonemarrow);
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['view_bonemarrow'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        $data['view_CellINfo'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        //$data['view_data_bonemarrow_rpt']=$this->data_record_model->bonemarrow_rpt_by_search();
        $data['view_Lymphopohosis'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        $data['view_erythropohosis'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        $data['view_megakarioposis'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
//    echo '<pre>';
//    print_r($data['CallHospitalNameInfo']);
//    exit();
//    
        $data['maincontent'] = $this->load->view('source_file/bone_marrow_frm', $data);
        $this->load->view('home', $data);
    }

    public function update_data_add_hosptial() {
        $data = array();
        $data['hospital_id'] = $this->input->post('hospital_id', true);
        $data['hospital_name'] = $this->input->post('hospital_name');
        $this->data_record_model->update_hospital_info_record($data);
        redirect("welcome/add_new_hospital");
    }

    public function updateUserInformation() {

        $data = array();
        $data['user_id'] = $this->input->post('user_id', true);
        $data['full_name'] = $this->input->post('full_name');
        $data['type'] = $this->input->post('type');
        $data['mobile_number'] = $this->input->post('mobile_number');
        $data['user_name'] = $this->input->post('user_name');
        $data['password'] = $this->input->post('password');
        $this->data_record_model->update_UserInformation($data);
        redirect("welcome/ViewMyprofile");
    }

    public function SaveUserInformation() {

        $data = array();
        $data['user_id'] = $this->input->post('user_id', true);
        $data['full_name'] = $this->input->post('full_name');
        $data['type'] = $this->input->post('type');
        $data['mobile_number'] = $this->input->post('mobile_number');
        $data['user_name'] = $this->input->post('user_name');
        $data['password'] = $this->input->post('password');
        $this->data_record_model->Insert_UserInformation($data);
        redirect("welcome/add_new_user");
    }

    public function update_data_add_doctor() {
        $data = array();
        $data['ref_by_doctor_id'] = $this->input->post('ref_by_doctor_id', true);
        $data['ref_by'] = $this->input->post('ref_by');
        $this->data_record_model->update_doctor_info_record($data);
        redirect("welcome/add_new_doctor");
    }

    public function update_data_add_speciment() {
        $data = array();
        $data['speciment_id'] = $this->input->post('speciment_id', true);
        $data['specimen_name'] = $this->input->post('specimen_name');
        $this->data_record_model->update_specimen_info_record($data);
        redirect("welcome/add_new_speciment");
    }

    public function update_semen_info() {
        $data = array();
        $data['semen_id'] = $this->input->post('semen_id', true);
//$data['sei_id']=$this->input->post('sei_id',true);
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');

        $data['collection_time'] = $this->input->post('collection_time');
        $data['examination_time'] = $this->input->post('examination_time');
        $data['volume'] = $this->input->post('volume');
        $data['color'] = $this->input->post('color');
        $data['viscosity'] = $this->input->post('viscosity');
        $data['lique'] = $this->input->post('lique');
        $data['reaction'] = $this->input->post('reaction');
        $data['total_spermo'] = $this->input->post('total_spermo');
        $data['active'] = $this->input->post('active');
        $data['sluggish'] = $this->input->post('sluggish');
        $data['non_motile'] = $this->input->post('non_motile');
        $data['normal'] = $this->input->post('normal');
        $data['abnormal'] = $this->input->post('abnormal');
//$data['others_info']=$this->input->post('others_info');
        $data['epithe_cells'] = $this->input->post('epithe_cells');
        $data['epithe_count'] = $this->input->post('epithe_count');
        $data['pus_cells'] = $this->input->post('pus_cells');
        $data['pus_count'] = $this->input->post('pus_count');
        $data['macrophages'] = $this->input->post('macrophages');
        $data['macro_count'] = $this->input->post('macro_count');
        $data['blank_one'] = $this->input->post('blank_one');
        $data['blank_count'] = $this->input->post('blank_count');
        $data['blank_two'] = $this->input->post('blank_two');
        $data['two_count'] = $this->input->post('two_count');
        $data['blank_three'] = $this->input->post('blank_three');
        $data['three_count'] = $this->input->post('three_count');
        $data['comments'] = $this->input->post('comments');
        $this->data_record_model->update_semeanalysis_info($data);

// session preview 
        $semen_preview = array();
        $semen_preview['semen_id'] = $this->input->post('semen_id', true);
//$data['sei_id']=$this->input->post('sei_id',true);
        $semen_preview['test_id'] = $this->input->post('test_id');
        $semen_preview['reciv_date'] = $this->input->post('reciv_date');
        $semen_preview['deli_date'] = $this->input->post('deli_date');
        $semen_preview['patient_name'] = $this->input->post('patient_name');
        $semen_preview['age'] = $this->input->post('age');
        $semen_preview['ref_by'] = $this->input->post('ref_by');
        $semen_preview['sex'] = $this->input->post('sex');
        $semen_preview['hospital_name'] = $this->input->post('hospital_name');

        $semen_preview['collection_time'] = $this->input->post('collection_time');
        $semen_preview['examination_time'] = $this->input->post('examination_time');
        $semen_preview['volume'] = $this->input->post('volume');
        $semen_preview['color'] = $this->input->post('color');
        $semen_preview['viscosity'] = $this->input->post('viscosity');
        $semen_preview['lique'] = $this->input->post('lique');
        $semen_preview['reaction'] = $this->input->post('reaction');
        $semen_preview['total_spermo'] = $this->input->post('total_spermo');
        $semen_preview['active'] = $this->input->post('active');
        $semen_preview['sluggish'] = $this->input->post('sluggish');
        $semen_preview['non_motile'] = $this->input->post('non_motile');
        $semen_preview['normal'] = $this->input->post('normal');
        $semen_preview['abnormal'] = $this->input->post('abnormal');
//$data['others_info']=$this->input->post('others_info');
        $semen_preview['epithe_cells'] = $this->input->post('epithe_cells');
        $semen_preview['epithe_count'] = $this->input->post('epithe_count');
        $semen_preview['pus_cells'] = $this->input->post('pus_cells');
        $semen_preview['pus_count'] = $this->input->post('pus_count');
        $semen_preview['macrophages'] = $this->input->post('macrophages');
        $semen_preview['macro_count'] = $this->input->post('macro_count');
        $semen_preview['blank_one'] = $this->input->post('blank_one');
        $semen_preview['blank_count'] = $this->input->post('blank_count');
        $semen_preview['blank_two'] = $this->input->post('blank_two');
        $semen_preview['two_count'] = $this->input->post('two_count');
        $semen_preview['blank_three'] = $this->input->post('blank_three');
        $semen_preview['three_count'] = $this->input->post('three_count');
        $semen_preview['comments'] = $this->input->post('comments');
        $this->session->set_userdata($semen_preview);
        redirect("welcome/add_new_report_semen");
    }

    public function update_ascitic_fluid_info() {
        $data = array();
        $data['ascitic_fluid_id'] = $this->input->post('ascitic_fluid_id');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $doctor['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['specimen_name'] = $this->input->post('specimen_name');


        $data['quantity'] = $this->input->post('quantity');
        $data['color'] = $this->input->post('color');
        $data['apperance'] = $this->input->post('apperance');
        $data['sediment'] = $this->input->post('sediment');
        $data['on_staing'] = $this->input->post('on_staing');
        $data['glucous'] = $this->input->post('glucous');
        $data['t_protein'] = $this->input->post('t_protein');
        $data['chloride'] = $this->input->post('chloride');

        $data['parameter_one'] = $this->input->post('parameter_one');
        $data['para_one_rpt'] = $this->input->post('para_one_rpt');

        $data['parameter_two'] = $this->input->post('parameter_two');
        $data['para_two_rpt'] = $this->input->post('para_two_rpt');

        $data['parameter_three'] = $this->input->post('parameter_three');
        $data['para_three_rpt'] = $this->input->post('para_three_rpt');

        $data['parameter_four'] = $this->input->post('parameter_four');
        $data['para_four_rpt'] = $this->input->post('para_four_rpt');

        $data['parameter_five'] = $this->input->post('parameter_five');
        $data['para_five_rpt'] = $this->input->post('para_five_rpt');

        $data['zn_stain'] = $this->input->post('zn_stain');
        $data['gram_stain'] = $this->input->post('gram_stain');
        $data['neutrophils'] = $this->input->post('neutrophils');
        $data['lymphocytes'] = $this->input->post('lymphocytes');

        $data['wbc'] = $this->input->post('wbc');
        $data['rbc'] = $this->input->post('rbc');

        $this->data_record_model->update_ascitic_fluid_info($data);
        $ascitic_fluid = array();
        $ascitic_fluid['test_id'] = $this->input->post('test_id');
        $ascitic_fluid['reciv_date'] = $this->input->post('reciv_date');
        $ascitic_fluid['deli_date'] = $this->input->post('deli_date');
        $ascitic_fluid['patient_name'] = $this->input->post('patient_name');
        $ascitic_fluid['age'] = $this->input->post('age');
        $ascitic_fluid['ref_by'] = $this->input->post('ref_by');
        $ascitic_fluid['sex'] = $this->input->post('sex');
        $ascitic_fluid['hospital_name'] = $this->input->post('hospital_name');
        $ascitic_fluid['specimen_name'] = $this->input->post('specimen_name');


        $ascitic_fluid['quantity'] = $this->input->post('quantity');
        $ascitic_fluid['color'] = $this->input->post('color');
        $ascitic_fluid['apperance'] = $this->input->post('apperance');
        $ascitic_fluid['sediment'] = $this->input->post('sediment');
        $ascitic_fluid['on_staing'] = $this->input->post('on_staing');
        $ascitic_fluid['glucous'] = $this->input->post('glucous');
        $ascitic_fluid['t_protein'] = $this->input->post('t_protein');
        $ascitic_fluid['chloride'] = $this->input->post('chloride');

        $ascitic_fluid['parameter_one'] = $this->input->post('parameter_one');
        $ascitic_fluid['para_one_rpt'] = $this->input->post('para_one_rpt');

        $ascitic_fluid['parameter_two'] = $this->input->post('parameter_two');
        $ascitic_fluid['para_two_rpt'] = $this->input->post('para_two_rpt');

        $ascitic_fluid['parameter_three'] = $this->input->post('parameter_three');
        $ascitic_fluid['para_three_rpt'] = $this->input->post('para_three_rpt');

        $data['parameter_four'] = $this->input->post('parameter_four');
        $data['para_four_rpt'] = $this->input->post('para_four_rpt');

        $ascitic_fluid['parameter_five'] = $this->input->post('parameter_five');
        $ascitic_fluid['para_five_rpt'] = $this->input->post('para_five_rpt');

        $ascitic_fluid['zn_stain'] = $this->input->post('zn_stain');
        $ascitic_fluid['gram_stain'] = $this->input->post('gram_stain');
        $ascitic_fluid['neutrophils'] = $this->input->post('neutrophils');
        $ascitic_fluid['lymphocytes'] = $this->input->post('lymphocytes');
        $ascitic_fluid['wbc'] = $this->input->post('wbc');
        $ascitic_fluid['rbc'] = $this->input->post('rbc');
        $this->session->set_userdata($ascitic_fluid);
        redirect("welcome/add_new_fluid_report");
    }

    public function update_haematology_info() {
        $data = array();
        $data['haematology_id'] = $this->input->post('haematology_id', true);
        $data['sei_id'] = $this->input->post('sei_id', true);
//$data['sl_no']=$this->input->post('sl_no');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
//report start
        $data['hb'] = $this->input->post('hb');
        $data['esr'] = $this->input->post('esr');
        $data['rbc'] = $this->input->post('rbc');
        $data['platelete'] = $this->input->post('platelete');
        $data['wbc'] = $this->input->post('wbc');
        $data['ce'] = $this->input->post('ce');
        $data['rc'] = $this->input->post('rc');
        $data['neutrophils'] = $this->input->post('neutrophils');
        $data['lymphocytes'] = $this->input->post('lymphocytes');
        $data['eosinophils'] = $this->input->post('eosinophils');
        $data['monocytes'] = $this->input->post('monocytes');
        $data['basophil'] = $this->input->post('basophil');
        $data['parameter_one'] = $this->input->post('parameter_one');
        $data['parameter_two'] = $this->input->post('parameter_two');
        $data['parameter_three'] = $this->input->post('parameter_three');
        $data['parameter_four'] = $this->input->post('parameter_four');
        $data['parameter_five'] = $this->input->post('parameter_five');
        $data['para_one_rpt'] = $this->input->post('para_one_rpt');
        $data['para_two_rpt'] = $this->input->post('para_two_rpt');
        $data['para_three_rpt'] = $this->input->post('para_three_rpt');
        $data['para_four_rpt'] = $this->input->post('para_four_rpt');
        $data['para_five_rpt'] = $this->input->post('para_five_rpt');

        $data['hct'] = $this->input->post('hct');
        $data['mcv'] = $this->input->post('mcv');
        $data['mch'] = $this->input->post('mch');
        $data['mchc'] = $this->input->post('mchc');
        $data['rdw'] = $this->input->post('rdw');
        $data['mp'] = $this->input->post('mp');
        $data['pbf'] = $this->input->post('pbf');
        $data['bt_min'] = $this->input->post('bt_min');
        $data['bt_sec'] = $this->input->post('bt_sec');
        $data['ct_min'] = $this->input->post('ct_min');
        $data['ct_sec'] = $this->input->post('ct_sec');
        $this->data_record_model->Update_haematology_report_data($data);
//$sdata=array();
//$sdata['save_messages']='Information successfully save..... ';
//$this->session->set_userdata($sdata);

        $pre_haematology = array();
        $pre_haematology['haematology_id'] = $this->input->post('haematology_id', true);
        $pre_haematology['sei_id'] = $this->input->post('sei_id', true);
//$data['sl_no']=$this->input->post('sl_no');
        $pre_haematology['test_id'] = $this->input->post('test_id');
        $pre_haematology['reciv_date'] = $this->input->post('reciv_date');
        $pre_haematology['deli_date'] = $this->input->post('deli_date');
        $pre_haematology['patient_name'] = $this->input->post('patient_name');
        $pre_haematology['age'] = $this->input->post('age');
        $pre_haematology['ref_by'] = $this->input->post('ref_by');
        $pre_haematology['sex'] = $this->input->post('sex');
        $pre_haematology['hospital_name'] = $this->input->post('hospital_name');
//report start
        $pre_haematology['hb'] = $this->input->post('hb');
        $pre_haematology['esr'] = $this->input->post('esr');
        $pre_haematology['rbc'] = $this->input->post('rbc');
        $pre_haematology['platelete'] = $this->input->post('platelete');
        $pre_haematology['wbc'] = $this->input->post('wbc');
        $pre_haematology['ce'] = $this->input->post('ce');
        $pre_haematology['rc'] = $this->input->post('rc');
        $pre_haematology['neutrophils'] = $this->input->post('neutrophils');
        $pre_haematology['lymphocytes'] = $this->input->post('lymphocytes');
        $pre_haematology['eosinophils'] = $this->input->post('eosinophils');
        $pre_haematology['monocytes'] = $this->input->post('monocytes');
        $pre_haematology['basophil'] = $this->input->post('basophil');
        $pre_haematology['parameter_one'] = $this->input->post('parameter_one');
        $pre_haematology['parameter_two'] = $this->input->post('parameter_two');
        $pre_haematology['parameter_three'] = $this->input->post('parameter_three');
        $pre_haematology['parameter_four'] = $this->input->post('parameter_four');
        $pre_haematology['parameter_five'] = $this->input->post('parameter_five');
        $pre_haematology['para_one_rpt'] = $this->input->post('para_one_rpt');
        $pre_haematology['para_two_rpt'] = $this->input->post('para_two_rpt');
        $pre_haematology['para_three_rpt'] = $this->input->post('para_three_rpt');
        $pre_haematology['para_four_rpt'] = $this->input->post('para_four_rpt');
        $pre_haematology['para_five_rpt'] = $this->input->post('para_five_rpt');

        $pre_haematology['hct'] = $this->input->post('hct');
        $pre_haematology['mcv'] = $this->input->post('mcv');
        $pre_haematology['mch'] = $this->input->post('mch');
        $pre_haematology['mchc'] = $this->input->post('mchc');
        $pre_haematology['rdw'] = $this->input->post('rdw');
        $pre_haematology['mp'] = $this->input->post('mp');
        $pre_haematology['pbf'] = $this->input->post('pbf');
        $pre_haematology['bt_min'] = $this->input->post('bt_min');
        $pre_haematology['bt_sec'] = $this->input->post('bt_sec');
        $pre_haematology['ct_min'] = $this->input->post('ct_min');
        $pre_haematology['ct_sec'] = $this->input->post('ct_sec');
        $this->session->set_userdata($pre_haematology);
        redirect("welcome/haematology_rpt");
    }

    public function update_bone_marrow_info() {
        $data = array();
        $data['bone_maro_id'] = $this->input->post('bone_maro_id');
        $bone_maro_id = $this->input->post('bone_maro_id');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['ce'] = $this->input->post('ce');
        $data['hb'] = $this->input->post('hb');
        $data['wbc'] = $this->input->post('wbc');
        $data['pc'] = $this->input->post('pc');
        $data['rbc'] = $this->input->post('rbc');
        $data['esr'] = $this->input->post('esr');
        $data['neutro'] = $this->input->post('neutro');
        $data['lymphocytes'] = $this->input->post('lymphocytes');
        $data['eosinophil'] = $this->input->post('eosinophil');
        $data['monnocyte'] = $this->input->post('monnocyte');

        $data['blank_parameter_one'] = $this->input->post('blank_parameter_one');
        $data['blank_one_result'] = $this->input->post('blank_one_result');

        $data['blank_parameter_two'] = $this->input->post('blank_parameter_two');
        $data['blank_two_result'] = $this->input->post('blank_two_result');

        $data['blank_parameter_three'] = $this->input->post('blank_parameter_three');
        $data['blank_three_result'] = $this->input->post('blank_three_result');

        $data['blank_parameter_four'] = $this->input->post('blank_parameter_four');
        $data['blank_four_result'] = $this->input->post('blank_four_result');

        $data['hct'] = $this->input->post('hct');
        $data['mcv'] = $this->input->post('mcv');
        $data['mch'] = $this->input->post('mch');
        $data['mchc'] = $this->input->post('mchc');
        $data['rdw'] = $this->input->post('rdw');
        $data['pbf'] = $this->input->post('pbf');
        $data['cellularity_info'] = $this->input->post('cellularity_info');
        $data['me'] = $this->input->post('me');
        $data['granulopoiesis'] = $this->input->post('granulopoiesis');
        $data['eosinophil_bm'] = $this->input->post('eosinophil_bm');
        $data['neutrophil_bn'] = $this->input->post('neutrophil_bn');
        $data['lympho_bn'] = $this->input->post('lympho_bn');
        $data['monocyte_bn'] = $this->input->post('monocyte_bn');

        $data['basophil_bn'] = $this->input->post('basophil_bn');
        $data['matayle_bn'] = $this->input->post('matayle_bn');
        $data['lymphopoiesis_info'] = $this->input->post('lymphopoiesis_info');
        $data['granulopoiesis'] = $this->input->post('granulopoiesis');
        $data['lympho_bn'] = $this->input->post('lympho_bn');
        $data['plas_cell'] = $this->input->post('plas_cell');
        $data['blank_one_bn_para'] = $this->input->post('blank_one_bn_para');
        $data['blank_one_bn_result'] = $this->input->post('blank_one_bn_result');
        $data['blank_two_bn_para'] = $this->input->post('blank_two_bn_para');
        $data['blank_two_bn_result'] = $this->input->post('blank_two_bn_result');
        $data['blank_three_bn_para'] = $this->input->post('blank_three_bn_para');
        $data['blank_three_bn_result'] = $this->input->post('blank_three_bn_result');
        $data['erythropoesis'] = $this->input->post('erythropoesis');
        $data['megakaryopoiesis'] = $this->input->post('megakaryopoiesis');
        $data['lymphoblast_bm'] = $this->input->post('lymphoblast_bm');
        $data['blank_bm'] = $this->input->post('blank_bm');

        $data['comments'] = $this->input->post('comments');
        $data['custom_bn'] = $this->input->post('custom_bn');
//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->data_record_model->update_bone_marrow($data);

        $sdata = array();
        $sdata['save_messages'] = 'Update successfully save..... ';
        $this->session->set_userdata($sdata);

//        $bm_data = array();
//        $bm_data['bone_maro_id'] = $this->input->post('bone_maro_id');
//        $bm_data['test_id'] = $this->input->post('test_id');
//        $bm_data['reciv_date'] = $this->input->post('reciv_date');
//        $bm_data['deli_date'] = $this->input->post('deli_date');
//        $bm_data['patient_name'] = $this->input->post('patient_name');
//        $bm_data['age'] = $this->input->post('age');
//        $bm_data['ref_by'] = $this->input->post('ref_by');
//        $bm_data['sex'] = $this->input->post('sex');
//        $bm_data['hospital_name'] = $this->input->post('hospital_name');
//        $bm_data['hb'] = $this->input->post('hb');
//        $bm_data['ce'] = $this->input->post('ce');
//        $bm_data['wbc'] = $this->input->post('wbc');
//        $bm_data['pc'] = $this->input->post('pc');
//        $bm_data['rbc'] = $this->input->post('rbc');
//        $bm_data['esr'] = $this->input->post('esr');
//        $bm_data['neutro'] = $this->input->post('neutro');
//        $bm_data['lymphocytes'] = $this->input->post('lymphocytes');
//        $bm_data['eosinophil'] = $this->input->post('eosinophil');
//        $bm_data['monnocyte'] = $this->input->post('monnocyte');
//
//        $bm_data['blank_parameter_one'] = $this->input->post('blank_parameter_one');
//        $bm_data['blank_one_result'] = $this->input->post('blank_one_result');
//
//        $bm_data['blank_parameter_two'] = $this->input->post('blank_parameter_two');
//        $bm_data['blank_two_result'] = $this->input->post('blank_two_result');
//
//        $bm_data['blank_parameter_three'] = $this->input->post('blank_parameter_three');
//        $bm_data['blank_three_result'] = $this->input->post('blank_three_result');
//
//        $bm_data['blank_parameter_four'] = $this->input->post('blank_parameter_four');
//        $bm_data['blank_four_result'] = $this->input->post('blank_four_result');
//
//        $bm_data['hct'] = $this->input->post('hct');
//        $bm_data['mcv'] = $this->input->post('mcv');
//        $bm_data['mch'] = $this->input->post('mch');
//        $bm_data['mchc'] = $this->input->post('mchc');
//        $bm_data['rdw'] = $this->input->post('rdw');
//        $bm_data['pbf'] = $this->input->post('pbf');
//        $bm_data['cellularity_info'] = $this->input->post('cellularity_info');
//        $bm_data['me'] = $this->input->post('me');
//        $bm_data['granulopoiesis'] = $this->input->post('granulopoiesis');
//        $bm_data['neutrophil_bn'] = $this->input->post('neutrophil_bn');
//        $bm_data['lympho_bn'] = $this->input->post('lympho_bn');
//        $bm_data['monocyte_bn'] = $this->input->post('monocyte_bn');
//        $bm_data['basophil_bn'] = $this->input->post('basophil_bn');
//        $bm_data['matayle_bn'] = $this->input->post('matayle_bn');
//        $bm_data['eosinophil_bm'] = $this->input->post('eosinophil_bm');
//        $bm_data['lymphopoiesis_info'] = $this->input->post('lymphopoiesis_info');
//        $bm_data['lympho_bn'] = $this->input->post('lympho_bn');
//        $bm_data['plas_cell'] = $this->input->post('plas_cell');
//        $bm_data['blank_one_bn_para'] = $this->input->post('blank_one_bn_para');
//        $bm_data['blank_one_bn_result'] = $this->input->post('blank_one_bn_result');
//        $bm_data['blank_two_bn_para'] = $this->input->post('blank_two_bn_para');
//        $bm_data['blank_two_bn_result'] = $this->input->post('blank_two_bn_result');
//        $bm_data['blank_three_bn_para'] = $this->input->post('blank_three_bn_para');
//        $bm_data['blank_three_bn_result'] = $this->input->post('blank_three_bn_result');
//        $bm_data['erythropoesis'] = $this->input->post('erythropoesis');
//        $bm_data['megakaryopoiesis'] = $this->input->post('megakaryopoiesis');
//        $bm_data['lymphoblast_bm'] = $this->input->post('lymphoblast_bm');
//        $bm_data['blank_bm'] = $this->input->post('blank_bm');
//        $bm_data['comments'] = $this->input->post('comments');
//        $bm_data['custom_bn'] = $this->input->post('custom_bn');
//        $this->session->set_userdata($bm_data);
        //redirect("welcome/bone_marrow");

        $url = base_url() . 'data_record/PreviewBoneMarrowReport/' . $bone_maro_id;
        redirect($url);
    }

    public function PreviewBoneMarrowReport($bone_maro_id) {
        $data = array();
        $data['ShowBoneMarrowRpt'] = $this->data_record_model->SearchByBoneMarrowReport($bone_maro_id);
//     echo '<pre>';
//     print_r($data['ShowBoneMarrowRpt']);
//     exit();
        $data['maincontent'] = $this->load->view('source_file/PreviewBoneMarrowRpt', $data);
        $this->load->view('home', $data);
    }

    public function update_mt_test_rpt() {
        $data = array();
//$data['sl_no']=$this->input->post('sl_no');
        $data['mt_id'] = $this->input->post('mt_id');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['date_of_inoculation'] = $this->input->post('date_of_inoculation');
        $data['date_of_reporting'] = $this->input->post('date_of_reporting');
        $data['induration'] = $this->input->post('induration');
        $data['comments'] = $this->input->post('comments');
        $data['note'] = $this->input->post('note');


        $mttest = array();
        $mttest['test_id'] = $this->input->post('test_id');
        $mttest['reciv_date'] = $this->input->post('reciv_date');
        $mttest['deli_date'] = $this->input->post('deli_date');
        $mttest['patient_name'] = $this->input->post('patient_name');
        $mttest['age'] = $this->input->post('age');
        $mttest['ref_by'] = $this->input->post('ref_by');
        $mttest['sex'] = $this->input->post('sex');
        $mttest['hospital_name'] = $this->input->post('hospital_name');
        $mttest['date_of_inoculation'] = $this->input->post('date_of_inoculation');
        $mttest['date_of_reporting'] = $this->input->post('date_of_reporting');
        $mttest['induration'] = $this->input->post('induration');
        $mttest['comments'] = $this->input->post('comments');
        $mttest['note'] = $this->input->post('note');
        $this->session->set_userdata($mttest);

        $this->data_record_model->update_mt_test_info($data);
        $sdata = array();
        $sdata['save_messages'] = 'Report Successfully Add Database!';
        $this->session->set_userdata($sdata);
        redirect("welcome/add_new_mt_test");
    }

    public function upate_her_two_info() {
        $data = array();
        $data['her_two_id'] = $this->input->post('her_two_id', true);
//$data['sei_id']=$this->input->post('sei_id',true);
        $data['sl_no'] = $this->input->post('sl_no');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['specimen_name'] = $this->input->post('specimen_name');
        $data['note'] = $this->input->post('note');

        $data['er_rpt'] = $this->input->post('er_rpt');
        $data['er_score'] = $this->input->post('er_score');
        $data['pr_rpt'] = $this->input->post('pr_rpt');
        $data['pr_score'] = $this->input->post('pr_score');
        $data['her_two_rpt'] = $this->input->post('her_two_rpt');
        $data['her_two_score'] = $this->input->post('her_two_score');

        $data['er_result'] = $this->input->post('er_result');
        $data['pr_result'] = $this->input->post('pr_result');
        $data['her_two_result'] = $this->input->post('her_two_result');
        $data['rpt_noet'] = $this->input->post('rpt_noet');
        $data['kisixtyseven'] = $this->input->post('kisixtyseven');
        $this->data_record_model->update_her_two_rpt_immuno($data);

        $updatepreData['her_two_id'] = $this->input->post('her_two_id', true);
//$updatepreData['sei_id']=$this->input->post('sei_id',true);
        $updatepreData['sl_no'] = $this->input->post('sl_no', true);
        $updatepreData['test_id'] = $this->input->post('test_id', true);
        $updatepreData['reciv_date'] = $this->input->post('reciv_date', true);
        $updatepreData['deli_date'] = $this->input->post('deli_date', true);
        $updatepreData['patient_name'] = $this->input->post('patient_name', true);
        $updatepreData['age'] = $this->input->post('age', true);
        $updatepreData['ref_by'] = $this->input->post('ref_by', true);
        $updatepreData['sex'] = $this->input->post('sex', true);
        $updatepreData['hospital_name'] = $this->input->post('hospital_name', true);
        $updatepreData['specimen_name'] = $this->input->post('specimen_name', true);
        $updatepreData['note'] = $this->input->post('note', true);

        $updatepreData['er_rpt'] = $this->input->post('er_rpt', true);
        $updatepreData['er_score'] = $this->input->post('er_score', true);

        $updatepreData['pr_rpt'] = $this->input->post('pr_rpt', true);
        $updatepreData['pr_score'] = $this->input->post('pr_score', true);

        $updatepreData['her_two_rpt'] = $this->input->post('her_two_rpt', true);
        $updatepreData['her_two_score'] = $this->input->post('her_two_score', true);

        $updatepreData['er_result'] = $this->input->post('er_result', true);
        $updatepreData['pr_result'] = $this->input->post('pr_result', true);
        $updatepreData['her_two_result'] = $this->input->post('her_two_result', true);
        $updatepreData['kisixtyseven'] = $this->input->post('kisixtyseven', true);
        $updatepreData['rpt_noet'] = $this->input->post('rpt_noet', true);
        $this->session->set_userdata($updatepreData);
        redirect('welcome/add_new_report_er_pr_her_two');
    }

    public function update_immnuho_single_line_rpt() {

        $data = array();
        $data['immu_id'] = $this->input->post('immu_id', true);
//$data['sei_id']=$this->input->post('sei_id',true);
        $data['sl_no'] = $this->input->post('sl_no');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['specimen_name'] = $this->input->post('specimen_name');
        $data['note'] = $this->input->post('note');
        $data['reporting_board'] = $this->input->post('reporting_board');
        $data['add_doctor'] = $this->input->post('add_doctor');
        $this->data_record_model->update_immuno_single_line_info_record($data);
//echo '<pre>';
//print_r($data);
//EXIT();


        $sdata = array();
        $sdata['save_messages'] = 'Update successfully thankyou..... ';
        $this->session->set_userdata($sdata);

        $updatepreData['immu_id'] = $this->input->post('immu_id', true);
//$updatepreData['sei_id']=$this->input->post('sei_id',true);
        $updatepreData['sl_no'] = $this->input->post('sl_no', true);
        $updatepreData['test_id'] = $this->input->post('test_id', true);
        $updatepreData['reciv_date'] = $this->input->post('reciv_date', true);
        $updatepreData['deli_date'] = $this->input->post('deli_date', true);
        $updatepreData['patient_name'] = $this->input->post('patient_name', true);
        $updatepreData['age'] = $this->input->post('age', true);
        $updatepreData['ref_by'] = $this->input->post('ref_by', true);
        $updatepreData['sex'] = $this->input->post('sex', true);
        $updatepreData['hospital_name'] = $this->input->post('hospital_name', true);
        $updatepreData['specimen_name'] = $this->input->post('specimen_name', true);
        $updatepreData['note'] = $this->input->post('note', true);
        $updatepreData['reporting_board'] = $this->input->post('reporting_board', true);
        $updatepreData['add_doctor'] = $this->input->post('add_doctor', true);
        $this->session->set_userdata($updatepreData);
        redirect('welcome/add_new_report_singlie_line_report');
    }

    public function update_haematologyreporting() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['haematology_id'] = $this->input->post('haematology_id', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $data['reciv_date'] = $this->input->post('reciv_date', true);
        $data['deli_date'] = $this->input->post('deli_date', true);
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['age'] = $this->input->post('age', true);
        $data['ref_by'] = $this->input->post('ref_by', true);
        $data['sex'] = $this->input->post('sex', true);
        $data['hospital_name'] = $this->input->post('hospital_name', true);
        $data['hb'] = $this->input->post('hb', true);
        $data['esr'] = $this->input->post('esr', true);
        $data['rbc'] = $this->input->post('rbc', true);
        $data['platelete'] = $this->input->post('platelete', true);
        $data['wbc'] = $this->input->post('wbc', true);
        $data['ce'] = $this->input->post('ce', true);
        $data['rc'] = $this->input->post('rc', true);
        $data['neutrophils'] = $this->input->post('neutrophils', true);
        $data['lymphocytes'] = $this->input->post('lymphocytes', true);
        $data['eosinophils'] = $this->input->post('eosinophils', true);
        $data['monocytes'] = $this->input->post('monocytes', true);
        $data['basophil'] = $this->input->post('basophil', true);
        $data['parameter_one'] = $this->input->post('parameter_one', true);
        $data['parameter_two'] = $this->input->post('parameter_two', true);
        $data['parameter_three'] = $this->input->post('parameter_three', true);
        $data['parameter_four'] = $this->input->post('parameter_four', true);
        $data['parameter_five'] = $this->input->post('parameter_five', true);
        $data['para_one_rpt'] = $this->input->post('para_one_rpt', true);
        $data['para_two_rpt'] = $this->input->post('para_two_rpt', true);
        $data['para_three_rpt'] = $this->input->post('para_three_rpt', true);
        $data['para_four_rpt'] = $this->input->post('para_four_rpt', true);
        $data['para_five_rpt'] = $this->input->post('para_five_rpt', true);
        $data['hct'] = $this->input->post('hct', true);
        $data['mcv'] = $this->input->post('mcv', true);
        $data['mch'] = $this->input->post('mch', true);
        $data['mchc'] = $this->input->post('mchc', true);
        $data['rdw'] = $this->input->post('rdw', true);
        $data['mp'] = $this->input->post('mp', true);
        $data['pbf'] = $this->input->post('pbf', true);
        $data['bt_min'] = $this->input->post('bt_min', true);
        $data['bt_sec'] = $this->input->post('bt_sec', true);
        $data['ct_min'] = $this->input->post('ct_min', true);
        $data['ct_sec'] = $this->input->post('ct_sec', true);

        $this->data_record_model->update_history_Info_by_haematologyReport($data);
        $sdata = array();
        $sdata['save_message'] = 'update..';
        $this->session->set_userdata($sdata);
        $haematology = array();
        $haematology['user_id'] = $this->session->userdata('user_id');
        $haematology['patient_id'] = $this->session->userdata('patient_id');
        $haematology['test_id'] = $this->input->post('test_id', true);
        $haematology['reciv_date'] = $this->input->post('reciv_date', true);
        $haematology['deli_date'] = $this->input->post('deli_date', true);
        $haematology['patient_name'] = $this->input->post('patient_name', true);
        $haematology['age'] = $this->input->post('age', true);
        $haematology['ref_by'] = $this->input->post('ref_by', true);
        $haematology['sex'] = $this->input->post('sex', true);
        $haematology['hospital_name'] = $this->input->post('hospital_name', true);
        $haematology['hb'] = $this->input->post('hb', true);
        $haematology['esr'] = $this->input->post('esr', true);
        $haematology['rbc'] = $this->input->post('rbc', true);
        $haematology['platelete'] = $this->input->post('platelete', true);
        $haematology['wbc'] = $this->input->post('wbc', true);
        $haematology['ce'] = $this->input->post('ce', true);
        $haematology['rc'] = $this->input->post('rc', true);
        $haematology['neutrophils'] = $this->input->post('neutrophils', true);
        $haematology['lymphocytes'] = $this->input->post('lymphocytes', true);
        $haematology['eosinophils'] = $this->input->post('eosinophils', true);
        $haematology['monocytes'] = $this->input->post('monocytes', true);
        $haematology['basophil'] = $this->input->post('basophil', true);
        $haematology['parameter_one'] = $this->input->post('parameter_one', true);
        $haematology['parameter_two'] = $this->input->post('parameter_two', true);
        $haematology['parameter_three'] = $this->input->post('parameter_three', true);
        $haematology['parameter_four'] = $this->input->post('parameter_four', true);
        $haematology['parameter_five'] = $this->input->post('parameter_five', true);
        $haematology['para_one_rpt'] = $this->input->post('para_one_rpt', true);
        $haematology['para_two_rpt'] = $this->input->post('para_two_rpt', true);
        $haematology['para_three_rpt'] = $this->input->post('para_three_rpt', true);
        $haematology['para_four_rpt'] = $this->input->post('para_four_rpt', true);
        $haematology['para_five_rpt'] = $this->input->post('para_five_rpt', true);
        $haematology['hct'] = $this->input->post('hct', true);
        $haematology['mcv'] = $this->input->post('mcv', true);
        $haematology['mch'] = $this->input->post('mch', true);
        $haematology['mchc'] = $this->input->post('mchc', true);
        $haematology['rdw'] = $this->input->post('rdw', true);
        $haematology['mp'] = $this->input->post('mp', true);
        $haematology['pbf'] = $this->input->post('pbf', true);
        $haematology['bt_min'] = $this->input->post('bt_min', true);
        $haematology['bt_sec'] = $this->input->post('bt_sec', true);
        $haematology['ct_min'] = $this->input->post('ct_min', true);
        $haematology['ct_sec'] = $this->input->post('ct_sec', true);
        $this->session->set_userdata($haematology);
        redirect('welcome/haematology');
    }

    public function update_urine_re_information() {
        $data = array();
        // $data['user_id'] = $this->session->userdata('user_id');
        // $data['patient_id'] = $this->session->userdata('patient_id');
        $data['urine_id'] = $this->input->post('urine_id', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        //$data['current_date'] = $this->input->post('current_date');

        $data['quantity'] = $this->input->post('quantity');
        $data['color'] = $this->input->post('color');
        $data['apper'] = $this->input->post('apper');
        $data['sediment'] = $this->input->post('sediment');
        $data['spe_grav'] = $this->input->post('spe_grav');
        $data['reaction'] = $this->input->post('reaction');
        $data['ex_ph'] = $this->input->post('ex_ph');
        $data['albumin'] = $this->input->post('albumin');
        $data['sugur'] = $this->input->post('sugur');
        $data['others'] = $this->input->post('others');
        $data['acetone'] = $this->input->post('acetone');
        $data['pus_cells'] = $this->input->post('pus_cells');
        $data['rbcs'] = $this->input->post('rbcs');
        $data['mucus'] = $this->input->post('mucus');
        $data['pus_cast'] = $this->input->post('pus_cast');
        $data['sperat'] = $this->input->post('sperat');
        $data['wbc'] = $this->input->post('wbc');
        $data['granuloar'] = $this->input->post('granuloar');
        $data['cal_oxa'] = $this->input->post('cal_oxa');
        $data['uric_acid'] = $this->input->post('uric_acid');
        $data['tre_phs'] = $this->input->post('tre_phs');

        $data['sulph_cry'] = $this->input->post('sulph_cry');
        $data['hayline_cast'] = $this->input->post('hayline_cast');
        $data['bacteria'] = $this->input->post('bacteria');

        $data['bile_pig'] = $this->input->post('bile_pig');
        $data['urobili'] = $this->input->post('urobili');
        $data['chyle'] = $this->input->post('chyle');
        $data['b_jons_protein'] = $this->input->post('b_jons_protein');
        $data['ep_cell'] = $this->input->post('ep_cell');
        $data['bile_salt'] = $this->input->post('bile_salt');

        $data['candida'] = $this->input->post('candida');
        $data['amr_ph'] = $this->input->post('amr_ph');
        $data['urate_crys'] = $this->input->post('urate_crys');

        $this->data_record_model->update_urine_re_rpt($data);

        $update_urine_re = array();
        //$update_urine_re['user_id'] = $this->session->userdata('user_id');
        //$update_urine_re['patient_id'] = $this->session->userdata('patient_id');
        $update_urine_re['urine_id'] = $this->input->post('urine_id', true);
        $update_urine_re['test_id'] = $this->input->post('test_id', true);
        $update_urine_re['reciv_date'] = $this->input->post('reciv_date');
        $update_urine_re['deli_date'] = $this->input->post('deli_date');
        $update_urine_re['patient_name'] = $this->input->post('patient_name');
        $update_urine_re['age'] = $this->input->post('age');
        $update_urine_re['ref_by'] = $this->input->post('ref_by');
        $update_urine_re['sex'] = $this->input->post('sex');
        $update_urine_re['hospital_name'] = $this->input->post('hospital_name');
        $update_urine_re['material'] = $this->input->post('material');

        $update_urine_re['quantity'] = $this->input->post('quantity');
        $update_urine_re['color'] = $this->input->post('color');
        $update_urine_re['apper'] = $this->input->post('apper');
        $update_urine_re['sediment'] = $this->input->post('sediment');
        $update_urine_re['spe_grav'] = $this->input->post('spe_grav');
        $update_urine_re['reaction'] = $this->input->post('reaction');
        $update_urine_re['ex_ph'] = $this->input->post('ex_ph');
        $update_urine_re['albumin'] = $this->input->post('albumin');
        $update_urine_re['sugur'] = $this->input->post('sugur');
        $update_urine_re['others'] = $this->input->post('others');
        $update_urine_re['acetone'] = $this->input->post('acetone');
        $update_urine_re['pus_cells'] = $this->input->post('pus_cells');
        $update_urine_re['rbcs'] = $this->input->post('rbcs');
        $update_urine_re['mucus'] = $this->input->post('mucus');
        $update_urine_re['pus_cast'] = $this->input->post('pus_cast');
        $update_urine_re['sperat'] = $this->input->post('sperat');
        $update_urine_re['wbc'] = $this->input->post('wbc');
        $update_urine_re['granuloar'] = $this->input->post('granuloar');
        $update_urine_re['cal_oxa'] = $this->input->post('cal_oxa');
        $update_urine_re['uric_acid'] = $this->input->post('uric_acid');
        $update_urine_re['tre_phs'] = $this->input->post('tre_phs');

        $update_urine_re['sulph_cry'] = $this->input->post('sulph_cry');
        $update_urine_re['hayline_cast'] = $this->input->post('hayline_cast');
        $update_urine_re['bacteria'] = $this->input->post('bacteria');

        $update_urine_re['bile_pig'] = $this->input->post('bile_pig');
        $update_urine_re['urobili'] = $this->input->post('urobili');
        $update_urine_re['chyle'] = $this->input->post('chyle');
        $update_urine_re['b_jons_protein'] = $this->input->post('b_jons_protein');
        $update_urine_re['ep_cell'] = $this->input->post('ep_cell');
        $update_urine_re['bile_salt'] = $this->input->post('bile_salt');
        $update_urine_re['candida'] = $this->input->post('candida');
        $update_urine_re['amr_ph'] = $this->input->post('amr_ph');
        $update_urine_re['urate_crys'] = $this->input->post('urate_crys');

        $this->session->set_userdata($update_urine_re);
        redirect("welcome/urine_report");
    }

    public function update_stool_re_information() {
        $data = array();
        $data['test_id'] = $this->input->post('test_id', true);
        $data['stool_id'] = $this->input->post('stool_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['material'] = $this->input->post('material');

        $data['quantity'] = $this->input->post('quantity');
        $data['consistency'] = $this->input->post('consistency');
        $data['color'] = $this->input->post('color');
        $data['un_fp'] = $this->input->post('un_fp');
        $data['ordor'] = $this->input->post('ordor');
        $data['mucus'] = $this->input->post('mucus');
        $data['blood'] = $this->input->post('blood');
        $data['helminth'] = $this->input->post('helminth');
        $data['reaction'] = $this->input->post('reaction');
        $data['rs'] = $this->input->post('rs');
        $data['fat'] = $this->input->post('fat');
        $data['ova_al'] = $this->input->post('ova_al');
        $data['bilirubin'] = $this->input->post('bilirubin');
        $data['b_jons_protein'] = $this->input->post('b_jons_protein');
        $data['vege_cell'] = $this->input->post('vege_cell');
        $data['epithe_cells'] = $this->input->post('epithe_cells');
        $data['puss_cell'] = $this->input->post('puss_cell');
        $data['rbc'] = $this->input->post('rbc');
        $data['obt'] = $this->input->post('obt');
        $data['str_and_sterobili'] = $this->input->post('str_and_sterobili');
        $data['macrophages'] = $this->input->post('macrophages');
        $data['muscle_fibre'] = $this->input->post('muscle_fibre');
        $data['fat_globules'] = $this->input->post('fat_globules');
        $data['starch_granules'] = $this->input->post('starch_granules');
        $data['cl_crystals'] = $this->input->post('cl_crystals');
        $data['bacteria'] = $this->input->post('bacteria');
        $data['troph_giardia'] = $this->input->post('troph_giardia');
        $data['larva_of'] = $this->input->post('larva_of');
        $data['cyst_of_giardia'] = $this->input->post('cyst_of_giardia');
        $data['cyst_of_col'] = $this->input->post('cyst_of_col');
        $data['t_hominis'] = $this->input->post('t_hominis');
        $data['blas_homins'] = $this->input->post('blas_homins');
        $data['cast'] = $this->input->post('cast');
        $data['fusifo_bacili'] = $this->input->post('fusifo_bacili');
        $data['candida'] = $this->input->post('candida');
        $this->data_record_model->update_stool_info($data);

        $updateStool = array();
        $updateStool['test_id'] = $this->input->post('test_id', true);
        $updateStool['stool_id'] = $this->input->post('stool_id', true);
        $updateStool['reciv_date'] = $this->input->post('reciv_date');
        $updateStool['deli_date'] = $this->input->post('deli_date');
        $updateStool['patient_name'] = $this->input->post('patient_name');
        $updateStool['age'] = $this->input->post('age');
        $updateStool['ref_by'] = $this->input->post('ref_by');
        $updateStool['sex'] = $this->input->post('sex');
        $updateStool['hospital_name'] = $this->input->post('hospital_name');
        $updateStool['material'] = $this->input->post('material');

        $updateStool['quantity'] = $this->input->post('quantity');
        $updateStool['consistency'] = $this->input->post('consistency');
        $updateStool['color'] = $this->input->post('color');
        $updateStool['un_fp'] = $this->input->post('un_fp');
        $updateStool['ordor'] = $this->input->post('ordor');
        $updateStool['mucus'] = $this->input->post('mucus');
        $updateStool['blood'] = $this->input->post('blood');
        $updateStool['helminth'] = $this->input->post('helminth');
        $updateStool['reaction'] = $this->input->post('reaction');
        $updateStool['rs'] = $this->input->post('rs');
        $updateStool['fat'] = $this->input->post('fat');
        $updateStool['ova_al'] = $this->input->post('ova_al');
        $updateStool['bilirubin'] = $this->input->post('bilirubin');
        $updateStool['b_jons_protein'] = $this->input->post('b_jons_protein');
        $updateStool['vege_cell'] = $this->input->post('vege_cell');
        $updateStool['epithe_cells'] = $this->input->post('epithe_cells');
        $updateStool['puss_cell'] = $this->input->post('puss_cell');
        $updateStool['rbc'] = $this->input->post('rbc');
        $updateStool['obt'] = $this->input->post('obt');
        //$updateStool['str_and_sterobili']=$this->input->post('str_and_sterobili');
        $updateStool['str_and_sterobili'] = $this->input->post('str_and_sterobili');
        $updateStool['macrophages'] = $this->input->post('macrophages');
        $updateStool['muscle_fibre'] = $this->input->post('muscle_fibre');
        $updateStool['fat_globules'] = $this->input->post('fat_globules');
        $updateStool['starch_granules'] = $this->input->post('starch_granules');
        $updateStool['cl_crystals'] = $this->input->post('cl_crystals');
        $updateStool['bacteria'] = $this->input->post('bacteria');
        $updateStool['troph_giardia'] = $this->input->post('troph_giardia');
        $updateStool['larva_of'] = $this->input->post('larva_of');
        $updateStool['cyst_of_giardia'] = $this->input->post('cyst_of_giardia');
        $updateStool['cyst_of_col'] = $this->input->post('cyst_of_col');
        $updateStool['t_hominis'] = $this->input->post('t_hominis');
        $updateStool['blas_homins'] = $this->input->post('blas_homins');
        $updateStool['cast'] = $this->input->post('cast');
        $updateStool['fusifo_bacili'] = $this->input->post('fusifo_bacili');
        $updateStool['candida'] = $this->input->post('candida');
        $this->session->set_userdata($updateStool);
        redirect("welcome/stool_report");
    }

    public function update_radiology_report() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['radiology_id'] = $this->input->post('radiology_id', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['report_description'] = $this->input->post('report_description');

        $radiology_reportinfo = array();
        $radiology_reportinfo['user_id'] = $this->session->userdata('user_id');
        $radiology_reportinfo['patient_id'] = $this->session->userdata('patient_id');
        $radiology_reportinfo['current_date'] = $this->input->post('current_date', true);
        $radiology_reportinfo['test_id'] = $this->input->post('test_id', true);
        $radiology_reportinfo['reciv_date'] = $this->input->post('reciv_date');
        $radiology_reportinfo['deli_date'] = $this->input->post('deli_date');
        $radiology_reportinfo['patient_name'] = $this->input->post('patient_name');
        $radiology_reportinfo['age'] = $this->input->post('age');
        $radiology_reportinfo['ref_by'] = $this->input->post('ref_by');
        $radiology_reportinfo['sex'] = $this->input->post('sex');
        $radiology_reportinfo['hospital_name'] = $this->input->post('hospital_name');
        $radiology_reportinfo['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($radiology_reportinfo);

        $this->data_record_model->update_radiology_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully Update..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/radiology_report");
    }

    public function update_usg_report() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['usg_id'] = $this->input->post('usg_id', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['report_description'] = $this->input->post('report_description');

        $userdata = array();
        $userdata['user_id'] = $this->session->userdata('user_id');
        $userdata['patient_id'] = $this->session->userdata('patient_id');
        $userdata['current_date'] = $this->input->post('current_date', true);
        $userdata['test_id'] = $this->input->post('test_id', true);
        $userdata['reciv_date'] = $this->input->post('reciv_date');
        $userdata['deli_date'] = $this->input->post('deli_date');
        $userdata['patient_name'] = $this->input->post('patient_name');
        $userdata['age'] = $this->input->post('age');
        $userdata['ref_by'] = $this->input->post('ref_by');
        $userdata['sex'] = $this->input->post('sex');
        $userdata['hospital_name'] = $this->input->post('hospital_name');
        $userdata['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($userdata);

        $this->data_record_model->update_usg_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully Update..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/usg_report");
    }

    public function update_bonemarrow_report() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['bonemarrow_id'] = $this->input->post('bonemarrow_id', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['report_description'] = $this->input->post('report_description');
        //bonemarrow_id
        $userdata = array();
        $userdata['user_id'] = $this->session->userdata('user_id');
        $userdata['patient_id'] = $this->session->userdata('patient_id');
        $userdata['current_date'] = $this->input->post('current_date', true);
        $userdata['bonemarrow_id'] = $this->input->post('bonemarrow_id', true);
        $userdata['test_id'] = $this->input->post('test_id', true);
        $userdata['reciv_date'] = $this->input->post('reciv_date');
        $userdata['deli_date'] = $this->input->post('deli_date');
        $userdata['patient_name'] = $this->input->post('patient_name');
        $userdata['age'] = $this->input->post('age');
        $userdata['ref_by'] = $this->input->post('ref_by');
        $userdata['sex'] = $this->input->post('sex');
        $userdata['hospital_name'] = $this->input->post('hospital_name');
        $userdata['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($userdata);

        $this->data_record_model->update_bonemarrow_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully Update..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/bone_marrow");
    }

    public function update_customized_physical_fidings() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        $data['customized_physical_findings_name'] = $this->input->post('customized_physical_findings_name', true);
        $this->data_record_model->update_customizedPhysicalFindings($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_physicalfindings');
    }

    public function update_new_user_name() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['type'] = $this->input->post('type', true);
        $data['name'] = $this->input->post('name', true);
        $data['cell_number	'] = $this->input->post('cell_number', true);
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);
        $data['address'] = $this->input->post('address', true);
        $this->data_record_model->update_new_user_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Thankyou for Registration Updateing';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_new_user_Info');
    }

    // -------------------------------------------------------------------------\all save function ------------------------------------------------------------
    public function save_data_add_hosptial() {
        $data = array();
        $data['hospital_name'] = $this->input->post('hospital_name');
        $this->data_record_model->add_hospital_info($data);
        $sdata = array();
        $sdata['save_hospital'] = 'Information Successfully Added thankyou!';
        $this->session->set_userdata($sdata);

        redirect("welcome/add_new_hospital");
    }

    public function save_data_add_doctor() {
        $data = array();
        $data['ref_by'] = $this->input->post('ref_by', true);
        $this->data_record_model->add_doctor_info($data);
        $sdata = array();
        $sdata['save_message'] = 'Information Successfully Added Doctor Name..thankyou!';
        $this->session->set_userdata($sdata);
        redirect("welcome/add_doctor_info");
    }

    public function save_data_speciment_name() {
        $data = array();
        $data['specimen_name'] = $this->input->post('specimen_name', true);
        $this->data_record_model->add_speciment_info($data);
        $sdata = array();
        $sdata['save_message'] = 'Information Successfully Added Doctor Name..thankyou!';
        $this->session->set_userdata($sdata);
        redirect("welcome/add_new_speciment");
    }

    public function save_stool_re() {
        $data = array();
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['material'] = $this->input->post('material');

        $data['quantity'] = $this->input->post('quantity');
        $data['consistency'] = $this->input->post('consistency');
        $data['color'] = $this->input->post('color');
        $data['un_fp'] = $this->input->post('un_fp');
        $data['ordor'] = $this->input->post('ordor');
        $data['mucus'] = $this->input->post('mucus');
        $data['blood'] = $this->input->post('blood');
        $data['helminth'] = $this->input->post('helminth');
        $data['reaction'] = $this->input->post('reaction');
        $data['rs'] = $this->input->post('rs');
        $data['fat'] = $this->input->post('fat');
        $data['ova_al'] = $this->input->post('ova_al');
        $data['bilirubin'] = $this->input->post('bilirubin');
        $data['b_jons_protein'] = $this->input->post('b_jons_protein');
        $data['vege_cell'] = $this->input->post('vege_cell');
        $data['epithe_cells'] = $this->input->post('epithe_cells');
        $data['puss_cell'] = $this->input->post('puss_cell');
        $data['rbc'] = $this->input->post('rbc');
        $data['obt'] = $this->input->post('obt');
        $data['str_and_sterobili'] = $this->input->post('str_and_sterobili');
        $data['macrophages'] = $this->input->post('macrophages');
        $data['muscle_fibre'] = $this->input->post('muscle_fibre');
        $data['fat_globules'] = $this->input->post('fat_globules');
        $data['starch_granules'] = $this->input->post('starch_granules');
        $data['cl_crystals'] = $this->input->post('cl_crystals');
        $data['bacteria'] = $this->input->post('bacteria');
        $data['troph_giardia'] = $this->input->post('troph_giardia');
        $data['larva_of'] = $this->input->post('larva_of');
        $data['obt'] = $this->input->post('obt');
        $data['cyst_of_giardia'] = $this->input->post('cyst_of_giardia');
        $data['cyst_of_col'] = $this->input->post('cyst_of_col');
        $data['t_hominis'] = $this->input->post('t_hominis');
        $data['blas_homins'] = $this->input->post('blas_homins');
        $data['cast'] = $this->input->post('cast');
        $data['fusifo_bacili'] = $this->input->post('fusifo_bacili');
        $data['candida'] = $this->input->post('candida');
        $this->data_record_model->save_stool_re($data);

        $sdata = array();
        $sdata['save_messages'] = 'Information successfully save..... ';
        $this->session->set_userdata($sdata);


        $stool_re = array();
        $stool_re['test_id'] = $this->input->post('test_id', true);
        $stool_re['reciv_date'] = $this->input->post('reciv_date');
        $stool_re['deli_date'] = $this->input->post('deli_date');
        $stool_re['patient_name'] = $this->input->post('patient_name');
        $stool_re['age'] = $this->input->post('age');
        $stool_re['ref_by'] = $this->input->post('ref_by');
        $stool_re['sex'] = $this->input->post('sex');
        $stool_re['hospital_name'] = $this->input->post('hospital_name');
        $stool_re['material'] = $this->input->post('material');
        $stool_re['quantity'] = $this->input->post('quantity');
        $stool_re['consistency'] = $this->input->post('consistency');
        $stool_re['color'] = $this->input->post('color');
        $stool_re['un_fp'] = $this->input->post('un_fp');
        $stool_re['ordor'] = $this->input->post('ordor');
        $stool_re['mucus'] = $this->input->post('mucus');
        $stool_re['blood'] = $this->input->post('blood');
        $stool_re['helminth'] = $this->input->post('helminth');
        $stool_re['reaction'] = $this->input->post('reaction');
        $stool_re['rs'] = $this->input->post('rs');
        $stool_re['fat'] = $this->input->post('fat');
        $stool_re['obt'] = $this->input->post('obt');
        $stool_re['ova_al'] = $this->input->post('ova_al');
        $stool_re['bilirubin'] = $this->input->post('bilirubin');
        $stool_re['b_jons_protein'] = $this->input->post('b_jons_protein');
        $stool_re['vege_cell'] = $this->input->post('vege_cell');
        $stool_re['epithe_cells'] = $this->input->post('epithe_cells');
        $stool_re['puss_cell'] = $this->input->post('puss_cell');
        $stool_re['rbc'] = $this->input->post('rbc');
        $stool_re['obt'] = $this->input->post('obt');
        $stool_re['str_and_sterobili'] = $this->input->post('str_and_sterobili');
        $stool_re['macrophages'] = $this->input->post('macrophages');
        $stool_re['muscle_fibre'] = $this->input->post('muscle_fibre');
        $stool_re['fat_globules'] = $this->input->post('fat_globules');
        $stool_re['starch_granules'] = $this->input->post('starch_granules');
        $stool_re['cl_crystals'] = $this->input->post('cl_crystals');
        $stool_re['bacteria'] = $this->input->post('bacteria');
        $stool_re['troph_giardia'] = $this->input->post('troph_giardia');
        $stool_re['larva_of'] = $this->input->post('larva_of');
        $stool_re['cyst_of_giardia'] = $this->input->post('cyst_of_giardia');
        $stool_re['cyst_of_col'] = $this->input->post('cyst_of_col');
        $stool_re['t_hominis'] = $this->input->post('t_hominis');
        $stool_re['blas_homins'] = $this->input->post('blas_homins');
        $stool_re['cast'] = $this->input->post('cast');
        $stool_re['fusifo_bacili'] = $this->input->post('fusifo_bacili');
        $stool_re['candida'] = $this->input->post('candida');
        $this->session->set_userdata($stool_re);
        redirect("welcome/stool_report");
    }

    public function save_haematology_info() {
        $data = array();
        $hospital = array();
        $doctor = array();
        $data['sei_id'] = $this->input->post('sei_id', true);
//$data['sl_no']=$this->input->post('sl_no');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $doctor['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $hospital['hospital_name'] = $this->input->post('hospital_name');
//report start
        $data['hb'] = $this->input->post('hb');
        $data['esr'] = $this->input->post('esr');
        $data['rbc'] = $this->input->post('rbc');
        $data['platelete'] = $this->input->post('platelete');
        $data['wbc'] = $this->input->post('wbc');
        $data['ce'] = $this->input->post('ce');
        $data['rc'] = $this->input->post('rc');
        $data['neutrophils'] = $this->input->post('neutrophils');
        $data['lymphocytes'] = $this->input->post('lymphocytes');
        $data['eosinophils'] = $this->input->post('eosinophils');
        $data['monocytes'] = $this->input->post('monocytes');
        $data['basophil'] = $this->input->post('basophil');
        $data['parameter_one'] = $this->input->post('parameter_one');
        $data['parameter_two'] = $this->input->post('parameter_two');
        $data['parameter_three'] = $this->input->post('parameter_three');
        $data['parameter_four'] = $this->input->post('parameter_four');
        $data['parameter_five'] = $this->input->post('parameter_five');
        $data['para_one_rpt'] = $this->input->post('para_one_rpt');
        $data['para_two_rpt'] = $this->input->post('para_two_rpt');
        $data['para_three_rpt'] = $this->input->post('para_three_rpt');
        $data['para_four_rpt'] = $this->input->post('para_four_rpt');
        $data['para_five_rpt'] = $this->input->post('para_five_rpt');

        $data['hct'] = $this->input->post('hct');
        $data['mcv'] = $this->input->post('mcv');
        $data['mch'] = $this->input->post('mch');
        $data['mchc'] = $this->input->post('mchc');
        $data['rdw'] = $this->input->post('rdw');
        $data['mp'] = $this->input->post('mp');
        $data['pbf'] = $this->input->post('pbf');
        $data['bt_min'] = $this->input->post('bt_min');
        $data['bt_sec'] = $this->input->post('bt_sec');
        $data['ct_min'] = $this->input->post('ct_min');
        $data['ct_sec'] = $this->input->post('ct_sec');
        $this->data_record_model->save_haematology_report_info($data);
        $this->data_record_model->save_haematology_report_info_multiple_table($hospital);
        $this->data_record_model->save_haematology_report_info_multiple_table_doctor($doctor);
        $sdata = array();
        $sdata['save_messages'] = 'Information successfully save..... ';
        $this->session->set_userdata($sdata);

        $preview_hae = array();
        $preview_hae['sei_id'] = $this->input->post('sei_id', true);
//$data['sl_no']=$this->input->post('sl_no');
        $preview_hae['test_id'] = $this->input->post('test_id');
        $preview_hae['reciv_date'] = $this->input->post('reciv_date');
        $preview_hae['deli_date'] = $this->input->post('deli_date');
        $preview_hae['patient_name'] = $this->input->post('patient_name');
        $preview_hae['age'] = $this->input->post('age');
        $preview_hae['ref_by'] = $this->input->post('ref_by');
        $preview_hae['sex'] = $this->input->post('sex');
        $preview_hae['hospital_name'] = $this->input->post('hospital_name');
//report start
        $preview_hae['hb'] = $this->input->post('hb');
        $preview_hae['esr'] = $this->input->post('esr');
        $preview_hae['rbc'] = $this->input->post('rbc');
        $preview_hae['platelete'] = $this->input->post('platelete');
        $preview_hae['wbc'] = $this->input->post('wbc');
        $preview_hae['ce'] = $this->input->post('ce');
        $preview_hae['rc'] = $this->input->post('rc');
        $preview_hae['neutrophils'] = $this->input->post('neutrophils');
        $preview_hae['lymphocytes'] = $this->input->post('lymphocytes');
        $preview_hae['eosinophils'] = $this->input->post('eosinophils');
        $preview_hae['monocytes'] = $this->input->post('monocytes');
        $preview_hae['basophil'] = $this->input->post('basophil');
        $preview_hae['parameter_one'] = $this->input->post('parameter_one');
        $preview_hae['parameter_two'] = $this->input->post('parameter_two');
        $preview_hae['parameter_three'] = $this->input->post('parameter_three');
        $preview_hae['parameter_four'] = $this->input->post('parameter_four');
        $preview_hae['parameter_five'] = $this->input->post('parameter_five');
        $preview_hae['para_one_rpt'] = $this->input->post('para_one_rpt');
        $preview_hae['para_two_rpt'] = $this->input->post('para_two_rpt');
        $preview_hae['para_three_rpt'] = $this->input->post('para_three_rpt');
        $preview_hae['para_four_rpt'] = $this->input->post('para_four_rpt');
        $preview_hae['para_five_rpt'] = $this->input->post('para_five_rpt');
        $preview_hae['blast'] = $this->input->post('blast');
        $preview_hae['hct'] = $this->input->post('hct');
        $preview_hae['mcv'] = $this->input->post('mcv');
        $preview_hae['mch'] = $this->input->post('mch');
        $preview_hae['mchc'] = $this->input->post('mchc');
        $preview_hae['rdw'] = $this->input->post('rdw');
        $preview_hae['mp'] = $this->input->post('mp');
        $preview_hae['pbf'] = $this->input->post('pbf');
        $preview_hae['bt_min'] = $this->input->post('bt_min');
        $preview_hae['bt_sec'] = $this->input->post('bt_sec');
        $preview_hae['ct_min'] = $this->input->post('ct_min');
        $preview_hae['ct_sec'] = $this->input->post('ct_sec');
        $this->session->set_userdata($preview_hae);
        redirect("welcome/haematology_rpt");
    }

    public function save_mt_test_rpt() {
        $data = array();
//$data['sl_no']=$this->input->post('sl_no');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['date_of_inoculation'] = $this->input->post('date_of_inoculation');
        $data['date_of_reporting'] = $this->input->post('date_of_reporting');
        $data['induration'] = $this->input->post('induration');
        $data['comments'] = $this->input->post('comments');
        $data['note'] = $this->input->post('note');


        $mttest = array();
        $mttest['test_id'] = $this->input->post('test_id');
        $mttest['reciv_date'] = $this->input->post('reciv_date');
        $mttest['deli_date'] = $this->input->post('deli_date');
        $mttest['patient_name'] = $this->input->post('patient_name');
        $mttest['age'] = $this->input->post('age');
        $mttest['ref_by'] = $this->input->post('ref_by');
        $mttest['sex'] = $this->input->post('sex');
        $mttest['hospital_name'] = $this->input->post('hospital_name');
        $mttest['date_of_inoculation'] = $this->input->post('date_of_inoculation');
        $mttest['date_of_reporting'] = $this->input->post('date_of_reporting');
        $mttest['induration'] = $this->input->post('induration');
        $mttest['comments'] = $this->input->post('comments');
        $mttest['note'] = $this->input->post('note');
        $this->session->set_userdata($mttest);

        $this->data_record_model->save_mt_test_info($data);
        $sdata = array();
        $sdata['save_messages'] = 'Report Successfully Add Database!';
        $this->session->set_userdata($sdata);
        redirect("welcome/add_new_mt_test");
    }

    public function save_ascitic_fluid_info() {
        $data = array();
//$data['sl_no']=$this->input->post('sl_no');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $doctor['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['specimen_name'] = $this->input->post('specimen_name');


        $data['quantity'] = $this->input->post('quantity');
        $data['color'] = $this->input->post('color');
        $data['apperance'] = $this->input->post('apperance');
        $data['sediment'] = $this->input->post('sediment');
        $data['on_staing'] = $this->input->post('on_staing');
        $data['glucous'] = $this->input->post('glucous');
        $data['t_protein'] = $this->input->post('t_protein');
        $data['chloride'] = $this->input->post('chloride');

        $data['parameter_one'] = $this->input->post('parameter_one');
        $data['para_one_rpt'] = $this->input->post('para_one_rpt');

        $data['parameter_two'] = $this->input->post('parameter_two');
        $data['para_two_rpt'] = $this->input->post('para_two_rpt');

        $data['parameter_three'] = $this->input->post('parameter_three');
        $data['para_three_rpt'] = $this->input->post('para_three_rpt');

        $data['parameter_four'] = $this->input->post('parameter_four');
        $data['para_four_rpt'] = $this->input->post('para_four_rpt');

        $data['parameter_five'] = $this->input->post('parameter_five');
        $data['para_five_rpt'] = $this->input->post('para_five_rpt');

        $data['zn_stain'] = $this->input->post('zn_stain');
        $data['gram_stain'] = $this->input->post('gram_stain');
        $data['neutrophils'] = $this->input->post('neutrophils');
        $data['lymphocytes'] = $this->input->post('lymphocytes');

        $data['wbc'] = $this->input->post('wbc');
        $data['rbc'] = $this->input->post('rbc');

        $this->data_record_model->save_ascitic_fluid_info($data);
        $sdata = array();
        $sdata['save_message'] = 'Report Successfully Add Database!';
        $this->session->set_userdata($sdata);

        $ascitic_fluid = array();
        $ascitic_fluid['test_id'] = $this->input->post('test_id');
        $ascitic_fluid['reciv_date'] = $this->input->post('reciv_date');
        $ascitic_fluid['deli_date'] = $this->input->post('deli_date');
        $ascitic_fluid['patient_name'] = $this->input->post('patient_name');
        $ascitic_fluid['age'] = $this->input->post('age');
        $ascitic_fluid['ref_by'] = $this->input->post('ref_by');
        $ascitic_fluid['sex'] = $this->input->post('sex');
        $ascitic_fluid['hospital_name'] = $this->input->post('hospital_name');
        $ascitic_fluid['specimen_name'] = $this->input->post('specimen_name');


        $ascitic_fluid['quantity'] = $this->input->post('quantity');
        $ascitic_fluid['color'] = $this->input->post('color');
        $ascitic_fluid['apperance'] = $this->input->post('apperance');
        $ascitic_fluid['sediment'] = $this->input->post('sediment');
        $ascitic_fluid['on_staing'] = $this->input->post('on_staing');
        $ascitic_fluid['glucous'] = $this->input->post('glucous');
        $ascitic_fluid['t_protein'] = $this->input->post('t_protein');
        $ascitic_fluid['chloride'] = $this->input->post('chloride');

        $ascitic_fluid['parameter_one'] = $this->input->post('parameter_one');
        $ascitic_fluid['para_one_rpt'] = $this->input->post('para_one_rpt');

        $ascitic_fluid['parameter_two'] = $this->input->post('parameter_two');
        $ascitic_fluid['para_two_rpt'] = $this->input->post('para_two_rpt');

        $ascitic_fluid['parameter_three'] = $this->input->post('parameter_three');
        $ascitic_fluid['para_three_rpt'] = $this->input->post('para_three_rpt');

        $ascitic_fluid['parameter_four'] = $this->input->post('parameter_four');
        $ascitic_fluid['para_four_rpt'] = $this->input->post('para_four_rpt');

        $ascitic_fluid['parameter_five'] = $this->input->post('parameter_five');
        $ascitic_fluid['para_five_rpt'] = $this->input->post('para_five_rpt');

        $ascitic_fluid['zn_stain'] = $this->input->post('zn_stain');
        $ascitic_fluid['gram_stain'] = $this->input->post('gram_stain');
        $ascitic_fluid['neutrophils'] = $this->input->post('neutrophils');
        $ascitic_fluid['lymphocytes'] = $this->input->post('lymphocytes');

        $ascitic_fluid['wbc'] = $this->input->post('wbc');
        $ascitic_fluid['rbc'] = $this->input->post('rbc');
        $this->session->set_userdata($ascitic_fluid);
        redirect("welcome/add_new_fluid_report");
    }

    public function save_bone_marrow_infoDraft() {
        $data = array();
//$cellularity_info=array();
//$granulopoiesis=array();
//$erythropoesis=array();
//$megakaryopoiesis=array();
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');

//        echo '<pre>';
//        print_r($data);
//        exit();
//        $data['ce'] = $this->input->post('ce');
//        $data['hb'] = $this->input->post('hb');
//        $data['wbc'] = $this->input->post('wbc');
//        $data['pc'] = $this->input->post('pc');
//        $data['rbc'] = $this->input->post('rbc');
//        $data['esr'] = $this->input->post('esr');
//        $data['neutro'] = $this->input->post('neutro');
//        $data['lymphocytes'] = $this->input->post('lymphocytes');
//        $data['eosinophil'] = $this->input->post('eosinophil');
//        $data['monnocyte'] = $this->input->post('monnocyte');
//
//        $data['blank_parameter_one'] = $this->input->post('blank_parameter_one');
//        $data['blank_one_result'] = $this->input->post('blank_one_result');
//
//        $data['blank_parameter_two'] = $this->input->post('blank_parameter_two');
//        $data['blank_two_result'] = $this->input->post('blank_two_result');
//
//        $data['blank_parameter_three'] = $this->input->post('blank_parameter_three');
//        $data['blank_three_result'] = $this->input->post('blank_three_result');
//
//        $data['blank_parameter_four'] = $this->input->post('blank_parameter_four');
//        $data['blank_four_result'] = $this->input->post('blank_four_result');
//
//        $data['hct'] = $this->input->post('hct');
//        $data['mcv'] = $this->input->post('mcv');
//        $data['mch'] = $this->input->post('mch');
//        $data['mchc'] = $this->input->post('mchc');
//        $data['rdw'] = $this->input->post('rdw');
//        $data['pbf'] = $this->input->post('pbf');
//        $data['cellularity_info'] = $this->input->post('cellularity_info');
//        $cellularity_info['cellularity_info'] = $this->input->post('cellularity_info');
//        $data['me'] = $this->input->post('me');
//        $data['granulopoiesis'] = $this->input->post('granulopoiesis');
//        $granulopoiesis['granulopoiesis'] = $this->input->post('granulopoiesis');
//        $data['neutrophil_bn'] = $this->input->post('neutrophil_bn');
//        $data['eosinophil_bm'] = $this->input->post('eosinophil_bm');
//        $data['lympho_bn'] = $this->input->post('lympho_bn');
//        $data['monocyte_bn'] = $this->input->post('monocyte_bn');
//        $data['basophil_bn'] = $this->input->post('basophil_bn');
//        $data['matayle_bn'] = $this->input->post('matayle_bn');
//        $data['lymphopoiesis_info'] = $this->input->post('lymphopoiesis_info');
//        $data['lympho_bn'] = $this->input->post('lympho_bn');
//        $data['plas_cell'] = $this->input->post('plas_cell');
//
//        $data['blank_one_bn_para'] = $this->input->post('blank_one_bn_para');
//        $data['blank_one_bn_result'] = $this->input->post('blank_one_bn_result');
//
//        $data['blank_two_bn_para'] = $this->input->post('blank_two_bn_para');
//        $data['blank_two_bn_result'] = $this->input->post('blank_two_bn_result');
//
//        $data['blank_three_bn_para'] = $this->input->post('blank_three_bn_para');
//        $data['blank_three_bn_result'] = $this->input->post('blank_three_bn_result');
//
//        $data['erythropoesis'] = $this->input->post('erythropoesis');
//        $erythropoesis['erythropoesis'] = $this->input->post('erythropoesis');
//        $data['megakaryopoiesis'] = $this->input->post('megakaryopoiesis');
//        $data['lymphoblast_bm'] = $this->input->post('lymphoblast_bm');
//        $data['blank_bm'] = $this->input->post('blank_bm');
//        $megakaryopoiesis['megakaryopoiesis'] = $this->input->post('megakaryopoiesis');
//
//        $data['comments'] = $this->input->post('comments');
//        $data['custom_bn'] = $this->input->post('custom_bn');
        $this->data_record_model->save_bone_marrow($data);
////$this->reporting_process_model->save_ceullularityInfoMulitipleTable($cellularity_info);
////$this->reporting_process_model->save_granulopoiesisInfoMulitipleTable($granulopoiesis);
////$this->reporting_process_model->save_erythropoiesisInfoMulitipleTable($erythropoesis);
////$this->reporting_process_model->save_megakaropoiesisInfoMulitipleTable($megakaryopoiesis);
//        $sdata = array();
//        $sdata['save_messages'] = 'Information successfully save..... ';
//        $this->session->set_userdata($sdata);
//
        $bn = array();
        $bn['test_id'] = $this->input->post('test_id');
        $bn['reciv_date'] = $this->input->post('reciv_date');
        $bn['deli_date'] = $this->input->post('deli_date');
        $bn['patient_name'] = $this->input->post('patient_name');
        $bn['age'] = $this->input->post('age');
        $bn['ref_by'] = $this->input->post('ref_by');
        $bn['sex'] = $this->input->post('sex');
        $bn['hospital_name'] = $this->input->post('hospital_name');
        $this->session->set_userdata($bn);
        redirect("welcome/BoneMarrowFormat");
    }

    public function save_bone_marrow_info() {
        $data = array();
//$cellularity_info=array();
//$granulopoiesis=array();
//$erythropoesis=array();
//$megakaryopoiesis=array();
//        $data['test_id'] = $this->input->post('test_id');
//        $data['reciv_date'] = $this->input->post('reciv_date');
//        $data['deli_date'] = $this->input->post('deli_date');
//        $data['patient_name'] = $this->input->post('patient_name');
//        $data['age'] = $this->input->post('age');
//        $data['ref_by'] = $this->input->post('ref_by');
//        $data['sex'] = $this->input->post('sex');
//        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['ce'] = $this->input->post('ce');
        $data['hb'] = $this->input->post('hb');
        $data['wbc'] = $this->input->post('wbc');
        $data['pc'] = $this->input->post('pc');
        $data['rbc'] = $this->input->post('rbc');
        $data['esr'] = $this->input->post('esr');
        $data['neutro'] = $this->input->post('neutro');
        $data['lymphocytes'] = $this->input->post('lymphocytes');
        $data['eosinophil'] = $this->input->post('eosinophil');
        $data['monnocyte'] = $this->input->post('monnocyte');

        $data['blank_parameter_one'] = $this->input->post('blank_parameter_one');
        $data['blank_one_result'] = $this->input->post('blank_one_result');

        $data['blank_parameter_two'] = $this->input->post('blank_parameter_two');
        $data['blank_two_result'] = $this->input->post('blank_two_result');

        $data['blank_parameter_three'] = $this->input->post('blank_parameter_three');
        $data['blank_three_result'] = $this->input->post('blank_three_result');

        $data['blank_parameter_four'] = $this->input->post('blank_parameter_four');
        $data['blank_four_result'] = $this->input->post('blank_four_result');

        $data['hct'] = $this->input->post('hct');
        $data['mcv'] = $this->input->post('mcv');
        $data['mch'] = $this->input->post('mch');
        $data['mchc'] = $this->input->post('mchc');
        $data['rdw'] = $this->input->post('rdw');
        $data['pbf'] = $this->input->post('pbf');
        $data['cellularity_info'] = $this->input->post('cellularity_info');
        $cellularity_info['cellularity_info'] = $this->input->post('cellularity_info');
        $data['me'] = $this->input->post('me');
        $data['granulopoiesis'] = $this->input->post('granulopoiesis');
        $granulopoiesis['granulopoiesis'] = $this->input->post('granulopoiesis');
        $data['neutrophil_bn'] = $this->input->post('neutrophil_bn');
        $data['eosinophil_bm'] = $this->input->post('eosinophil_bm');
        $data['lympho_bn'] = $this->input->post('lympho_bn');
        $data['monocyte_bn'] = $this->input->post('monocyte_bn');
        $data['basophil_bn'] = $this->input->post('basophil_bn');
        $data['matayle_bn'] = $this->input->post('matayle_bn');
        $data['lymphopoiesis_info'] = $this->input->post('lymphopoiesis_info');
        $data['lympho_bn'] = $this->input->post('lympho_bn');
        $data['plas_cell'] = $this->input->post('plas_cell');

        $data['blank_one_bn_para'] = $this->input->post('blank_one_bn_para');
        $data['blank_one_bn_result'] = $this->input->post('blank_one_bn_result');

        $data['blank_two_bn_para'] = $this->input->post('blank_two_bn_para');
        $data['blank_two_bn_result'] = $this->input->post('blank_two_bn_result');

        $data['blank_three_bn_para'] = $this->input->post('blank_three_bn_para');
        $data['blank_three_bn_result'] = $this->input->post('blank_three_bn_result');

        $data['erythropoesis'] = $this->input->post('erythropoesis');
        $erythropoesis['erythropoesis'] = $this->input->post('erythropoesis');
        $data['megakaryopoiesis'] = $this->input->post('megakaryopoiesis');
        $data['lymphoblast_bm'] = $this->input->post('lymphoblast_bm');
        $data['blank_bm'] = $this->input->post('blank_bm');
        $megakaryopoiesis['megakaryopoiesis'] = $this->input->post('megakaryopoiesis');

        $data['comments'] = $this->input->post('comments');
        $data['custom_bn'] = $this->input->post('custom_bn');
        $this->data_record_model->save_bone_marrow($data);
//$this->reporting_process_model->save_ceullularityInfoMulitipleTable($cellularity_info);
//$this->reporting_process_model->save_granulopoiesisInfoMulitipleTable($granulopoiesis);
//$this->reporting_process_model->save_erythropoiesisInfoMulitipleTable($erythropoesis);
//$this->reporting_process_model->save_megakaropoiesisInfoMulitipleTable($megakaryopoiesis);
        $sdata = array();
        $sdata['save_messages'] = 'Information successfully save..... ';
        $this->session->set_userdata($sdata);

        $bn = array();
        $bn['test_id'] = $this->input->post('test_id');
        $bn['reciv_date'] = $this->input->post('reciv_date');
        $bn['deli_date'] = $this->input->post('deli_date');
        $bn['patient_name'] = $this->input->post('patient_name');
        $bn['age'] = $this->input->post('age');
        $bn['ref_by'] = $this->input->post('ref_by');
        $bn['sex'] = $this->input->post('sex');
        $bn['hospital_name'] = $this->input->post('hospital_name');
        $bn['hb'] = $this->input->post('hb');
        $bn['wbc'] = $this->input->post('wbc');
        $bn['pc'] = $this->input->post('pc');
        $bn['rbc'] = $this->input->post('rbc');
        $bn['esr'] = $this->input->post('esr');
        $bn['neutro'] = $this->input->post('neutro');
        $bn['lymphocytes'] = $this->input->post('lymphocytes');
        $bn['eosinophil'] = $this->input->post('eosinophil');
        $bn['monnocyte'] = $this->input->post('monnocyte');

        $bn['blank_parameter_one'] = $this->input->post('blank_parameter_one');
        $bn['blank_one_result'] = $this->input->post('blank_one_result');

        $bn['blank_parameter_two'] = $this->input->post('blank_parameter_two');
        $bn['blank_two_result'] = $this->input->post('blank_two_result');

        $bn['blank_parameter_three'] = $this->input->post('blank_parameter_three');
        $bn['blank_three_result'] = $this->input->post('blank_three_result');

        $bn['blank_parameter_four'] = $this->input->post('blank_parameter_four');
        $bn['blank_four_result'] = $this->input->post('blank_four_result');

        $bn['hct'] = $this->input->post('hct');
        $bn['mcv'] = $this->input->post('mcv');
        $bn['mch'] = $this->input->post('mch');
        $bn['mchc'] = $this->input->post('mchc');
        $bn['rdw'] = $this->input->post('rdw');
        $bn['pbf'] = $this->input->post('pbf');
        $bn['cellularity_info'] = $this->input->post('cellularity_info');
        $bn['ce'] = $this->input->post('ce');
        $bn['me'] = $this->input->post('me');
        $bn['granulopoiesis'] = $this->input->post('granulopoiesis');
        $bn['neutrophil_bn'] = $this->input->post('neutrophil_bn');
        $bn['lympho_bn'] = $this->input->post('lympho_bn');
        $bn['monocyte_bn'] = $this->input->post('monocyte_bn');
        $bn['eosinophil_bm'] = $this->input->post('eosinophil_bm');
        $bn['basophil_bn'] = $this->input->post('basophil_bn');
        $bn['matayle_bn'] = $this->input->post('matayle_bn');
        $bn['lymphopoiesis_info'] = $this->input->post('lymphopoiesis_info');
        $bn['lympho_bn'] = $this->input->post('lympho_bn');
        $bn['plas_cell'] = $this->input->post('plas_cell');
        $bn['blank_one_bn_para'] = $this->input->post('blank_one_bn_para');
        $bn['blank_one_bn_result'] = $this->input->post('blank_one_bn_result');
        $bn['blank_two_bn_para'] = $this->input->post('blank_two_bn_para');
        $bn['blank_two_bn_result'] = $this->input->post('blank_two_bn_result');
        $bn['blank_three_bn_para'] = $this->input->post('blank_three_bn_para');
        $bn['blank_three_bn_result'] = $this->input->post('blank_three_bn_result');
        $bn['erythropoesis'] = $this->input->post('erythropoesis');
        $bn['granulopoiesis'] = $this->input->post('granulopoiesis');
        $bn['megakaryopoiesis'] = $this->input->post('megakaryopoiesis');
        $bn['lymphoblast_bm'] = $this->input->post('lymphoblast_bm');
        $bn['blank_bm'] = $this->input->post('blank_bm');
        $bn['comments'] = $this->input->post('comments');
        $bn['custom_bn'] = $this->input->post('custom_bn');
        $this->session->set_userdata($bn);
        redirect("welcome/bone_marrow");
    }

    public function save_her_two_info() {

        $data = array();
        //$rupa=array();
        //$bijon=array();
        //$doctor=array();
        //$data['sei_id']=$this->input->post('sei_id',true);
        $data['sl_no'] = $this->input->post('sl_no');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $doctor['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $rupa['hospital_name'] = $this->input->post('hospital_name');
        $data['specimen_name'] = $this->input->post('specimen_name');
        $bijon['specimen_name'] = $this->input->post('specimen_name');
        $data['note'] = $this->input->post('note');

        $data['current_date'] = $this->input->post('current_date');

        $data['er_rpt'] = $this->input->post('er_rpt');
        $data['er_score'] = $this->input->post('er_score');
        $data['pr_rpt'] = $this->input->post('pr_rpt');
        $data['pr_score'] = $this->input->post('pr_score');
        $data['her_two_rpt'] = $this->input->post('her_two_rpt');
        $data['her_two_score'] = $this->input->post('her_two_score');

        $data['er_result'] = $this->input->post('er_result');
        $data['pr_result'] = $this->input->post('pr_result');
        $data['kisixtyseven'] = $this->input->post('kisixtyseven');

        $data['her_two_result'] = $this->input->post('her_two_result');

        $data['rpt_noet'] = $this->input->post('rpt_noet');
        $this->data_record_model->her_two_rpt($data);
        $sdata = array();
        $sdata['save_messages'] = 'Information successfully save..... ';
        $this->session->set_userdata($sdata);

        //$preData['sei_id']=$this->input->post('sei_id',true);
        $preData['sl_no'] = $this->input->post('sl_no', true);
        $preData['test_id'] = $this->input->post('test_id', true);
        $preData['reciv_date'] = $this->input->post('reciv_date', true);
        $preData['deli_date'] = $this->input->post('deli_date', true);
        $preData['patient_name'] = $this->input->post('patient_name', true);
        $preData['age'] = $this->input->post('age', true);
        $preData['ref_by'] = $this->input->post('ref_by', true);
        $preData['sex'] = $this->input->post('sex', true);
        $preData['hospital_name'] = $this->input->post('hospital_name', true);
        $preData['specimen_name'] = $this->input->post('specimen_name', true);
        //$preData['specimen_name']=$this->input->post('specimen_name',true);
        $preData['note'] = $this->input->post('note', true);
        $preData['er_rpt'] = $this->input->post('er_rpt', true);
        $preData['er_score'] = $this->input->post('er_score', true);
        $preData['pr_rpt'] = $this->input->post('pr_rpt', true);
        $preData['pr_score'] = $this->input->post('pr_score', true);
        $preData['her_two_rpt'] = $this->input->post('her_two_rpt', true);
        $preData['her_two_score'] = $this->input->post('her_two_score', true);


        $preData['er_result'] = $this->input->post('er_result', true);
        $preData['pr_result'] = $this->input->post('pr_result', true);
        $preData['her_two_result'] = $this->input->post('her_two_result', true);
        $preData['rpt_noet'] = $this->input->post('rpt_noet', true);
        $preData['kisixtyseven'] = $this->input->post('kisixtyseven', true);
        $this->session->set_userdata($preData);
        redirect("welcome/add_new_report_er_pr_her_two");
    }

    public function save_immnuho_single_line_rpt() {
        $data = array();
        //$hospital=array();
        //$doctor=array();
        //$speciment=array();
        //$data['sei_id']=$this->input->post('sei_id',true);
        $data['sl_no'] = $this->input->post('sl_no');
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $doctor['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $hospital['hospital_name'] = $this->input->post('hospital_name');
        $data['specimen_name'] = $this->input->post('specimen_name');
        $data['current_date'] = $this->input->post('current_date');
        $speciment['specimen_name'] = $this->input->post('specimen_name');
        $data['note'] = $this->input->post('note');
        $data['reporting_board'] = $this->input->post('reporting_board');
        $data['add_doctor'] = $this->input->post('add_doctor');
        $this->data_record_model->immuno_single_line_info_record($data);
        //$this->reporting_process_model->hospital_info_multipul_table($hospital);
        //$this->reporting_process_model->doctor_info_multipul_table($doctor);
        //$this->reporting_process_model->specimen_info_multipul_table($speciment);

        $sdata = array();
        $sdata['save_messages'] = 'Information successfully save..... ';
        $this->session->set_userdata($sdata);

        //$preData['sei_id']=$this->input->post('sei_id',true);
        $preData['sl_no'] = $this->input->post('sl_no', true);
        $preData['test_id'] = $this->input->post('test_id', true);
        $preData['reciv_date'] = $this->input->post('reciv_date', true);
        $preData['deli_date'] = $this->input->post('deli_date', true);
        $preData['patient_name'] = $this->input->post('patient_name', true);
        $preData['age'] = $this->input->post('age', true);
        $preData['ref_by'] = $this->input->post('ref_by', true);
        $preData['sex'] = $this->input->post('sex', true);
        $preData['hospital_name'] = $this->input->post('hospital_name', true);
        $preData['specimen_name'] = $this->input->post('specimen_name', true);
        $preData['note'] = $this->input->post('note', true);
        $preData['reporting_board'] = $this->input->post('reporting_board', true);
        $preData['add_doctor'] = $this->input->post('add_doctor', true);
        $this->session->set_userdata($preData);

        redirect("welcome/add_new_report_singlie_line_report");
    }

    public function save_semen_info() {
        $data = array();
//$data['sei_id']=$this->input->post('sei_id',true);
        $data['test_id'] = $this->input->post('test_id');
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');

        $data['collection_time'] = $this->input->post('collection_time');
        $data['examination_time'] = $this->input->post('examination_time');
        $data['volume'] = $this->input->post('volume');
        $data['color'] = $this->input->post('color');
        $data['viscosity'] = $this->input->post('viscosity');
        $data['lique'] = $this->input->post('lique');
        $data['reaction'] = $this->input->post('reaction');
        $data['total_spermo'] = $this->input->post('total_spermo');
        $data['active'] = $this->input->post('active');
        $data['sluggish'] = $this->input->post('sluggish');
        $data['non_motile'] = $this->input->post('non_motile');
        $data['normal'] = $this->input->post('normal');
        $data['abnormal'] = $this->input->post('abnormal');
//$data['others_info']=$this->input->post('others_info');
        $data['epithe_cells'] = $this->input->post('epithe_cells');
        $data['epithe_count'] = $this->input->post('epithe_count');
        $data['pus_cells'] = $this->input->post('pus_cells');
        $data['pus_count'] = $this->input->post('pus_count');
        $data['macrophages'] = $this->input->post('macrophages');
        $data['macro_count'] = $this->input->post('macro_count');
        $data['blank_one'] = $this->input->post('blank_one');
        $data['blank_count'] = $this->input->post('blank_count');
        $data['blank_two'] = $this->input->post('blank_two');
        $data['two_count'] = $this->input->post('two_count');
        $data['blank_three'] = $this->input->post('blank_three');
        $data['three_count'] = $this->input->post('three_count');
        $data['comments'] = $this->input->post('comments');
        $this->data_record_model->save_semen_analysis($data);

        $sdata = array();
        $sdata['save_messages'] = 'Successfully Save.. ';
        $this->session->set_userdata($sdata);

        $preData['test_id'] = $this->input->post('test_id');
        $preData['reciv_date'] = $this->input->post('reciv_date');
        $preData['deli_date'] = $this->input->post('deli_date');
        $preData['patient_name'] = $this->input->post('patient_name');
        $preData['age'] = $this->input->post('age');
        $preData['ref_by'] = $this->input->post('ref_by');
        $preData['sex'] = $this->input->post('sex');
        $preData['hospital_name'] = $this->input->post('hospital_name');
        $preData['collection_time'] = $this->input->post('collection_time');
        $preData['examination_time'] = $this->input->post('examination_time');
        $preData['volume'] = $this->input->post('volume');
        $preData['color'] = $this->input->post('color');
        $preData['viscosity'] = $this->input->post('viscosity');
        $preData['lique'] = $this->input->post('lique');
        $preData['reaction'] = $this->input->post('reaction');
        $preData['total_spermo'] = $this->input->post('total_spermo');
        $preData['active'] = $this->input->post('active');
        $preData['sluggish'] = $this->input->post('sluggish');
        $preData['non_motile'] = $this->input->post('non_motile');
        $preData['normal'] = $this->input->post('normal');
        $preData['abnormal'] = $this->input->post('abnormal');
// $semen_data['others_info']=$this->input->post('others_info');
        $preData['epithe_cells'] = $this->input->post('epithe_cells');
        $preData['epithe_count'] = $this->input->post('epithe_count');
        $preData['pus_cells'] = $this->input->post('pus_cells');
        $preData['pus_count'] = $this->input->post('pus_count');
        $preData['macrophages'] = $this->input->post('macrophages');
        $preData['macro_count'] = $this->input->post('macro_count');
        $preData['blank_one'] = $this->input->post('blank_one');
        $preData['blank_count'] = $this->input->post('blank_count');
        $preData['blank_two'] = $this->input->post('blank_two');
        $preData['two_count'] = $this->input->post('two_count');
        $preData['blank_three'] = $this->input->post('blank_three');
        $preData['three_count'] = $this->input->post('three_count');
        $preData['comments'] = $this->input->post('comments');
        $this->session->set_userdata($preData);
        redirect("welcome/add_new_report_semen");
    }

    public function save_haematologyreporting() {
        // START LOGIC 
        $data = array();
        $data['test_id'] = $this->input->post('test_id', true);
        //$data['current_date'] = $this->input->post('current_date', true);
        $data['reciv_date'] = $this->input->post('reciv_date', true);
        $data['deli_date'] = $this->input->post('deli_date', true);
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['age'] = $this->input->post('age', true);
        $data['ref_by'] = $this->input->post('ref_by', true);
        $data['sex'] = $this->input->post('sex', true);
        $data['hospital_name'] = $this->input->post('hospital_name', true);
        $data['hb'] = $this->input->post('hb', true);
        $data['esr'] = $this->input->post('esr', true);
        $data['rbc'] = $this->input->post('rbc', true);
        $data['platelete'] = $this->input->post('platelete', true);
        $data['wbc'] = $this->input->post('wbc', true);
        $data['ce'] = $this->input->post('ce', true);
        $data['rc'] = $this->input->post('rc', true);
        $data['neutrophils'] = $this->input->post('neutrophils', true);
        $data['lymphocytes'] = $this->input->post('lymphocytes', true);
        $data['eosinophils'] = $this->input->post('eosinophils', true);
        $data['monocytes'] = $this->input->post('monocytes', true);
        $data['basophil'] = $this->input->post('basophil', true);
        $data['parameter_one'] = $this->input->post('parameter_one', true);
        $data['parameter_two'] = $this->input->post('parameter_two', true);
        $data['parameter_three'] = $this->input->post('parameter_three', true);
        $data['parameter_four'] = $this->input->post('parameter_four', true);
        $data['parameter_five'] = $this->input->post('parameter_five', true);
        $data['para_one_rpt'] = $this->input->post('para_one_rpt', true);
        $data['para_two_rpt'] = $this->input->post('para_two_rpt', true);
        $data['para_three_rpt'] = $this->input->post('para_three_rpt', true);
        $data['para_four_rpt'] = $this->input->post('para_four_rpt', true);
        $data['para_five_rpt'] = $this->input->post('para_five_rpt', true);
        $data['hct'] = $this->input->post('hct', true);
        $data['mcv'] = $this->input->post('mcv', true);
        $data['mch'] = $this->input->post('mch', true);
        $data['mchc'] = $this->input->post('mchc', true);
        $data['rdw'] = $this->input->post('rdw', true);
        $data['mp'] = $this->input->post('mp', true);
        $data['pbf'] = $this->input->post('pbf', true);
        $data['bt_min'] = $this->input->post('bt_min', true);
        $data['bt_sec'] = $this->input->post('bt_sec', true);
        $data['ct_min'] = $this->input->post('ct_min', true);
        $data['ct_sec'] = $this->input->post('ct_sec', true);

        $this->data_record_model->save_patient_history_Info_by_haematologyReport($data);
        $sdata = array();
        $sdata['save_message'] = 'Successfully Save..';
        $this->session->set_userdata($sdata);
        $haematology = array();
        $haematology['user_id'] = $this->session->userdata('user_id');
        $haematology['patient_id'] = $this->session->userdata('patient_id');
        $haematology['test_id'] = $this->input->post('test_id', true);
        $haematology['reciv_date'] = $this->input->post('reciv_date', true);
        $haematology['deli_date'] = $this->input->post('deli_date', true);
        $haematology['patient_name'] = $this->input->post('patient_name', true);
        $haematology['age'] = $this->input->post('age', true);
        $haematology['ref_by'] = $this->input->post('ref_by', true);
        $haematology['sex'] = $this->input->post('sex', true);
        $haematology['hospital_name'] = $this->input->post('hospital_name', true);
        $haematology['hb'] = $this->input->post('hb', true);
        $haematology['esr'] = $this->input->post('esr', true);
        $haematology['rbc'] = $this->input->post('rbc', true);
        $haematology['platelete'] = $this->input->post('platelete', true);
        $haematology['wbc'] = $this->input->post('wbc', true);
        $haematology['ce'] = $this->input->post('ce', true);
        $haematology['rc'] = $this->input->post('rc', true);
        $haematology['neutrophils'] = $this->input->post('neutrophils', true);
        $haematology['lymphocytes'] = $this->input->post('lymphocytes', true);
        $haematology['eosinophils'] = $this->input->post('eosinophils', true);
        $haematology['monocytes'] = $this->input->post('monocytes', true);
        $haematology['basophil'] = $this->input->post('basophil', true);
        $haematology['parameter_one'] = $this->input->post('parameter_one', true);
        $haematology['parameter_two'] = $this->input->post('parameter_two', true);
        $haematology['parameter_three'] = $this->input->post('parameter_three', true);
        $haematology['parameter_four'] = $this->input->post('parameter_four', true);
        $haematology['parameter_five'] = $this->input->post('parameter_five', true);
        $haematology['para_one_rpt'] = $this->input->post('para_one_rpt', true);
        $haematology['para_two_rpt'] = $this->input->post('para_two_rpt', true);
        $haematology['para_three_rpt'] = $this->input->post('para_three_rpt', true);
        $haematology['para_four_rpt'] = $this->input->post('para_four_rpt', true);
        $haematology['para_five_rpt'] = $this->input->post('para_five_rpt', true);
        $haematology['hct'] = $this->input->post('hct', true);
        $haematology['mcv'] = $this->input->post('mcv', true);
        $haematology['mch'] = $this->input->post('mch', true);
        $haematology['mchc'] = $this->input->post('mchc', true);
        $haematology['rdw'] = $this->input->post('rdw', true);
        $haematology['mp'] = $this->input->post('mp', true);
        $haematology['pbf'] = $this->input->post('pbf', true);
        $haematology['bt_min'] = $this->input->post('bt_min', true);
        $haematology['bt_sec'] = $this->input->post('bt_sec', true);
        $haematology['ct_min'] = $this->input->post('ct_min', true);
        $haematology['ct_sec'] = $this->input->post('ct_sec', true);
        $this->session->set_userdata($haematology);
        redirect('welcome/haematology');
    }

    public function save_urine_re() {
        $data = array();
        // $data['user_id'] = $this->session->userdata('user_id');
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        //$data['current_date'] = $this->input->post('current_date');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        // $data['material']=$this->input->post('material');

        $data['quantity'] = $this->input->post('quantity');
        $data['color'] = $this->input->post('color');
        $data['apper'] = $this->input->post('apper');
        $data['sediment'] = $this->input->post('sediment');
        $data['spe_grav'] = $this->input->post('spe_grav');
        $data['reaction'] = $this->input->post('reaction');
        $data['ex_ph'] = $this->input->post('ex_ph');
        $data['albumin'] = $this->input->post('albumin');
        $data['sugur'] = $this->input->post('sugur');
        $data['others'] = $this->input->post('others');
        $data['acetone'] = $this->input->post('acetone');
        $data['pus_cells'] = $this->input->post('pus_cells');
        $data['rbcs'] = $this->input->post('rbcs');
        $data['mucus'] = $this->input->post('mucus');
        $data['pus_cast'] = $this->input->post('pus_cast');
        $data['sperat'] = $this->input->post('sperat');
        $data['wbc'] = $this->input->post('wbc');
        $data['granuloar'] = $this->input->post('granuloar');
        $data['cal_oxa'] = $this->input->post('cal_oxa');
        $data['uric_acid'] = $this->input->post('uric_acid');
        $data['tre_phs'] = $this->input->post('tre_phs');

        $data['sulph_cry'] = $this->input->post('sulph_cry');
        $data['hayline_cast'] = $this->input->post('hayline_cast');
        $data['bacteria'] = $this->input->post('bacteria');

        $data['bile_pig'] = $this->input->post('bile_pig');
        $data['urobili'] = $this->input->post('urobili');
        $data['chyle'] = $this->input->post('chyle');
        $data['b_jons_protein'] = $this->input->post('b_jons_protein');
        $data['ep_cell'] = $this->input->post('ep_cell');
        $data['bile_salt'] = $this->input->post('bile_salt');
        $data['candida'] = $this->input->post('candida');
        $data['amr_ph'] = $this->input->post('amr_ph');
        $data['urate_crys'] = $this->input->post('urate_crys');
        $this->data_record_model->save_urine_re_rpt($data);

        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);

        $urine_re = array();
        // $urine_re['user_id'] = $this->session->userdata('user_id');
        $urine_re['patient_id'] = $this->session->userdata('patient_id');
        $urine_re['test_id'] = $this->input->post('test_id', true);
        $urine_re['reciv_date'] = $this->input->post('reciv_date');
        $urine_re['deli_date'] = $this->input->post('deli_date');
        $urine_re['patient_name'] = $this->input->post('patient_name');
        $urine_re['age'] = $this->input->post('age');
        $urine_re['ref_by'] = $this->input->post('ref_by');
        $urine_re['sex'] = $this->input->post('sex');
        $urine_re['hospital_name'] = $this->input->post('hospital_name');
        $urine_re['material'] = $this->input->post('material');

        $urine_re['quantity'] = $this->input->post('quantity');
        $urine_re['color'] = $this->input->post('color');
        $urine_re['apper'] = $this->input->post('apper');
        $urine_re['sediment'] = $this->input->post('sediment');
        $urine_re['spe_grav'] = $this->input->post('spe_grav');
        $urine_re['reaction'] = $this->input->post('reaction');
        $urine_re['ex_ph'] = $this->input->post('ex_ph');
        $urine_re['albumin'] = $this->input->post('albumin');
        $urine_re['sugur'] = $this->input->post('sugur');
        $urine_re['others'] = $this->input->post('others');
        $urine_re['acetone'] = $this->input->post('acetone');
        $urine_re['pus_cells'] = $this->input->post('pus_cells');
        $urine_re['rbcs'] = $this->input->post('rbcs');
        $urine_re['mucus'] = $this->input->post('mucus');
        $urine_re['pus_cast'] = $this->input->post('pus_cast');
        $urine_re['sperat'] = $this->input->post('sperat');
        $urine_re['wbc'] = $this->input->post('wbc');
        $urine_re['granuloar'] = $this->input->post('granuloar');
        $urine_re['cal_oxa'] = $this->input->post('cal_oxa');
        $urine_re['uric_acid'] = $this->input->post('uric_acid');
        $urine_re['tre_phs'] = $this->input->post('tre_phs');

        $urine_re['sulph_cry'] = $this->input->post('sulph_cry');
        $urine_re['hayline_cast'] = $this->input->post('hayline_cast');
        $urine_re['bacteria'] = $this->input->post('bacteria');

        $urine_re['bile_pig'] = $this->input->post('bile_pig');
        $urine_re['urobili'] = $this->input->post('urobili');
        $urine_re['chyle'] = $this->input->post('chyle');
        $urine_re['b_jons_protein'] = $this->input->post('b_jons_protein');
        $urine_re['ep_cell'] = $this->input->post('ep_cell');
        $urine_re['bile_salt'] = $this->input->post('bile_salt');

        $urine_re['candida'] = $this->input->post('candida');
        $urine_re['amr_ph'] = $this->input->post('amr_ph');
        $urine_re['urate_crys'] = $this->input->post('urate_crys');

        $this->session->set_userdata($urine_re);
        redirect("welcome/urine_report");
    }

    public function save_radiology_report() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        //$data['current_date'] = $this->session->userdata('current_date');
        //$patientid=$this->data_record_model->findpatientid($patient_id,$manual_pid);
        //$patient_id=$patientid->patient_id;

        /*
         * 
          $findvisit=$this->data_record_model->findvisit_bypatientid($patient_id);
          $visitno=  max($findvisit);

          if($visitno->visiting_no==Null){
          $data['current_date'] = $this->session->userdata('current_date');
          }elseif($visitno->visiting_no>=1){

          $data['current_date'] = date("Y-m-d");
          }
         */

        // END LOGIC
        //$data['current_date'] = $this->input->post('current_date', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['report_description'] = $this->input->post('report_description');

        $radiology_report = array();
        $radiology_report['user_id'] = $this->session->userdata('user_id');
        $radiology_report['patient_id'] = $this->session->userdata('patient_id');
        //$radiology_report['current_date'] = $this->input->post('current_date', true);
        $radiology_report['test_id'] = $this->input->post('test_id', true);
        $radiology_report['reciv_date'] = $this->input->post('reciv_date');
        $radiology_report['deli_date'] = $this->input->post('deli_date');
        $radiology_report['patient_name'] = $this->input->post('patient_name');
        $radiology_report['age'] = $this->input->post('age');
        $radiology_report['ref_by'] = $this->input->post('ref_by');
        $radiology_report['sex'] = $this->input->post('sex');
        $radiology_report['hospital_name'] = $this->input->post('hospital_name');
        $radiology_report['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($radiology_report);

        $this->data_record_model->save_radiology_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/radiology_report");
    }

    public function save_usg_report() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['current_date'] = $this->session->userdata('current_date');
        //$patientid=$this->data_record_model->findpatientid($patient_id,$manual_pid);
        //$patient_id=$patientid->patient_id;
        /*
          $findvisit=$this->data_record_model->findvisit_bypatientid($patient_id);
          $visitno=  max($findvisit);

          if($visitno->visiting_no==Null){
          $data['current_date'] = $this->session->userdata('current_date');
          }elseif($visitno->visiting_no>=1){

          $data['current_date'] = date("Y-m-d");
          }
         */

        // END LOGIC
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        // $data['current_date'] = $this->input->post('current_date', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['report_description'] = $this->input->post('report_description');

        $usgdata = array();
        $usgdata['user_id'] = $this->session->userdata('user_id');
        $usgdata['patient_id'] = $this->session->userdata('patient_id');
        //$usgdata['current_date'] = $this->input->post('current_date', true);
        $usgdata['test_id'] = $this->input->post('test_id', true);
        $usgdata['reciv_date'] = $this->input->post('reciv_date');
        $usgdata['deli_date'] = $this->input->post('deli_date');
        $usgdata['patient_name'] = $this->input->post('patient_name');
        $usgdata['age'] = $this->input->post('age');
        $usgdata['ref_by'] = $this->input->post('ref_by');
        $usgdata['sex'] = $this->input->post('sex');
        $usgdata['hospital_name'] = $this->input->post('hospital_name');
        $usgdata['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($usgdata);

        $this->data_record_model->save_usg_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/usg_report");
    }

    public function save_bonemarrow_report() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        //$data['current_date'] = $this->session->userdata('current_date');
        //$patientid=$this->data_record_model->findpatientid($patient_id,$manual_pid);
        //$patient_id=$patientid->patient_id;
        /*
         * 
          $findvisit=$this->data_record_model->findvisit_bypatientid($patient_id);
          $visitno=  max($findvisit);

          if($visitno->visiting_no==Null){
          $data['current_date'] = $this->session->userdata('current_date');
          }elseif($visitno->visiting_no>=1){

          $data['current_date'] = date("Y-m-d");
          }
         */

        // END LOGIC
        //$data['current_date'] = $this->input->post('current_date', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['deli_date'] = $this->input->post('deli_date');
        $data['patient_name'] = $this->input->post('patient_name');
        $data['age'] = $this->input->post('age');
        $data['ref_by'] = $this->input->post('ref_by');
        $data['sex'] = $this->input->post('sex');
        $data['hospital_name'] = $this->input->post('hospital_name');
        $data['report_description'] = $this->input->post('report_description');

        $bonemarrow = array();
        $bonemarrow['user_id'] = $this->session->userdata('user_id');
        $bonemarrow['patient_id'] = $this->session->userdata('patient_id');
        //$bonemarrow['current_date'] = $this->input->post('current_date', true);
        $bonemarrow['test_id'] = $this->input->post('test_id', true);
        $bonemarrow['reciv_date'] = $this->input->post('reciv_date');
        $bonemarrow['deli_date'] = $this->input->post('deli_date');
        $bonemarrow['patient_name'] = $this->input->post('patient_name');
        $bonemarrow['age'] = $this->input->post('age');
        $bonemarrow['ref_by'] = $this->input->post('ref_by');
        $bonemarrow['sex'] = $this->input->post('sex');
        $bonemarrow['hospital_name'] = $this->input->post('hospital_name');
        $bonemarrow['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($bonemarrow);

        $this->data_record_model->save_bonemarrow_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/bone_marrow");
    }

    public function save_multiple_reporting() {
        $this->session->unset_userdata('test_id');
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['current_date'] = $this->session->userdata('current_date');
        // $patientid=$this->data_record_model->findpatientid($patient_id,$manual_pid);
        // $patient_id=$patientid->patient_id;
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        //$findvisit=$this->data_record_model->findvisit_bypatientid($patient_id);
        //$visitno=  max($findvisit);
        /*
         * 
          if($visitno->visiting_no==Null){
          $data['current_date'] = $this->session->userdata('current_date');
          }elseif($visitno->visiting_no>=1){

          $data['current_date'] = date("Y-m-d");
          }
         */

        // END LOGIC
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['current_date'] = $this->input->post('current_date', true);
        $data['test_id'] = $this->input->post('test_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date', true);
        $data['deli_date'] = $this->input->post('deli_date', true);
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['age'] = $this->input->post('age', true);
        $data['ref_by'] = $this->input->post('ref_by', true);
        $data['sex'] = $this->input->post('sex', true);
        $data['hospital_name'] = $this->input->post('hospital_name', true);
        $data['path_test_id'] = $this->input->post('path_test_id', true);
        $data['result'] = $this->input->post('result', true);
        $data['unit'] = $this->input->post('unit', true);
        $data['normal_range'] = $this->input->post('normal_range', true);

        $multiplereport = array();
        // $multiplereport['current_date'] = $this->input->post('current_date', true);
        $multiplereport['test_id'] = $this->input->post('test_id', true);
        $multiplereport['reciv_date'] = $this->input->post('reciv_date', true);
        $multiplereport['deli_date'] = $this->input->post('deli_date', true);
        $multiplereport['patient_name'] = $this->input->post('patient_name', true);
        $multiplereport['age'] = $this->input->post('age', true);
        $multiplereport['ref_by'] = $this->input->post('ref_by', true);
        $multiplereport['sex'] = $this->input->post('sex', true);
        $multiplereport['hospital_name'] = $this->input->post('hospital_name', true);
        $multiplereport['path_test_id'] = $this->input->post('path_test_id', true);
        $multiplereport['result'] = $this->input->post('result', true);
        $multiplereport['unit'] = $this->input->post('unit', true);
        $multiplereport['normal_range'] = $this->input->post('normal_range', true);
        $this->session->set_userdata($multiplereport);
        $this->data_record_model->save_multiple_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/biochemistry_report");
    }

// -------------------------------------------------------- -------------------- all condition function && ajax onChange function -------------------------------------------------
    public function dose_type_wise_brand_name_info() {
        $dose_id = $_GET['dose_id'];
        $data['show_brand_name'] = $this->data_record_model->prescription_wise_brand_name($dose_id);
        echo $this->load->view('source_file/dose_wise_brand_name', $data);
    }

    public function physicalFindings_by_search() {
        $custom_phy_findings_id = $_GET['custom_phy_findings_id'];
        $data['show_fing_name'] = $this->data_record_model->phyfindata($custom_phy_findings_id);
        echo $this->load->view('source_file/phy_fing_onchange_ajax', $data);
    }

    public function weightinfo_by_bsa() {
        
    }

    public function srength_info_by_prescription() {
        $drug_id = $_GET['drug_id'];
        $data['show_strength_info'] = $this->data_record_model->prescription_wise_strength_name($drug_id);
        echo $this->load->view('source_file/srength_name', $data);
    }

    public function complain_group_wise_complaine_name() {
        $cc_group_id = $_GET['cc_group_id'];
        $data['show_complain_name_left'] = $this->data_record_model->complainInformation($cc_group_id);
        echo $this->load->view('source_file/view_complain_name', $data, true);
    }

    public function print_preview_prescription() {

        //$patient_id = $this->session->userdata('patient_id');
        //$data['reporting_data'] = $this->data_record_model->final_prescription_reportingInfo($patient_id);
        //$data['adviceInformation'] = $this->data_record_model->adviceInfo_reportingInfo($patient_id);
        //$data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo($patient_id);
        //$data['complaintList'] = $this->data_record_model->select_by_patientComplaint($patient_id);
        //$data['extracomplaintList'] = $this->data_record_model->select_by_patientExtraComplaint($patient_id);
        //$data['diagnosisInfo_by_prescripiton_tab'] = $this->data_record_model->diagnosis_by_prescription_tab($patient_id);
        //$data['physicalfindingsInfo_prescription'] = $this->data_record_model->view_physicalfindings_by_infoPrscription($patient_id);
        $patient_id = $this->session->userdata('patient_id');
        $visiting_no = $this->session->userdata('visiting_no');
        //$manual_pid=$this->session->userdata('manual_pid');

        $data = array();
        $data['chiefComplaint'] = $this->data_record_model->cheief_complaint_by_search($patient_id, $visiting_no);
        $data['reporting_data'] = $this->data_record_model->final_prescription_reportingInfo($patient_id);
        $data['comorbidityinfo'] = $this->data_record_model->comorbidity_by_info($patient_id, $visiting_no);
        $data['by_visiting_no_bysearch'] = $this->data_record_model->visiting_by_info($patient_id, $visiting_no);
        $data['patient_history_info'] = $this->data_record_model->personal_history_by_search($patient_id, $visiting_no);
        $data['diagnosisInfo'] = $this->data_record_model->diagnosis_by_search($patient_id, $visiting_no);
        $data['diagnosisInfo_by_prescripiton_tab'] = $this->data_record_model->diagnosis_by_prescription_tab($patient_id, $visiting_no);
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($patient_id, $visiting_no);
        $data['physicalfindingsInfo_prescription'] = $this->data_record_model->view_physicalfindings_by_infoPrscription($patient_id, $visiting_no);
        $data['prescriptoin_data'] = $this->data_record_model->select_by_prescription_all_data($patient_id, $visiting_no);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo($patient_id, $visiting_no);
        $data['complaintList'] = $this->data_record_model->select_by_patientComplaint($patient_id, $visiting_no);
//        $data['nameInformation']=$this->data_record_model->view_name_info($patient_id,$manual_pid);
        $data['patient_information'] = $this->data_record_model->view_name_info($patient_id, $visiting_no);

        //echo '<pre>';
        //print_r($data['patient_information']);
        // exit();

        $data['extracomplaintList'] = $this->data_record_model->select_by_patientExtraComplaint($patient_id, $visiting_no);
        $data['adviceInformation'] = $this->data_record_model->select_by_patientAdvice($patient_id, $visiting_no);
        $this->load->view('reporting/prescription', $data);
    }

    public function revist_print_preview_prescription() {

        $patient_id = $this->session->userdata('patient_id');
        $visiting_no = $this->session->userdata('visiting_no');
        //$manual_pid=$this->session->userdata('manual_pid');

        $data = array();
        $data['chiefComplaint'] = $this->data_record_model->cheief_complaint_by_search($patient_id, $visiting_no);
        $data['reporting_data'] = $this->data_record_model->final_prescription_reportingInfo($patient_id);
        $data['comorbidityinfo'] = $this->data_record_model->comorbidity_by_info($patient_id, $visiting_no);
        $data['by_visiting_no_bysearch'] = $this->data_record_model->visiting_by_info($patient_id, $visiting_no);
        $data['patient_history_info'] = $this->data_record_model->personal_history_by_search($patient_id, $visiting_no);
        $data['diagnosisInfo'] = $this->data_record_model->diagnosis_by_search($patient_id, $visiting_no);
        $data['diagnosisInfo_by_prescripiton_tab'] = $this->data_record_model->diagnosis_by_prescription_tab($patient_id, $visiting_no);
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($patient_id, $visiting_no);
        $data['physicalfindingsInfo_prescription'] = $this->data_record_model->view_physicalfindings_by_infoPrscription($patient_id, $visiting_no);
        $data['prescriptoin_data'] = $this->data_record_model->select_by_prescription_all_data($patient_id, $visiting_no);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo($patient_id, $visiting_no);
        $data['complaintList'] = $this->data_record_model->select_by_patientComplaint($patient_id, $visiting_no);
//        $data['nameInformation']=$this->data_record_model->view_name_info($patient_id,$manual_pid);
        $data['patient_information'] = $this->data_record_model->view_name_info($patient_id, $visiting_no);
        //echo '<pre>';
        //print_r($data['patient_information']);
        // exit();

        $data['extracomplaintList'] = $this->data_record_model->select_by_patientExtraComplaint($patient_id, $visiting_no);
        $data['adviceInformation'] = $this->data_record_model->select_by_patientAdvice($patient_id, $visiting_no);
        $this->load->view('reporting/prescription', $data);
    }

    /*
      public function all_drug_help_PDF()
      {
      $data=array();
      $data['drug_help']=$this->data_record_model->view_search_drug_by_info();
      $this->load->helper(array('dompdf', 'file'));
      $view_file=$this->load->view('source_file/view_drug_help_pdf',$data,true);
      $file_name=pdf_create($view_file, 'My Drug Help Data PDF');
      echo $file_name;

      //echo '<pre>';
      //print_r($data['reporting_data']);
      //exit();

      }
     */

    public function conditional_print_preview_prescription($visiting_no) {
        $data = array();
        $patient_id = $this->session->userdata('patient_id');
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($visiting_no);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($visiting_no);
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($visiting_no);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion($visiting_no);
        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo($patient_id);
        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory($visiting_no);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory($visiting_no);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($visiting_no);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis($visiting_no);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo($visiting_no);
        $data['adviceinfo'] = $this->data_record_model->revisit_advice($visiting_no);
        $data['investigationinfo'] = $this->data_record_model->revisit_i($visiting_no);
        //$data['maincontent'] = $this->load->view('source_file/revisit_step_one', $data);
        //$this->load->view('home', $data);

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('reporting/prescription_pdf', $data);
        $file_name = pdf_create($view_file, 'Re Visit Information');
        echo $file_name;
    }

    public function re_visit_patient_prescription_pdf() {
        $patient_id = $this->session->userdata('patient_id');
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($patient_id);
        $data['revisit_Complaint'] = $this->data_record_model->revisit_data_byComplaint($patient_id);
        $data['revisit_drugInformation'] = $this->data_record_model->revisit_data_byDrug($patient_id);
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('reporting/revisit_step_one_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Re visit patient pdf report');
        echo $file_name;
    }

    public function edit_revisit_prescription($visiting_no) {
        $pdata = explode('VisitNo', $visiting_no);
        $spdata = array();
        $spdata['pid'] = $pdata[0];
        $spdata['visitno'] = $pdata[1];
        $this->session->set_userdata($spdata);
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($patientid);
        // echo '<pre>';
        // print_r($result);
        //exit();
        $patient_id = $result->patient_id;
        $spdata['visiting_no'] = $pdata[1];
        $data = array();
        //$patient_id=$this->session->userdata('patient_id');
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($patient_id, $visiting_no);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($patient_id, $visiting_no);
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($patient_id, $visiting_no);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion($patient_id, $visiting_no);

        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo($patient_id);
        //echo '<pre>';
        //print_r($data['presentingComplaint']);
        //exit();
        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory($patient_id, $visiting_no);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory($patient_id, $visiting_no);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($patient_id, $visiting_no);
        $data['physicalfindingsValue'] = $this->data_record_model->revisit_data_physicalfindingsValue($patient_id, $visiting_no);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis($patient_id, $visiting_no);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo($patient_id, $visiting_no);
        $data['prescriptoin_data_visitingNo'] = $this->data_record_model->revisit_prescription_ajax_table_by_search_visitingno($patient_id, $visiting_no);
        $data['adviceInformation'] = $this->data_record_model->revisit_advice($patient_id, $visiting_no);
        $data['investigationinfo'] = $this->data_record_model->revisit_investigation($patient_id, $visiting_no);
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        //update physical findings function
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
        // all function
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['patientadviceInfo'] = $this->data_record_model->patient_advice_by_search();
        $data['path_groupName'] = $this->data_record_model->pathological_group_testInfo();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();

        $data['maincontent'] = $this->load->view('source_file/edit_revisit_prescription', $data);
        $this->load->view('home', $data);
    }

    public function re_visit_conditional_prescription($visiting_no) {
        $pdata = explode('VisitNo', $visiting_no);
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($patientid);
        // echo '<pre>';
        // print_r($result);
        //exit();
        $patient_id = $result->patient_id;
        $spdata['visiting_no'] = $pdata[1];
        $data = array();
        //$patient_id=$this->session->userdata('patient_id');
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($patient_id, $visiting_no);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($patient_id, $visiting_no);
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($patient_id, $visiting_no);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion($patient_id, $visiting_no);

        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo($patient_id);
        //echo '<pre>';
        //print_r($data['presentingComplaint']);
        //exit();
        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory($patient_id, $visiting_no);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory($patient_id, $visiting_no);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($patient_id, $visiting_no);
        $data['physicalfindingsValue'] = $this->data_record_model->revisit_data_physicalfindingsValue($patient_id, $visiting_no);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis($patient_id, $visiting_no);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo($patient_id, $visiting_no);
        $data['prescriptoin_data_visitingNo'] = $this->data_record_model->revisit_prescription_ajax_table_by_search_visitingno($patient_id, $visiting_no);
        $data['adviceinfo'] = $this->data_record_model->revisit_advice($patient_id, $visiting_no);
        $data['investigationinfo'] = $this->data_record_model->revisit_investigation($patient_id, $visiting_no);
        //echo '<pre>';
        //print_r($data['familyhistory']);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/revisit_step_one', $data);
        $this->load->view('home', $data);
    }

    public function create_new_prescription($patient_id) {
        $this->session->unset_userdata('patient_id');
        $this->session->unset_userdata('visiting_no');
        $this->session->unset_userdata('manual_pid');
        $this->session->unset_userdata('current_date');
        $pdata = explode('date', $patient_id);
        // echo '<pre>';
        // echo $pdata[0];
        //exit();
        $spdata = array();

        $patient_id = $pdata[0];
        $pid = $this->data_record_model->call_for_pid($patient_id);
        $partientid = $pid->patient_id;
        $spdata['patient_id'] = $pid->patient_id;
        $spdata['manual_pid'] = $pid->manual_pid;
        $visit_no = max($this->data_record_model->call_visit_no_by_patient_id($partientid));
        $spdata['visiting_no'] = $visit_no->visiting_no + 1;
        //echo '<pre>';
        //echo $spdata['visiting_no'];
        //exit(); 
        $this->session->set_userdata($spdata);
        redirect('welcome/patient_prescription_step_one');
    }

    public function re_visit__prescription($patient_id) {
        $pdata = explode('date', $patient_id);
        $spdata = array();
        $spdata['p_id'] = $pdata[0];
        $spdata['p_date'] = $pdata[1];
        $this->session->set_userdata($spdata);
        $data = array();
        //$revisit_patient_id=$patient_id;
        // $patient_id=$this->session->userdata('patient_id');
        //$data['revisitInformation']=$this->data_record_model->revisit_data_byprescription($patient_id);
        $data['complaint_group_info'] = $this->data_record_model->complaint_group_name();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['path_groupName'] = $this->data_record_model->pathological_group_testInfo();

        //$data['revisitInformation']=$this->data_record_model->revisit_data_byprescription($patient_id); 
        //$data['revisit_Complaint']=$this->data_record_model->revisit_data_byComplaint($patient_id); 
        //$data['adviceinfo']=$this->data_record_model->revisit_data_byAdviceInfo($patient_id); 
        //$data['revisit_drugInformation']=$this->data_record_model->revisit_data_byDrug($patient_id); 
        //
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($pdata[0], $pdata[1]);
        $data['revisit_Complaint'] = $this->data_record_model->revisit_data_byComplaint($pdata[0], $pdata[1]);
        $data['adviceinfo'] = $this->data_record_model->revisit_data_byAdviceInfo($pdata[0], $pdata[1]);
        $data['revisit_drugInformation'] = $this->data_record_model->revisit_data_byDrug($pdata[0], $pdata[1]);
        // echo '<pre>';
        //print_r($data['revisitInformation']);
        //exit(); 
        //$data['complaint_group_info']=$this->data_record_model->complaint_group_name();
        $sdata = array();
        $sdata['patient_id'] = $patient_id;
        $this->session->set_userdata($sdata);
        $data['maincontent'] = $this->load->view('source_file/revisit_heightComplaintInfo', $data);
        $this->load->view('home', $data);
    }

    public function test_group_wise_test_name() {
        $path_test_group_id = $_GET['path_test_group_id'];
        $data['show_test_name_left'] = $this->data_record_model->testInformation($path_test_group_id);
        echo $this->load->view('source_file/view_test_name', $data, true);
    }

    public function patient_revisit_information() {
        //patient_id
        $ssdata = array();
        $ssdata['revisit_date'] = $this->input->post('revisit_date', true);
        $this->session->set_userdata($ssdata);

        $data = array();
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $patientid = $this->input->post('patient_id', true);
        $manual_pid = trim(strtoupper($this->input->post('manual_pid', true)));

//manual_pid
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['patient_id'] = $patientid;
        $data['manual_pid'] = $manual_pid;
        if ($patientid != NULL) {
            $data['revisit'] = $this->data_record_model->revisitdate_range($date_from, $date_to, $patientid);
            //echo '<pre>';
            //print_r($data['revisit']);
            //exit();
        } else {
            $data['revisit'] = $this->data_record_model->revisitdate_range_manual_pid($date_from, $date_to, $manual_pid);
            //echo '<pre>';
            //print_r($data['revisit']);
            //exit();
        }

        //$this->session->set_userdata($sdata);
        // $data['show_revisitdata']=$this->data_record_model->revisitInformation($patientid);
        //echo '<pre>';
        //print_r($data['revisit']);
        //exit();
        $sdata = array();
        $sdata['patient_id'] = $patientid;
        $sdata['manual_pid'] = $manual_pid;
        $this->session->set_userdata($sdata);

        $data['maincontent'] = $this->load->view('source_file/show_revisit_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_revisit_information_data_revisit() {
        //patient_id
        $ssdata = array();
        $ssdata['revisit_date'] = $this->input->post('revisit_date', true);
        $this->session->set_userdata($ssdata);

        $data = array();
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $patientid = $this->input->post('patient_id', true);
        $manual_pid = trim(strtoupper($this->input->post('manual_pid', true)));

//manual_pid
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['patient_id'] = $patientid;
        $data['manual_pid'] = $manual_pid;
        if ($patientid != NULL) {
            $data['revisit'] = $this->data_record_model->revisitdate_range($date_from, $date_to, $patientid);
            //echo '<pre>';
            //print_r($data['revisit']);
            //exit();
        } else {
            $data['revisit'] = $this->data_record_model->revisitdate_range_manual_pid($date_from, $date_to, $manual_pid);
            //echo '<pre>';
            //print_r($data['revisit']);
            //exit();
        }

        //$this->session->set_userdata($sdata);
        // $data['show_revisitdata']=$this->data_record_model->revisitInformation($patientid);
        //echo '<pre>';
        //print_r($data['revisit']);
        //exit();
        $sdata = array();
        $sdata['patient_id'] = $patientid;
        $sdata['manual_pid'] = $manual_pid;
        $this->session->set_userdata($sdata);

        $data['maincontent'] = $this->load->view('source_file/show_revisit_info_data_range', $data);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment() {

        $date_from = $this->input->post('prescription_date_from', true);
        $date_to = $this->input->post('prescription_date_from_date_to', true);
        $cc_name_id = $this->input->post('cc_name_id', true);

        $pdfinfo = array();
        $pdfinfo['date_from'] = $date_from;
        $pdfinfo['date_to'] = $date_to;
        $pdfinfo['cc_name_id'] = $cc_name_id;
        $this->session->set_userdata($pdfinfo);

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();

        $data['complaint'] = $this->data_record_model->complaint_by_groupID($date_from, $date_to, $cc_name_id);
        $com_group_info = $this->data_record_model->selectCompalintGroupBy_Id($cc_name_id);

        if ($com_group_info) {
            $data['presenting_complaint'] = $com_group_info->complain_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['complaint_groupname'] = $this->data_record_model->select_presenting_complait_information();
        // echo '<pre>';
        // print_r($data['complaint']);
        // EXIT();

        $data['maincontent'] = $this->load->view('source_file/show_complaint_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_comorbidity() {
        $date_from = $this->input->post('prescription_date_from_comorbidity', true);
        $date_to = $this->input->post('prescription_date_from_date_to_comorbidity', true);
        $comorbidity_id = $this->input->post('comorbidity_id', true);

        $comorbidityinfo = array();
        $comorbidityinfo['date_from'] = $date_from;
        $comorbidityinfo['date_to'] = $date_to;
        $comorbidityinfo['cc_name_id'] = $comorbidity_id;
        $this->session->set_userdata($comorbidityinfo);

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();

        $data['comorbidity'] = $this->data_record_model->comorbidity_by_groupID($date_from, $date_to, $comorbidity_id);
        $comorbidity_info = $this->data_record_model->selectComorbidityBy_Id($comorbidity_id);

        if ($comorbidity_info) {
            $data['comorbidityInformation'] = $comorbidity_info->comorbidity_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['comorbidity_by_name'] = $this->data_record_model->select_presenting_comorbidity_information();
        //echo '<pre>';
        //print_r($data['comorbidity']);
        //EXIT();

        $data['maincontent'] = $this->load->view('source_file/show_comorbidity_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_personal_history() {
        $date_from = $this->input->post('prescription_date_from_p_history', true);
        $date_to = $this->input->post('prescription_date_from_date_to_p_history', true);
        $personal_id = $this->input->post('personal_id', true);

        $personalInfo = array();
        $personalInfo['date_from'] = $date_from;
        $personalInfo['date_to'] = $date_to;
        $personalInfo['cc_name_id'] = $personal_id;
        $this->session->set_userdata($personalInfo);

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();

        $data['personal_history'] = $this->data_record_model->personal_history_by_ID($date_from, $date_to, $personal_id);
        $personal_information = $this->data_record_model->selectPersonalHistoryBy_Id($personal_id);

        if ($personal_information) {
            $data['personal_historyInformation'] = $personal_information->personal_history_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['personalHistory_by_name'] = $this->data_record_model->select_presenting_personalHistory_information();

        //echo '<pre>';
        //print_r($data['personal_history']);
        //EXIT();

        $data['maincontent'] = $this->load->view('source_file/show_personal_history_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function pdf_all_comorbidity_info() {

        //$date_from = $this->input->post('prescription_date_from_comorbidity');
        //$date_to = $this->input->post('prescription_date_from_date_to_comorbidity');
        $date_from = $this->session->userdata('date_from');
        $date_to = $this->session->userdata('date_to');
        $comorbidity_id = $this->session->userdata('comorbidity_id');
        // $comorbidity_id = $this->input->post('comorbidity_id');
        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();
        $data['comorbidity'] = $this->data_record_model->comorbidity_by_groupID($date_from, $date_to, $comorbidity_id);
        $comorbidity_info = $this->data_record_model->selectComorbidityBy_Id($comorbidity_id);

        if ($comorbidity_info) {
            $data['comorbidityInformation'] = $comorbidity_info->comorbidity_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['comorbidity_by_name'] = $this->data_record_model->select_presenting_comorbidity_information();

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/show_comorbidity_conditional_report_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Comorbidity List');
        echo $file_name;
    }

    public function pdf_all_complaint_group_info() {

        $date_from = $this->session->userdata('date_from');
        $date_to = $this->session->userdata('date_to');
        $cc_name_id = $this->session->userdata('cc_name_id');

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();

        $data['complaint'] = $this->data_record_model->complaint_by_groupID($date_from, $date_to, $cc_name_id);
        $com_group_info = $this->data_record_model->selectCompalintGroupBy_Id($cc_name_id);

        if ($com_group_info) {
            $data['presenting_complaint'] = $com_group_info->complain_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['complaint_groupname'] = $this->data_record_model->select_presenting_complait_information();

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/show_complaint_conditional_report_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Complaint Group Informtion');
        echo $file_name;
    }

    public function all_drug_help_PDF() {
        $data = array();
        $data['drug_help'] = $this->data_record_model->view_search_drug_by_info();
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/view_drug_help_pdf', $data, true);
        $file_name = pdf_create($view_file, 'My Drug Help Data PDF');
        echo $file_name;
    }

    public function appointment_list_pdf() {
        $data = array();
        $data['patient_appointment'] = $this->data_record_model->patient_appointmentInfo();
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/appointment_listInfo_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Patient Appointment List');
        echo $file_name;
    }

    public function test_wise_unit() {
        $path_test_id = $_GET['path_test_id'];
        $data['show_test_wise_unit'] = $this->data_record_model->test_wise_unit($path_test_id);
        echo $this->load->view('source_file/test_wise_unit', $data);
    }

    public function test_wise_normal_range() {
        $path_test_id = $_GET['path_test_id'];
        $data['show_test_wise_unit'] = $this->data_record_model->test_wise_unit($path_test_id);
        echo $this->load->view('source_file/show_normal_range', $data);
    }

}

?>