<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            redirect("login/index", 'refresh');

            //$this->load->view('home');
        }
        $this->load->model('data_record_model');
        $this->load->library('Datatables');
        $this->load->helper('datatables_helper');
        $this->load->library('table');
        $this->load->database();
    }

    public function index() {
        $data = array();
        $data['erprhertwo'] = $this->data_record_model->SearchByErprhertwoIDinfo();
        $data['SingleLine'] = $this->data_record_model->SearchBySingleLineIDinfo();
        $singline = $data['SingleLine'];
        $erpr = $data['erprhertwo'];
        $singline = $this->data_record_model->SearchBySingleLineIDinfo();
        $erpr = $this->data_record_model->SearchBySingleLineIDinfo();
        $result = $singline + $erpr;
        $data['maincontent'] = $this->load->view('navbar', $data);
        $this->load->view('home', $data);
    }

    public function cancel() {
        redirect('welcome/index');
    }

    public function back_prescription() {
        redirect('welcome/my_prescription');
    }

    public function edit_cancel_erprhertwo() {
        redirect('welcome/add_new_report_er_pr_her_two');
    }

    public function cancel_haematology() {
        redirect('welcome/haematology_rpt');
    }

    public function urine_cancel() {
        redirect('welcome/urine_report');
    }

    public function ascitic_fluid_cancel() {
        redirect('welcome/add_new_fluid_report');
    }

    public function mt_cancel() {
        redirect('welcome/add_new_mt_test');
    }

    public function semen_cancel() {
        redirect('welcome/add_new_report_semen');
    }

    public function add_new_user() {
        $data['maincontent'] = $this->load->view('source_file/add_new_user');
        $this->load->view('home', $data);
    }

//semen_cancel
    public function add_new_doctor() {
        $data = array();
        $data['view_doctor'] = $this->data_record_model->doctorName_by_search();
        $data['search_doctor'] = $this->data_record_model->doctorName_by_search();
        $data['last_doctor_name'] = $this->data_record_model->LastDoctorName_by_search();
        $doctor_name = $this->input->post('doctor_name', true);
        $data['CallDoctorNameInfo'] = $this->data_record_model->search_by_doctor_name_search($doctor_name = null);
//$data['DrAllCount']=$this->data_record_model->doctorName_by_searchAll();
        $data['maincontent'] = $this->load->view('source_file/add_new_doctor', $data);
        $this->load->view('home', $data);
    }

    public function BoneMarrowDraft() {

        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['maincontent'] = $this->load->view('source_file/DraftBoneMarrow', $data);
        $this->load->view('home', $data);
    }

    public function UsingShortCutKey() {
        $data['maincontent'] = $this->load->view('source_file/UsingShortCutKey');
        $this->load->view('home', $data);
    }

    public function BoneMarrowFormat() {

        $data['maincontent'] = $this->load->view('source_file/DraftBoneMarrowFormat');
        $this->load->view('home', $data);
    }

    public function bone_marrow_normal_draft() {

        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_normal');
        $this->load->view('home', $data);
    }

    public function bone_marrow_all() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_all');
        $this->load->view('home', $data);
    }

    public function bone_marrow_aml() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_aml');
        $this->load->view('home', $data);
    }

    public function bone_marrow_mm() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_mm');
        $this->load->view('home', $data);
    }

    public function bone_marrow_apl() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_apl');
        $this->load->view('home', $data);
    }

    public function bone_marrow_cll() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_cll');
        $this->load->view('home', $data);
    }

    public function bone_marrow_nhl() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_nhl');
        $this->load->view('home', $data);
    }

    public function bone_marrow_aml_not_remission() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_aml_not_remission');
        $this->load->view('home', $data);
    }

    public function bone_marrow_myeloblastic_anaemia() {

        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_myeloblastic_anaemia');
        $this->load->view('home', $data);
    }

    public function bone_marrow_myeloid_hyperplasia() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/DraftBoneMarrow_myeloid_hyperlasia');
        $this->load->view('home', $data);
    }

    public function s_reactivemarrow_bm() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/s_reactivemarrow_bm');
        $this->load->view('home', $data);
    }

    public function secondary_malignant_deposit_bm() {
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_format/secondary_malignant_deposit_bm');
        $this->load->view('home', $data);
    }

    public function ViewMyprofile() {

        $user_id = $this->session->userdata('user_id');
        $data['SearchUserInfo'] = $this->data_record_model->UserInfo_by_search($user_id);
        $data['maincontent'] = $this->load->view('print_preview/UserUpdate', $data);
        $this->load->view('home', $data);
    }

    public function ViewAllUserInformation() {
        $data['SearchUserInfo'] = $this->data_record_model->UserInfo_by_searchAll();
        $data['maincontent'] = $this->load->view('source_file/ViewAllUser', $data);
        $this->load->view('home', $data);
    }

    public function add_new_hospital() {
        $data = array();
        $hospital_name = $this->input->post('hospital_name', true);
        $data['CallHospitalNameInfo'] = $this->data_record_model->search_by_hospital_name_search($hospital_name = null);
        $data['view_hospital'] = $this->data_record_model->hospitalName_by_search();
        $data['last_hospital_name'] = $this->data_record_model->lasthospitalName_by_search();
        $data['maincontent'] = $this->load->view('source_file/add_new_hospital', $data);
        $this->load->view('home', $data);
    }

