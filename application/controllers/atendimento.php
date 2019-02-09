<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Atendimento extends CI_Controller {

    private $tpl = 'tpl_site';

    public function __construct() {
        parent::__construct();

        $this->form_validation->set_message('required', '%s é obrigatório');
        $this->form_validation->set_message('valid_email', '%s não possui um valor válido');

        $config = $this->configs->select_by_id(1);

        $this->template->set('title', $config->conf_name);
        $this->template->set('description', $config->conf_seo_description);
        $this->template->set('keywords', $config->conf_seo_keywords);
        $this->template->set('emailConf', $config->conf_email);
        $this->template->set('foneConf', $config->conf_phone_one);
        $this->template->set('foneConfTwo', $config->conf_phone_two);
        $this->template->set('adressConf', $config->conf_adress);
        $this->template->set('phone1', $config->conf_phone_one);
        $this->template->set('phone2', $config->conf_phone_two);
        $this->template->set('endereco', $config->conf_adress);

    }

    public function index() {
        $dados = array();

        $dados['titulo'] = 'Atendimento';

        $this->template->load($this->tpl, 'atendimento/index', $dados);
    }

}