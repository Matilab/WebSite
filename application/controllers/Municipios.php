
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Municipios extends MY_Controller {
      
      public function  __construct() {
        parent::__construct();
      }
    
      public function index(){
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
          if($this->data['response']['status'] == 'FALSE'){
            $this->data['response']['data'] = $this->sendGet('api/municipios/get', $this->data['login']->data->token, true)->data;
          }
        } else {
          $this->data['response'] = $this->sendGet('api/municipios/get', $this->data['login']->data->token, true);
        }
    
        $this->scripts('assets/javascript/api/municipios/municipios.js');
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/municipios/GridMunicipios', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function get(){
        echo json_encode(['data' => $this->sendGet('api/municipios/get', $this->data['login']->data->token)->data]);
      }
    
      public function create(){
        $this->data['nameView'] = 'create';
        if($this->session->flashdata('response'))
          $this->data['response'] = $this->session->flashdata('response');
        
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/municipios/CreateMunicipios', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function add(){
        if($_POST){
          $salvarEVoltar = isset($_POST['cbxSaveBack']) ? TRUE : FALSE;
          unset($_POST['cbxSaveBack']);

          $response = $this->sendPost('api/municipios/create', $this->data['login']->data->token, $this->input->post(), true);

          if($response['status'] == 'FALSE')
            $response['data'] = $_POST;
          
          if($salvarEVoltar) $response['data']['cbxSaveBack'] = 'on';
          
          $this->session->set_flashdata('response', $response); 

          if($response['status'] == 'FALSE'){
            redirect('municipios/create');
          } else {
            $salvarEVoltar ? redirect('municipios') : redirect('municipios/edit/'.$response['data'][0]['mun_Id']);
          }
        }
      }
    
      public function edit($Id){
        $this->data['nameView'] = 'edit';
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');

          if(isset($this->data['response']['comeFromChild'])){
            $this->data['response'] = $this->sendGet('api/municipios/get/'.$Id, $this->data['login']->data->token, true);
          }
      
        } else {
          $this->data['response'] = $this->sendGet('api/municipios/get/'.$Id, $this->data['login']->data->token, true);
        }

				$this->scripts('assets/javascript/api/pessoasjuridica/pessoasjuridica.js');
				$this->scripts('assets/javascript/api/regs0140efdc/regs0140efdc.js');
				$this->scripts('assets/javascript/api/regs0150efdc/regs0150efdc.js');

        if(empty($this->data['response']['data'])){
          $this->data['heading'] = 'Dado não encontrado.';
          $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
          $this->load->view('errors/html/my_error_404', $this->data);
        } else {
          $this->load->view('dashboard/template/header', $this->data);
          $this->load->view('api/municipios/EditMunicipios', $this->data);
          $this->load->view('dashboard/template/footer', $this->data);
        }
      }
    
      public function update($Id){
        if($_POST){
          $salvarEVoltar = isset($_POST['cbxSaveBack']) ? TRUE : FALSE;
          unset($_POST['cbxSaveBack']);

          $response = $this->sendPost('api/municipios/update/'.$Id, $this->data['login']->data->token, $this->input->post(), true);

          if($response['status'] == 'FALSE'){
            $_POST['mun_Id'] = $Id;
            $response['data'][0] = $_POST;
          }

          if($salvarEVoltar) $response['data']['cbxSaveBack'] = 'on';

          $this->session->set_flashdata('response', $response); 
          
          if($response['status'] == 'FALSE'){
            redirect('municipios/edit/'.$Id);
          } else {
            $salvarEVoltar ? redirect('municipios') : redirect('municipios/edit/'.$Id);
          }
        }
      }
    
      public function delete(){
        if($_POST){
          $Id = $_POST['Id'];
    
          $response = $this->sendGet('api/municipios/get/'.$Id, $this->data['login']->data->token, true);    
    
          if(empty($response['data'])){
            $this->data['heading'] = 'Dado não encontrado.';
            $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
            $this->load->view('errors/html/my_error_404', $this->data);
          } else {
            $response = $this->sendDelete('api/municipios/delete/'.$Id, $this->data['login']->data->token, true);
            $this->session->set_flashdata('response', $response); 
            redirect('municipios');
          }
        }
      }

      public function view($Id){
        $this->data['nameView'] = 'view';
        $this->data['response'] = $this->sendGet('api/municipios/get/'.$Id, $this->data['login']->data->token, true);

				$this->scripts('assets/javascript/api/pessoasjuridica/pessoasjuridica.js');
				$this->scripts('assets/javascript/api/regs0140efdc/regs0140efdc.js');
				$this->scripts('assets/javascript/api/regs0150efdc/regs0150efdc.js');

        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/municipios/ViewMunicipios', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    }
    