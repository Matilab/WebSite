
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pessoasjuridica extends MY_Controller {
      
      public function  __construct() {
        parent::__construct();
      }
    
      public function index(){
        /*
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
          if($this->data['response']['status'] == 'FALSE'){
            $this->data['response']['data'] = $this->sendGet('api/pessoasjuridica/get', $this->data['login']->data->token, true)->data;
          }
        } else {
          $this->data['response'] = $this->sendGet('api/pessoasjuridica/get', $this->data['login']->data->token, true);
        }
    
        $this->scripts('assets/javascript/api/pessoasjuridica/pessoasjuridica.js');
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/pessoasjuridica/GridPessoasjuridica', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
        */
      }
    
      public function get($IdParent, $Id = ''){
        if(empty($Id))
          echo json_encode(['data' => $this->sendGet('api/pessoasjuridica/getByParent/'.$IdParent, $this->data['login']->data->token)->data]);
        else 
          echo json_encode(['data' => $this->sendGet('api/pessoasjuridica/getByParent/'.$IdParent.'/'.$Id, $this->data['login']->data->token)->data]);
      }
    
      public function create($parentView, $IdParent){
        $this->data['nameView'] = 'create';
        $this->data['IdParent'] = $IdParent;
        $this->data['parentView'] = $parentView;
        if($this->session->flashdata('response'))
          $this->data['response'] = $this->session->flashdata('response');
        
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/pessoasjuridica/CreatePessoasjuridica', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function add($parentView, $IdParent){
        if($_POST){
          $salvarEVoltar = isset($_POST['cbxSaveBack']) ? TRUE : FALSE;
          unset($_POST['cbxSaveBack']);

          $response = $this->sendPost('api/pessoasjuridica/create', $this->data['login']->data->token, $this->input->post(), true);

          if($response['status'] == 'FALSE'){
            $response['data'] = $_POST;
          } else {
            $response['comeFromChild'] = 'TRUE';
          }
          
          if($salvarEVoltar) $response['data']['cbxSaveBack'] = 'on';
          
          $this->session->set_flashdata('response', $response); 

          if($response['status'] == 'FALSE'){
            redirect('pessoasjuridica/create/'.$parentView.'/'.$IdParent);
          } else {
            $salvarEVoltar ? redirect('pessoasfisica/'.$parentView.'/'.$IdParent) : redirect('pessoasjuridica/edit/'.$parentView.'/'.$IdParent.'/'.$response['data'][0]['pj_Id']);
          }
        }
      }
    
      public function edit($parentView, $IdParent, $Id){
        $this->data['nameView'] = 'edit';
        $this->data['IdParent'] = $IdParent;
        $this->data['parentView'] = $parentView;
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
        } else {
          $this->data['response'] = $this->sendGet('api/pessoasjuridica/get/'.$Id, $this->data['login']->data->token, true);
        }
        

        if(empty($this->data['response']['data'])){
          $this->data['heading'] = 'Dado não encontrado.';
          $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
          $this->load->view('errors/html/my_error_404', $this->data);
        } else {
          $this->load->view('dashboard/template/header', $this->data);
          $this->load->view('api/pessoasjuridica/EditPessoasjuridica', $this->data);
          $this->load->view('dashboard/template/footer', $this->data);
        }
      }
    
      public function update($parentView, $IdParent, $Id){
        if($_POST){
          $salvarEVoltar = isset($_POST['cbxSaveBack']) ? TRUE : FALSE;
          unset($_POST['cbxSaveBack']);

          $response = $this->sendPost('api/pessoasjuridica/update/'.$Id, $this->data['login']->data->token, $this->input->post(), true);

          if($response['status'] == 'FALSE'){
            $_POST['pj_Id'] = $Id;
            $response['data'][0] = $_POST;
          } else {
            $response['comeFromChild'] = 'TRUE';
          }

          if($salvarEVoltar) $response['data']['cbxSaveBack'] = 'on';

          $this->session->set_flashdata('response', $response); 
          
          if($response['status'] == 'FALSE'){
            redirect('pessoasjuridica/edit/'.$parentView.'/'.$IdParent.'/'.$Id);
          } else {
            $salvarEVoltar ? redirect('pessoasfisica/'.$parentView.'/'.$IdParent) : redirect('pessoasjuridica/edit/'.$parentView.'/'.$IdParent.'/'.$Id);
          }
        }
      }
    
      public function delete($parentView, $IdParent){
        if($_POST){
          $Id = $_POST['Id'];
    
          $response = $this->sendGet('api/pessoasjuridica/getByParent/'.$IdParent.'/'.$Id, $this->data['login']->data->token, true);    
    
          if(empty($response['data'])){
            $this->data['heading'] = 'Dado não encontrado.';
            $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
            $this->load->view('errors/html/my_error_404', $this->data);
          } else {
            $response = $this->sendDelete('api/pessoasjuridica/delete/'.$Id, $this->data['login']->data->token, true);
            $response['comeFromChild'] = 'TRUE';
            $this->session->set_flashdata('response', $response); 
            redirect('pessoasfisica/'.$parentView.'/'.$IdParent);
          }
        }
      }

      public function view($parentView, $IdParent, $Id){
        $this->data['nameView'] = 'view';
        $this->data['IdParent'] = $IdParent;
        $this->data['parentView'] = $parentView;
        $this->data['response'] = $this->sendGet('api/pessoasjuridica/getByParent/'.$IdParent.'/'.$Id, $this->data['login']->data->token, true);


        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/pessoasjuridica/ViewPessoasjuridica', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    }
    