//specimen_name
    public function add_new_speciment() {
        $data = array();
        $data['view_specimen'] = $this->data_record_model->specimenName_by_searchInformation();
        $specimen_name = $this->input->post('specimen_name', true);
        $data['CallSpecimenNameInfo'] = $this->data_record_model->SearchSpecimentInformation($specimen_name = null);
        $data['last_specimen_name'] = $this->data_record_model->lastSpecimenName_by_search();
        $data['maincontent'] = $this->load->view('source_file/add_new_speciment', $data);
        $this->load->view('home', $data);
    }

    public function redirect_edit_form_bonemarrow() {
        $data = array();
        $data['SearchBoneMarrowID'] = $this->data_record_model->SearchByBonemarrowIDNfo();
        $test_id = $this->input->post('test_id', true);
        $data['CallBomeMarrowInfo'] = $this->data_record_model->SearchInfoBoneMarrow($test_id = null);
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_form_bonemarrow', $data);
        $this->load->view('home', $data);
    }

    public function redirect_edit_form_fluidreport() {
        $data = array();
        $data['SearchfluidID'] = $this->data_record_model->SearchByfluidIDNfo();
        $test_id = $this->input->post('test_id', true);
        $data['CallFluidInfo'] = $this->data_record_model->SearchFluid($test_id = null);
//redirect("data_record/edit_erprhertwo_rpt");
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_form_fluid', $data);
        $this->load->view('home', $data);
    }

    public function redirect_edit_form_mt() {
        $data = array();
        $data['SearchMTID'] = $this->data_record_model->SearchByMTID();
        $test_id = $this->input->post('test_id', true);
        $data['CallMTInfo'] = $this->data_record_model->Searchmtreport($test_id = null);
//redirect("data_record/edit_erprhertwo_rpt");
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_mt', $data);
        $this->load->view('home', $data);
    }

    public function redirect_edit_form_erprhertwo() {
        $data = array();
        $data['SearchErprhertwoID'] = $this->data_record_model->SearchByErprhertwoID();
        $test_id = $this->input->post('test_id', true);
        $data['CallerprhertwoNameInfo'] = $this->data_record_model->SearchErprhertwo($test_id = null);
//redirect("data_record/edit_erprhertwo_rpt");
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_form_erprhertwo', $data);
        $this->load->view('home', $data);
    }

    public function redirect_edit_form_singlineLine() {
        $data = array();
        $data['SearchSingleLineID'] = $this->data_record_model->SearchBySingleLineID();
        $test_id = $this->input->post('test_id', true);
//$data['CallerprhertwoNameInfo'] = $this->data_record_model->SearchErprhertwo($test_id = null);
        $data['CallSingleLineNameInfo'] = $this->data_record_model->SearchSingleLinetwo($test_id = null);
//redirect("data_record/edit_erprhertwo_rpt");
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_form_singleLine', $data);
        $this->load->view('home', $data);
    }

    public function SearchHosptialNameInfo() {
        $data = array();
        $hospital_name = $this->input->post('hospital_name', true);
        $data['CallHospitalNameInfo'] = $this->data_record_model->SearchHospitalName($hospital_name);
        $data['maincontent'] = $this->load->view('source_file/add_new_hospital', $data);
        $this->load->view('home', $data);
    }

    public function SearchfluidNameInfo() {
        $data = array();
        $test_id = $this->input->post('test_id', true);
        $data['CallFluidInfo'] = $this->data_record_model->SearchFluidrpt($test_id);
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_form_fluid', $data);
        $this->load->view('home', $data);
    }

    public function SearchMtNameInfo() {
        $data = array();
        $test_id = $this->input->post('test_id', true);
        $data['CallMTInfo'] = $this->data_record_model->SearchMtrpt($test_id);
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_mt', $data);
        $this->load->view('home', $data);
    }

    public function SearchBoneMarrowInfo() {
        $data = array();
        $test_id = $this->input->post('test_id', true);
        $data['CallBomeMarrowInfo'] = $this->data_record_model->SearchBoneMarrowData($test_id);
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_form_bonemarrow', $data);
        $this->load->view('home', $data);
    }

    public function SearchEpPrHertwoNameInfo() {
        $data = array();
        $test_id = $this->input->post('test_id', true);
        $data['CallerprhertwoNameInfo'] = $this->data_record_model->SearchErprhertwo_rpt($test_id);
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_form_erprhertwo', $data);
        $this->load->view('home', $data);
    }

    public function SearchSingleLineNameInfo() {
        $data = array();
        $test_id = $this->input->post('test_id', true);
        $data['CallSingleLineNameInfo'] = $this->data_record_model->SearchSingleLine_rpt($test_id);
        $data['maincontent'] = $this->load->view('source_file/redirect_edit_form_singleLine', $data);
        $this->load->view('home', $data);
    }

    public function search_speciment() {

        $data = array();
        $specimen_name = $this->input->post('specimen_name', true);
        $data['CallSpecimenNameInfo'] = $this->data_record_model->SearchSpecimentName($specimen_name);
        $data['maincontent'] = $this->load->view('source_file/add_new_speciment', $data);
        $this->load->view('home', $data);
    }

    public function search_doctor_record() {
        $data = array();
        $doctor_name = $this->input->post('doctor_name', true);
        $data['CallDoctorNameInfo'] = $this->data_record_model->SearchDoctorName($doctor_name);
        $data['maincontent'] = $this->load->view('source_file/add_new_doctor', $data);
        $this->load->view('home', $data);
    }

    public function aj_data_hospital_name() {
        $data = $this->data_record_model->hospitalName_by_search();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function reporting_statment() {
        $data = array();
        $data['view_hospital'] = $this->data_record_model->hospitalName_by_search();
        $data['maincontent'] = $this->load->view('source_file/reporting_statment', $data);
        $this->load->view('home', $data);
    }

    public function searching_all_hospital_name() {
        $data = array();
        $data['view_hospital'] = $this->data_record_model->hospitalName_by_search();
        $data['maincontent'] = $this->load->view('source_file/view_hospital_name', $data);
        $this->load->view('home', $data);
    }

    public function searching_all_doctor_name_name() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/view_all_doctor_name', $data);
        $this->load->view('home', $data);
    }

    public function searching_all_ERPRHER_2SpeccimenName() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/view_all_erprher_two_spe_name', $data);
        $this->load->view('home', $data);
    }

    public function singline_all_sepcimen_name() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/view_all_singlie_spe_name', $data);
        $this->load->view('home', $data);
    }

    public function er_comment_all_data() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/er_comment_search_all', $data);
        $this->load->view('home', $data);
    }

    public function pr_comment_all_data() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/pr_comment_search_all', $data);
        $this->load->view('home', $data);
    }

    public function er_pr_hertwo_comment_data() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/erprhertwo_comment_search', $data);
        $this->load->view('home', $data);
    }

    public function by_name_info_searcherprhertwo() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/by_name_erprhertwo_comment_search', $data);
        $this->load->view('home', $data);
    }

    public function by_gender_info_searcherprhertwo() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/byGenderSearch_er_pr_her_Two', $data);
        $this->load->view('home', $data);
    }

    public function datewisesearcherprhertwo() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/datewisesearcherprhertwo', $data);
        $this->load->view('home', $data);
    }

    public function datewisesearch_singleLine() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/datewisesearch_singleLine', $data);
        $this->load->view('home', $data);
    }

    public function by_gender_singele_line_searchingerprhertwo() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/byGenderSearch_singleLinerpt', $data);
        $this->load->view('home', $data);
    }

    public function by_name_info_searchsingline() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/by_name_singleLine_search', $data);
        $this->load->view('home', $data);
    }

    public function call_all_hospital_name() {

        $this->datatables->select('hospital_id,hospital_name')
                ->unset_column('hospital_id')

//            ->join('add_bank', 'blank_card.bank_id=add_bank.bank_id', 'left')
//            ->join('main_product', 'blank_card.mProduct_id=main_product.mProduct_id', 'left')
//            ->join('user', 'blank_card.user_id=user.user_id', 'left')
                //  ->add_column('Actions', get_buttonsInfo('$her_two_id'), 'her_two_id')
                //->add_column('Actions', get_buttons('$1'), 'id')
                ->from('tbl_hospital_name');

        echo $this->datatables->generate();
    }

    public function call_all_singline_rpt_count() {

        $this->datatables->select('immu_id,test_id,note')
                ->unset_column('immu_id')
                ->from('tbl_immuno_single_rpt');

        echo $this->datatables->generate();
    }

    public function call_all_doctor_name() {

        $this->datatables->select('ref_by_doctor_id,ref_by')
                ->unset_column('ref_by_doctor_id')
                ->from('tbl_ref_byadd_doctor');

        echo $this->datatables->generate();
    }

    public function call_all_ERPRHER_2SpeccimenName() {

        $this->datatables->select('her_two_id,test_id,specimen_name')
                ->unset_column('her_two_id')
                ->from('tb_her_two');

        echo $this->datatables->generate();
    }

    public function call_all_singline_SpeccimenName() {

        $this->datatables->select('immu_id,test_id,specimen_name')
                ->unset_column('immu_id')
                ->from('tbl_immuno_single_rpt');

        echo $this->datatables->generate();
    }

    public function by_name_call_all_er_comment() {

        $this->datatables->select('her_two_id,test_id,sl_no,patient_name,reciv_date,deli_date,ref_by,hospital_name')
                ->unset_column('her_two_id')
                //->order_by('her_two_id')
                ->from('tb_her_two');

        echo $this->datatables->generate();
    }

    public function by_name_call_all_singleLine() {

        $this->datatables->select('immu_id,test_id,sl_no,patient_name,reciv_date,deli_date,ref_by,hospital_name')
                ->unset_column('immu_id')
                //->order_by('her_two_id')
                ->from('tbl_immuno_single_rpt');

        echo $this->datatables->generate();
    }

    public function call_all_er_comment() {

        $this->datatables->select('her_two_id,test_id,sl_no,er_result')
                ->unset_column('her_two_id')
                //->order_by('her_two_id')
                ->from('tb_her_two');

        echo $this->datatables->generate();
    }

    public function call_all_ahertwo_comment() {

        $this->datatables->select('her_two_id,test_id,sl_no,her_two_result')
                ->unset_column('her_two_id')
                //->order_by('her_two_id')
                ->from('tb_her_two');

        echo $this->datatables->generate();
    }

    public function call_all_pr_comment() {

        $this->datatables->select('her_two_id,test_id,sl_no,pr_result')
                ->unset_column('her_two_id')
                //->order_by('her_two_id')
                ->from('tb_her_two');

        echo $this->datatables->generate();
    }

    public function singline_graphical_data() {
        $data = array();
        $data['singline_data_male'] = $this->data_record_model->singline_data_male_search_male();
        $data['singline_data_data_female'] = $this->data_record_model->singline_databy_searchFemale();
        $data['singline_total_patient_count'] = $this->data_record_model->singlineby_searchtpatient();

        $year = $this->input->post('year', true);
        if ($year == Null) {
            $year = date("Y", strtotime(date("Y-m-d")));
        }
        $sdata['year'] = $year;
        $this->session->set_userdata($sdata);

        $data['jan'] = $this->data_record_model->m_patient_january_singline($year);
        $data['Feb'] = $this->data_record_model->m_patient_February_singline($year);
        $data['Mar'] = $this->data_record_model->m_patient_March_singline($year);
        $data['apr'] = $this->data_record_model->m_patient_april_singline($year);
        $data['may'] = $this->data_record_model->m_patient_may_singline($year);
        $data['june'] = $this->data_record_model->m_patient_june_singline($year);

        $data['july'] = $this->data_record_model->m_patient_july_singline($year);
        $data['aug'] = $this->data_record_model->m_patient_augs_singline($year);
        $data['sep'] = $this->data_record_model->m_patient_sep_singline($year);
        $data['octo'] = $this->data_record_model->m_patient_octo_singline($year);
        $data['nov'] = $this->data_record_model->m_patient_nov_singline($year);
        $data['decem'] = $this->data_record_model->m_patient_devem_singline($year);

        $data['maincontent'] = $this->load->view('source_file/view_sing_line_dataPresentation', $data);
        $this->load->view('home', $data);
    }

    public function er_pr_her_two_graphical_data() {
        $data = array();
        $data['er_per_hertwo_data_male'] = $this->data_record_model->er_pr_hertwoby_search_male();
        $data['er_per_hertwo_data_female'] = $this->data_record_model->er_pr_hertwoby_searchFemale();
        $data['total_patient_count'] = $this->data_record_model->er_pr_hertwoby_searchtpatient();

        $year = $this->input->post('year', true);
        if ($year == Null) {
            $year = date("Y", strtotime(date("Y-m-d")));
        }
        $sdata['year'] = $year;
        $this->session->set_userdata($sdata);

        $data['jan'] = $this->data_record_model->m_patient_january($year);
        $data['Feb'] = $this->data_record_model->m_patient_February($year);
        $data['Mar'] = $this->data_record_model->m_patient_March($year);
        $data['apr'] = $this->data_record_model->m_patient_april($year);
        $data['may'] = $this->data_record_model->m_patient_may($year);
        $data['june'] = $this->data_record_model->m_patient_june($year);

        $data['july'] = $this->data_record_model->m_patient_july($year);
        $data['aug'] = $this->data_record_model->m_patient_augs($year);
        $data['sep'] = $this->data_record_model->m_patient_sep($year);
        $data['octo'] = $this->data_record_model->m_patient_octo($year);
        $data['nov'] = $this->data_record_model->m_patient_nov($year);
        $data['decem'] = $this->data_record_model->m_patient_devem($year);
        $data['maincontent'] = $this->load->view('source_file/view_sing_line_erprhertwo_dataPresentation', $data);
        $this->load->view('home', $data);
    }

    public function add_new_report_er_pr_her_two() {
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hertwo_score'] = $this->data_record_model->select_all_hertwo_score();
        //$this->output->set_content_type('application/json')->set_output(json_encode($data));
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['view_specimen'] = $this->data_record_model->specimenName_by_search();
        $data['view_data_erprhertwo'] = $this->data_record_model->erprhertwo_by_search();
        $data['maincontent'] = $this->load->view('source_file/add_new_ER_PR_HERp_TWO_RPT_FRM', $data);

        $this->load->view('home', $data);
    }

    public function YearlySearch() {

        $year = $this->input->post('year', true);
        if ($year == Null) {
            $year = date("Y", strtotime(date("Y-m-d")));
        }
        $sdata['year'] = $year;
        $this->session->set_userdata($sdata);
        $data['maincontent'] = $this->load->view('source_file/YearlySearchHighChart');
        $this->load->view('home', $data);
    }

    public function SetSingleLineYearlySearch() {

        $year = $this->input->post('year', true);
        if ($year == Null) {
            $year = date("Y", strtotime(date("Y-m-d")));
        }
        $sdata['year'] = $year;
        $this->session->set_userdata($sdata);
        $data['maincontent'] = $this->load->view('source_file/YearlySearchPieChartSingleLine');
        $this->load->view('home', $data);
    }

    public function SearchHertworesultinfo() {

        $Value = $_GET['Value'];
        $data['Value'] = $this->data_record_model->Searchhertworesult($Value);
        echo $this->load->view('source_file/Ajax_hertwoResult', $data);
    }

    public function add_new_report_singlie_line_report() {
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();

        $data['view_specimen'] = $this->data_record_model->specimenName_by_search();
        $data['maincontent'] = $this->load->view('source_file/add_new_single_line_frm', $data);
        $this->load->view('home', $data);
    }

    public function er_only() {
        $data['view_data_erprhertwo'] = $this->data_record_model->erprhertwo_by_search_info();
        $data['maincontent'] = $this->load->view('source_file/er_only', $data);
        $this->load->view('home', $data);
    }

    public function pr_only() {
        $data['view_data_erprhertwo'] = $this->data_record_model->erprhertwo_by_search_pr();
        $data['maincontent'] = $this->load->view('source_file/pr_only', $data);
        $this->load->view('home', $data);
    }

    public function her_two_only() {
        $data['view_data_erprhertwo'] = $this->data_record_model->erprhertwo_by_search_hertwo();
        $data['maincontent'] = $this->load->view('source_file/herTwo_only', $data);
        $this->load->view('home', $data);
    }

    public function er_pr_her_two_only() {
        $data['view_data_erprhertwo'] = $this->data_record_model->erprhertwo_by_search_erprhertwo();
        $data['maincontent'] = $this->load->view('source_file/er_pr_herTwo_only', $data);
        $this->load->view('home', $data);
    }

    public function GrapicalRpt() {
        $data['maincontent'] = $this->load->view('source_file/graphicalreport');
        $this->load->view('home', $data);
    }

    public function GrapicalPieChartRpt() {
        $data['maincontent'] = $this->load->view('source_file/GrapicalPieChartRpt');
        $this->load->view('home', $data);
    }

    public function GrapicalRpts() {
        $data['maincontent'] = $this->load->view('source_file/graphicalreportSearch');
        $this->load->view('home', $data);
    }

    public function single_line_rpt_count() {

        $data['maincontent'] = $this->load->view('source_file/single_line_rptCount');
        $this->load->view('home', $data);
    }

    public function date_range_erpor_hertwo() {
        $data['maincontent'] = $this->load->view('source_file/date_range_erprhertwo');
        $this->load->view('home', $data);
    }

    public function test_single_line_rpt_count() {
        $data = array();
        $data['view_data_singleline'] = $this->data_record_model->erprhertwo_by_search_single_rpt_er();
        $data['maincontent'] = $this->load->view('source_file/test', $data);
        $this->load->view('home', $data);
    }

    public function bone_marrow() {
        $test_id = $this->session->userdata('test_id');
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['FindbyTestId'] = $this->data_record_model->SearchByFindTestid($test_id);
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['SearchBoneMarrowID'] = $this->data_record_model->SearchByBonemarrowIDNfo();
        $data['view_bonemarrow'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        $data['view_CellINfo'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        $data['view_Lymphopohosis'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        $data['view_erythropohosis'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        $data['view_megakarioposis'] = $this->data_record_model->bonemarrowClinicalFindings_by_search();
        $data['maincontent'] = $this->load->view('source_file/bone_marrow_frm_search_by_id', $data);
        $this->load->view('home', $data);
    }

    public function BoneMarrowPatientParticularInfo() {

        $test_id = $_GET['test_id'];
        $data['BoneMarrowParticularPtInfo'] = $this->data_record_model->SearchByBMPtInfo($test_id);

        $sdata = array();
        $sdata['test_id'] = $_GET['test_id'];
        $this->session->set_userdata($sdata);
        echo $this->load->view('source_file/ShowBoneMarrowParticular', $data);
    }

    public function customized_search() {
        $data = array();
//$data['view_data_erprhertwo']=$this->data_record_model->erprhertwo_by_search_info();
        $data['maincontent'] = $this->load->view('source_file/customized_search', $data);
        $this->load->view('home', $data);
    }

    public function haematology_rpt() {
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['view_specimen'] = $this->data_record_model->specimenName_by_search();
        $data['view_data_haematology'] = $this->data_record_model->haematology_rpt_by_search();

        $data['maincontent'] = $this->load->view('source_file/haemtology_rpt_frm', $data);
        $this->load->view('home', $data);
    }

    public function stool_report() {
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['view_specimen'] = $this->data_record_model->specimenName_by_search();
        $data['view_data_stool_re'] = $this->data_record_model->stool_rpt_by_search();
        $data['maincontent'] = $this->load->view('source_file/stool_rpt_frm', $data);
        $this->load->view('home', $data);
    }

    public function urine_report() {
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
//$data['view_specimen']=$this->data_record_model->specimenName_by_search();
        $data['view_data_urine_re'] = $this->data_record_model->urine_rpt_by_search();
        $data['maincontent'] = $this->load->view('source_file/urine_rpt_frm', $data);
        $this->load->view('home', $data);
    }

    public function add_new_fluid_report() {
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
//$data['specimen_info']=$this->data_record_model->select_specimen();
        $data['view_specimen'] = $this->data_record_model->specimenName_by_search();
        $data['view_data_asciticfluid'] = $this->data_record_model->asciticFluid_rpt_by_search();
//echo '<pre>';
//print_r($data['view_data_erprhertwo']);
//exit();
        $data['maincontent'] = $this->load->view('source_file/fluid_rpt_frm', $data);
        $this->load->view('home', $data);
    }

    public function add_new_mt_test() {
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['maincontent'] = $this->load->view('source_file/mt_rpt_frm', $data);
        $this->load->view('home', $data);
    }

    public function add_new_report_semen() {
        $data = array();
        $data['doctor_info'] = $this->data_record_model->select_doctor();
        $data['hospital_info'] = $this->data_record_model->select_hospital();
        $data['specimen_info'] = $this->data_record_model->select_specimen();
        $data['view_specimen'] = $this->data_record_model->specimenName_by_search();
        $data['view_data_semenanalysis'] = $this->data_record_model->semen_rpt_by_search();
        $data['maincontent'] = $this->load->view('source_file/semen_rpt_frm', $data);
        $this->load->view('home', $data);
    }

    public function patient_data_statment_information() {
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $value = $this->input->post('value', true);

        $pdfdata = array();
        $pdfdata['date_from'] = $date_from;
        $pdfdata['date_to'] = $date_to;
        $pdfdata['value'] = $value;
        $this->session->set_userdata($pdfdata);
        $data = array();
        $data['information'] = $this->data_record_model->patientinfo_groupID($date_from, $date_to, $value);
        $data['maincontent'] = $this->load->view('source_file/view_reporting_statmenmt', $data);
        $this->load->view('home', $data);
    }

    public function patient_data_statment_informationerprhertwo() {
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $pdfdata = array();
        $pdfdata['date_from'] = $date_from;
        $pdfdata['date_to'] = $date_to;
        // $pdfdata['value'] = $value;
        $this->session->set_userdata($pdfdata);
        $data = array();
        $data['information'] = $this->data_record_model->erprhertwopatientinfo_groupID($date_from, $date_to);
        $data['maincontent'] = $this->load->view('source_file/view_reporting_statmenmt_erprhertwo', $data);
        $this->load->view('home', $data);
    }

    public function er_date_range_conditional_searching() {
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $value = $this->input->post('value', true);

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        $pdfdata = array();
        $pdfdata['date_from'] = $date_from;
        $pdfdata['date_to'] = $date_to;
        $pdfdata['value'] = $value;
        $this->session->set_userdata($pdfdata);
        $data = array();

        $data['information'] = $this->data_record_model->er_comment_searcingInformation($starting_date, $ending_date, $value);
        $data['maincontent'] = $this->load->view('source_file/view_reporting_statmenmt_for_er_comment', $data);
        $this->load->view('home', $data);
    }

    public function by_Gender_and_date_range_conditional_searching_er_pr_hertwo() {
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $value = $this->input->post('value', true);

        $pdfdata = array();
        $pdfdata['date_from'] = $date_from;
        $pdfdata['date_to'] = $date_to;
        $pdfdata['value'] = $value;
        $this->session->set_userdata($pdfdata);
        $data = array();
        $data['information'] = $this->data_record_model->byGender_er_pr_her_two_DateRange_comment_searcingInformation($date_from, $date_to, $value);
        $data['maincontent'] = $this->load->view('source_file/byGenderview_reporting_statmenmt_for_er_pr_herTwocomment', $data);
        $this->load->view('home', $data);
    }

    public function by_Gender_and_date_range_conditional_searching_singleLine() {
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $value = $this->input->post('value', true);

        $pdfdata = array();
        $pdfdata['date_from'] = $date_from;
        $pdfdata['date_to'] = $date_to;
        $pdfdata['value'] = $value;
        $this->session->set_userdata($pdfdata);
        $data = array();
        $data['information'] = $this->data_record_model->byGender_singleLine_DateRange_comment_searcingInformation($date_from, $date_to, $value);
        $data['maincontent'] = $this->load->view('source_file/byGenderview_reporting_statmenmt_for_singLine', $data);
        $this->load->view('home', $data);
    }

    public function pr_date_range_conditional_searching() {
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $value = $this->input->post('value', true);

        $pdfdata = array();
        $pdfdata['date_from'] = $date_from;
        $pdfdata['date_to'] = $date_to;
        $pdfdata['value'] = $value;
        $this->session->set_userdata($pdfdata);
        $data = array();
        $data['information'] = $this->data_record_model->pr_comment_searcingInformation($date_from, $date_to, $value);
        $data['maincontent'] = $this->load->view('source_file/view_reporting_statmenmt_for_pr_comment', $data);
        $this->load->view('home', $data);
    }

    public function hertwo_date_range_conditional_searching() {
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $value = $this->input->post('value', true);

        $pdfdata = array();
        $pdfdata['date_from'] = $date_from;
        $pdfdata['date_to'] = $date_to;
        $pdfdata['value'] = $value;
        $this->session->set_userdata($pdfdata);
        $data = array();
        $data['information'] = $this->data_record_model->hertwocomment_searcingInformation($date_from, $date_to, $value);
        //  $data['information'] = $this->data_record_model->patientinfo_dateRangeInfo($date_from, $date_to);

        $data['maincontent'] = $this->load->view('source_file/view_reporting_statmenmt_for_erprhertwo_comment', $data);
        $this->load->view('home', $data);
    }

    public function singleLine_date_range_conditional_searching() {
        $date_from = date("Y-m-d", strtotime($this->input->post('starting_date', true)));
        $date_to = date("Y-m-d", strtotime($this->input->post('ending_date', true)));
        $value = $this->input->post('value', true);
        //echo $date_from."--".$date_to;
        //exit();


        $pdfdata = array();
        $pdfdata['starting_date'] = $date_from;
        $pdfdata['ending_date'] = $date_to;
        $pdfdata['value'] = $value;
        $this->session->set_userdata($pdfdata);
        $data = array();


        if ($value):
            $sql = $this->db->query("SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.note LIKE '%$value%' AND tbl_immuno_single_rpt.current_date BETWEEN '$date_from' AND '$date_to'");
            $data['information'] = $sql->result();
        elseif ($value == ""):
            $sqldatarange = $this->db->query("SELECT * FROM tbl_immuno_single_rpt WHERE tbl_immuno_single_rpt.current_date BETWEEN '$date_from' AND '$date_to'");
            $data['information'] = $sqldatarange->result();
        endif;

        $data['maincontent'] = $this->load->view('source_file/view_reporting_statmenmt_for_singleLineRpt', $data);
        $this->load->view('home', $data);
    }

    public function GraphicalPieChartReportYearWise() {

        $currentyear = $this->session->userdata('year');
        $data['cd15'] = $this->data_record_model->cd15currentyear($currentyear);
        $data['CD117'] = $this->data_record_model->CD117currentyear($currentyear);
        $data['lca'] = $this->data_record_model->lcacurrentyear($currentyear);
        $data['CD30'] = $this->data_record_model->CD30currentyear($currentyear);
        $data['CD20'] = $this->data_record_model->CD20currentyear($currentyear);
        $data['CD99'] = $this->data_record_model->CD99currentyear($currentyear);
        $data['CK'] = $this->data_record_model->CKcurrentyear($currentyear);
        $data['S100'] = $this->data_record_model->S100currentyear($currentyear);
        $data['Vimentin'] = $this->data_record_model->Vimentincurrentyear($currentyear);
        $data['HMB45'] = $this->data_record_model->HMB45currentyear($currentyear);
        $data['Kappa'] = $this->data_record_model->Kappacurrentyear($currentyear);
        $data['desmin'] = $this->data_record_model->desmincurrentyear($currentyear);
        $data['Lambda'] = $this->data_record_model->Lambdacurrentyear($currentyear);
        $data['GFAF'] = $this->data_record_model->GFAFcurrentyear($currentyear);
        $data['EMA'] = $this->data_record_model->EMAcurrentyear($currentyear);
        $data['T_T_F1'] = $this->data_record_model->T_T_F1currentyear($currentyear);

        $cd15 = $data['cd15'];
        $CD117 = $data['CD117'];
        $lca = $data['lca'];
        $CD30 = $data['CD30'];
        $CD20 = $data['CD20'];
        $CD99 = $data['CD99'];
        $CK = $data['CK'];
        $S100 = $data['S100'];
        $Vimentin = $data['Vimentin'];
        $HMB45 = $data['HMB45'];
        $Kappa = $data['Kappa'];
        $desmin = $data['desmin'];
        $Lambda = $data['Lambda'];
        $GFAF = $data['GFAF'];
        $EMA = $data['EMA'];
        $T_T_F1 = $data['T_T_F1'];


        $allnformation = array(
            array(
                'name' => 'LCA',
                'val' => $lca,
            ), array(
                'name' => 'CD15',
                'val' => $cd15,
            ),
            array(
                'name' => 'CD117',
                'val' => $CD117,
            ),
            array(
                'name' => 'CD30',
                'val' => $CD30,
            ),
            array(
                'name' => 'CD20',
                'val' => $CD20,
            ),
            array(
                'name' => 'CD99',
                'val' => $CD99,
            ),
            array(
                'name' => 'S100',
                'val' => $S100,
            ), array(
                'name' => 'CK',
                'val' => $CK,
            ), array(
                'name' => 'Vimentin',
                'val' => $Vimentin,
            ), array(
                'name' => 'HMB45',
                'val' => $HMB45,
            ), array(
                'name' => 'Desmin',
                'val' => $desmin,
            ), array(
                'name' => 'Kappa',
                'val' => $Kappa,
            ), array(
                'name' => 'Lambda',
                'val' => $Lambda,
            ), array(
                'name' => 'GFAF',
                'val' => $GFAF,
            ), array(
                'name' => 'EMA',
                'val' => $EMA,
            ), array(
                'name' => 'T.T.F1',
                'val' => $T_T_F1,
            )
        );

        $rows = array();
        $rows['type'] = 'pie';
        $rows['name'] = 'Revenue';

        foreach ($allnformation as $value) {
            $rows['data'][] = array($value['name'], $value['val']);
        }
        $rslt = array();
        array_push($rslt, $rows);
        print json_encode($rslt, JSON_NUMERIC_CHECK);
    }

    public function GraphicalPieChartReportView() {

        $currentyear = date("Y");
        $data['cd15'] = $this->data_record_model->cd15currentyear($currentyear);
        $data['CD117'] = $this->data_record_model->CD117currentyear($currentyear);
        $data['lca'] = $this->data_record_model->lcacurrentyear($currentyear);
        $data['CD30'] = $this->data_record_model->CD30currentyear($currentyear);
        $data['CD20'] = $this->data_record_model->CD20currentyear($currentyear);
        $data['CD99'] = $this->data_record_model->CD99currentyear($currentyear);
        $data['CK'] = $this->data_record_model->CKcurrentyear($currentyear);
        $data['S100'] = $this->data_record_model->S100currentyear($currentyear);
        $data['Vimentin'] = $this->data_record_model->Vimentincurrentyear($currentyear);
        $data['HMB45'] = $this->data_record_model->HMB45currentyear($currentyear);
        $data['Kappa'] = $this->data_record_model->Kappacurrentyear($currentyear);
        $data['desmin'] = $this->data_record_model->desmincurrentyear($currentyear);
        $data['Lambda'] = $this->data_record_model->Lambdacurrentyear($currentyear);
        $data['GFAF'] = $this->data_record_model->GFAFcurrentyear($currentyear);
        $data['EMA'] = $this->data_record_model->EMAcurrentyear($currentyear);
        $data['T_T_F1'] = $this->data_record_model->T_T_F1currentyear($currentyear);

        $cd15 = $data['cd15'];
        $CD117 = $data['CD117'];
        $lca = $data['lca'];
        $CD30 = $data['CD30'];
        $CD20 = $data['CD20'];
        $CD99 = $data['CD99'];
        $CK = $data['CK'];
        $S100 = $data['S100'];
        $Vimentin = $data['Vimentin'];
        $HMB45 = $data['HMB45'];
        $Kappa = $data['Kappa'];
        $desmin = $data['desmin'];
        $Lambda = $data['Lambda'];
        $GFAF = $data['GFAF'];
        $EMA = $data['EMA'];
        $T_T_F1 = $data['T_T_F1'];


        $allnformation = array(
            array(
                'name' => 'LCA',
                'val' => $lca,
            ), array(
                'name' => 'CD15',
                'val' => $cd15,
            ),
            array(
                'name' => 'CD117',
                'val' => $CD117,
            ),
            array(
                'name' => 'CD30',
                'val' => $CD30,
            ),
            array(
                'name' => 'CD20',
                'val' => $CD20,
            ),
            array(
                'name' => 'CD99',
                'val' => $CD99,
            ),
            array(
                'name' => 'S100',
                'val' => $S100,
            ), array(
                'name' => 'CK',
                'val' => $CK,
            ), array(
                'name' => 'Vimentin',
                'val' => $Vimentin,
            ), array(
                'name' => 'HMB45',
                'val' => $HMB45,
            ), array(
                'name' => 'Desmin',
                'val' => $desmin,
            ), array(
                'name' => 'Kappa',
                'val' => $Kappa,
            ), array(
                'name' => 'Lambda',
                'val' => $Lambda,
            ), array(
                'name' => 'GFAF',
                'val' => $GFAF,
            ), array(
                'name' => 'EMA',
                'val' => $EMA,
            ), array(
                'name' => 'T.T.F1',
                'val' => $T_T_F1,
            )
        );

        $rows = array();
        $rows['type'] = 'pie';
        $rows['name'] = 'Revenue';

        foreach ($allnformation as $value) {
            $rows['data'][] = array($value['name'], $value['val']);
        }
        $rslt = array();
        array_push($rslt, $rows);
        print json_encode($rslt, JSON_NUMERIC_CHECK);
    }

    public function GraphicalReportViewDetails() {

        $year = date("Y");
        //$year=$this->input->post('year');
//SingleLine
        $singline_jan = $this->data_record_model->m_patient_january_singline($year);
        $singline_Feb = $this->data_record_model->m_patient_February_singline($year);
        $singline_Mar = $this->data_record_model->m_patient_March_singline($year);
        $singline_apr = $this->data_record_model->m_patient_april_singline($year);
        $singline_may = $this->data_record_model->m_patient_may_singline($year);
        $singline_june = $this->data_record_model->m_patient_june_singline($year);
        $singline_july = $this->data_record_model->m_patient_july_singline($year);
        $singline_aug = $this->data_record_model->m_patient_augs_singline($year);
        $singline_sep = $this->data_record_model->m_patient_sep_singline($year);
        $singline_octo = $this->data_record_model->m_patient_octo_singline($year);
        $singline_nov = $this->data_record_model->m_patient_nov_singline($year);
        $singline_decem = $this->data_record_model->m_patient_devem_singline($year);
//HER2
        $her_2jan = $this->data_record_model->m_patient_january($year);
        $her_2Feb = $this->data_record_model->m_patient_February($year);
        $her_2Mar = $this->data_record_model->m_patient_March($year);
        $her_2apr = $this->data_record_model->m_patient_april($year);
        $her_2may = $this->data_record_model->m_patient_may($year);
        $her_2june = $this->data_record_model->m_patient_june($year);
        $her_2july = $this->data_record_model->m_patient_july($year);
        $her_2aug = $this->data_record_model->m_patient_augs($year);
        $her_2sep = $this->data_record_model->m_patient_sep($year);
        $her_2octo = $this->data_record_model->m_patient_octo($year);
        $her_2nov = $this->data_record_model->m_patient_nov($year);
        $her_2decem = $this->data_record_model->m_patient_devem($year);


        $allnformation = array(
            array(
                'month' => 'Jan',
                'ERPRHER_2' => $her_2jan,
                'SingleLine' => $singline_jan,
            ),
            array(
                'month' => 'Feb',
                'ERPRHER_2' => $her_2Feb,
                'SingleLine' => $singline_Feb,
            ),
            array(
                'month' => 'Mar',
                'ERPRHER_2' => $her_2Mar,
                'SingleLine' => $singline_Mar,
            ),
            array(
                'month' => 'Apr',
                'ERPRHER_2' => $her_2apr,
                'SingleLine' => $singline_apr,
            ),
            array(
                'month' => 'May',
                'ERPRHER_2' => $her_2may,
                'SingleLine' => $singline_may,
            ),
            array(
                'month' => 'Jun',
                'ERPRHER_2' => $her_2june,
                'SingleLine' => $singline_june,
            ),
            array(
                'month' => 'Jul',
                'ERPRHER_2' => $her_2july,
                'SingleLine' => $singline_july,
            ),
            array(
                'month' => 'Aug',
                'ERPRHER_2' => $her_2aug,
                'SingleLine' => $singline_aug,
            ),
            array(
                'month' => 'Sep',
                'ERPRHER_2' => $her_2sep,
                'SingleLine' => $singline_sep,
            ),
            array(
                'month' => 'Oct',
                'ERPRHER_2' => $her_2octo,
                'SingleLine' => $singline_octo,
            ),
            array(
                'month' => 'Nov',
                'ERPRHER_2' => $her_2nov,
                'SingleLine' => $singline_nov,
            ),
            array(
                'month' => 'Dec',
                'ERPRHER_2' => $her_2decem,
                'SingleLine' => $singline_decem,
            )
        );
        $category = array();
        $category['name'] = 'Months';

        $series1 = array();
        $series1['name'] = 'ER PR HER-2';

        $series2 = array();
        $series2['name'] = 'Single Line';

        foreach ($allnformation as $value) {

            $category['data'][] = $value['month'];
            $series1['data'][] = $value['ERPRHER_2'];
            $series2['data'][] = $value['SingleLine'];
            // $series3['data'][] = $value->highcharts;   
        }
        $result = array();
        array_push($result, $category);
        array_push($result, $series1);
        array_push($result, $series2);
        //   array_push($result, $series3);
        print json_encode($result, JSON_NUMERIC_CHECK);
    }

    public function GraphicalReportYearlySearch() {


        $year = $this->session->userdata('year');
//SingleLine
        $singline_jan = $this->data_record_model->m_patient_january_singline($year);
        $singline_Feb = $this->data_record_model->m_patient_February_singline($year);
        $singline_Mar = $this->data_record_model->m_patient_March_singline($year);
        $singline_apr = $this->data_record_model->m_patient_april_singline($year);
        $singline_may = $this->data_record_model->m_patient_may_singline($year);
        $singline_june = $this->data_record_model->m_patient_june_singline($year);
        $singline_july = $this->data_record_model->m_patient_july_singline($year);
        $singline_aug = $this->data_record_model->m_patient_augs_singline($year);
        $singline_sep = $this->data_record_model->m_patient_sep_singline($year);
        $singline_octo = $this->data_record_model->m_patient_octo_singline($year);
        $singline_nov = $this->data_record_model->m_patient_nov_singline($year);
        $singline_decem = $this->data_record_model->m_patient_devem_singline($year);
//HER2
        $her_2jan = $this->data_record_model->m_patient_january($year);
        $her_2Feb = $this->data_record_model->m_patient_February($year);
        $her_2Mar = $this->data_record_model->m_patient_March($year);
        $her_2apr = $this->data_record_model->m_patient_april($year);
        $her_2may = $this->data_record_model->m_patient_may($year);
        $her_2june = $this->data_record_model->m_patient_june($year);
        $her_2july = $this->data_record_model->m_patient_july($year);
        $her_2aug = $this->data_record_model->m_patient_augs($year);
        $her_2sep = $this->data_record_model->m_patient_sep($year);
        $her_2octo = $this->data_record_model->m_patient_octo($year);
        $her_2nov = $this->data_record_model->m_patient_nov($year);
        $her_2decem = $this->data_record_model->m_patient_devem($year);


        $allnformation = array(
            array(
                'month' => 'Jan',
                'ERPRHER_2' => $her_2jan,
                'SingleLine' => $singline_jan,
            ),
            array(
                'month' => 'Feb',
                'ERPRHER_2' => $her_2Feb,
                'SingleLine' => $singline_Feb,
            ),
            array(
                'month' => 'Mar',
                'ERPRHER_2' => $her_2Mar,
                'SingleLine' => $singline_Mar,
            ),
            array(
                'month' => 'Apr',
                'ERPRHER_2' => $her_2apr,
                'SingleLine' => $singline_apr,
            ),
            array(
                'month' => 'May',
                'ERPRHER_2' => $her_2may,
                'SingleLine' => $singline_may,
            ),
            array(
                'month' => 'Jun',
                'ERPRHER_2' => $her_2june,
                'SingleLine' => $singline_june,
            ),
            array(
                'month' => 'Jul',
                'ERPRHER_2' => $her_2july,
                'SingleLine' => $singline_july,
            ),
            array(
                'month' => 'Aug',
                'ERPRHER_2' => $her_2aug,
                'SingleLine' => $singline_aug,
            ),
            array(
                'month' => 'Sep',
                'ERPRHER_2' => $her_2sep,
                'SingleLine' => $singline_sep,
            ),
            array(
                'month' => 'Oct',
                'ERPRHER_2' => $her_2octo,
                'SingleLine' => $singline_octo,
            ),
            array(
                'month' => 'Nov',
                'ERPRHER_2' => $her_2nov,
                'SingleLine' => $singline_nov,
            ),
            array(
                'month' => 'Dec',
                'ERPRHER_2' => $her_2decem,
                'SingleLine' => $singline_decem,
            )
        );
        $category = array();
        $category['name'] = 'Months';

        $series1 = array();
        $series1['name'] = 'ER PR HER-2';

        $series2 = array();
        $series2['name'] = 'Single Line';
        //$series3 = array();
        //$series3['name'] = 'Highcharts';
        foreach ($allnformation as $value) {

            $category['data'][] = $value['month'];
            $series1['data'][] = $value['ERPRHER_2'];
            $series2['data'][] = $value['SingleLine'];
            // $series3['data'][] = $value->highcharts;   
        }
        $result = array();
        array_push($result, $category);
        array_push($result, $series1);
        array_push($result, $series2);
        //   array_push($result, $series3);


        print json_encode($result, JSON_NUMERIC_CHECK);
    }

    public function erprhertwoConditionalReportPrintingFunction() {
        $date_from = $this->session->userdata('starting_date', true);
        $date_to = $this->session->userdata('ending_date', true);
        $value = $this->session->userdata('value', true);

        $data = array();
        $data['informationInfo'] = $this->data_record_model->patientinfo_groupID($date_from, $date_to, $value);
        $data['informationInfo'] = $this->data_record_model->patientinfo_dateRangeInfo($date_from, $date_to);

        $this->load->view('source_file/printerprhertwoConditional', $data);
//$this->load->view('home',$data); 
    }

    public function patient_data_statment_information_single_line() {
        $date_from = $this->input->post('starting_date_single_line', true);
        $date_to = $this->input->post('ending_date_single_line', true);
        //$cc_name_id = $this->input->post('cc_name_id', true);

        $sdata = array();
        $sdata['date_from'] = $date_from;
        $sdata['date_to'] = $date_to;
        //$pdfinfo['cc_name_id'] = $cc_name_id;
        $this->session->set_userdata($sdata);
        $data['cd15'] = $this->data_record_model->patientinfo__single_line_statment($date_from, $date_to);
        $data['CD117'] = $this->data_record_model->patientinfo__single_line_statmentCD117($date_from, $date_to);
        $data['CD30'] = $this->data_record_model->patientinfo__single_line_statmentCD30($date_from, $date_to);
        $data['CD20'] = $this->data_record_model->patientinfo__single_line_statmentCD20($date_from, $date_to);
        $data['CD99'] = $this->data_record_model->patientinfo__single_line_statmentCD_99($date_from, $date_to);
        $data['CK'] = $this->data_record_model->patientinfo__single_line_statmentCk($date_from, $date_to);
        $data['lca'] = $this->data_record_model->patientinfo__single_line_statmentlca($date_from, $date_to);
        $data['S100'] = $this->data_record_model->patientinfo__single_line_statmentS100($date_from, $date_to);
        $data['Vimentin'] = $this->data_record_model->patientinfo__single_line_statmentVimentin($date_from, $date_to);
        $data['HMB45'] = $this->data_record_model->patientinfo__single_line_statmentHMB45($date_from, $date_to);
        $data['Kappa'] = $this->data_record_model->patientinfo__single_line_statmentKappa($date_from, $date_to);
        $data['desmin'] = $this->data_record_model->patientinfo__single_line_statmentdesmin($date_from, $date_to);
        $data['Lambda'] = $this->data_record_model->patientinfo__single_line_statmentLambda($date_from, $date_to);

        $data['GFAF'] = $this->data_record_model->patientinfo__single_line_statmentGFAF($date_from, $date_to);
        $data['EMA'] = $this->data_record_model->patientinfo__single_line_statmentEMA($date_from, $date_to);
        $data['T_T_F1'] = $this->data_record_model->patientinfo__single_line_statmentT_T_F1($date_from, $date_to);

        $cd15 = $data['cd15'];
        $CD117 = $data['CD117'];
        $CD30 = $data['CD30'];
        $CD20 = $data['CD20'];
        $CD99 = $data['CD99'];
        $CK = $data['CK'];
        $lca = $data['lca'];
        $S100 = $data['S100'];
        $Vimentin = $data['Vimentin'];
        $HMB45 = $data['HMB45'];
        $Kappa = $data['Kappa'];
        $desmin = $data['desmin'];
        $Lambda = $data['Lambda'];
        $GFAF = $data['GFAF'];
        $EMA = $data['EMA'];
        $T_T_F1 = $data['T_T_F1'];

        $value = array($cd15, $CD117, $CD30, $CD20, $CD99, $CK, $lca, $S100, $Vimentin, $HMB45, $Kappa, $desmin, $Lambda, $GFAF, $EMA, $T_T_F1);
        $data['result'] = array_sum($value);

        $data['maincontent'] = $this->load->view('source_file/view_reporting_statmenmt_single_line', $data);
        $this->load->view('home', $data);
    }

    public function patient_data_statment_information_group_wise() {

        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $value = $this->input->post('value', true);
        //$cc_name_id = $this->input->post('cc_name_id', true);

        $data = array();
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['value'] = $value;
        $data['information'] = $this->data_record_model->patientinfo_groupID_groupBy($date_from, $date_to, $value);
        $data['maincontent'] = $this->load->view('source_file/view_reporting_statmenmt_groupby', $data);
        $this->load->view('home', $data);
    }

//------------------------------------------------------------------------------database backup function---------------------------------
    public function db_backup() {

        $this->load->dbutil();
        $backup = & $this->dbutil->backup();
        $date = new DateTime();
        $date_result = $date->format(' d-m-y (H-i-s)');
        $backup_file = "Reporting Database Backup" . $date_result . "." . "gz";
        $this->load->helper('download');
        force_download($backup_file, $backup);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */