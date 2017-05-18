<?php

Class User_Authentication extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_database');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('login_form');
    }

    public function user_registration_show() {
        $this->load->view('header');
        $this->load->view('registration_form');
    }

    public function new_user_registration() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('registration_form');
        } else {
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password')
            );
            $result = $this->login_database->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('header');
                $this->load->view('login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('header');
                $this->load->view('registration_form', $data);
            }
        }
    }

    public function user_login_process() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $classes['class'] = $this->show_classes();

        $this->load->view('header');
        if (isset($this->session->userdata['logged_in'])) {
            $this->load->view('admin_page',$classes);
        } else {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login_form');
            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                );
                $result = $this->login_database->login($data);
                if ($result == TRUE) {
                    $username = $this->input->post('username');
                    $result = $this->login_database->read_user_information($username);
                    if ($result != false) {
                        $session_data = array(
                            'username' => $result[0]->user_name,
                            'email' => $result[0]->user_email,
                        );
                        $this->session->set_userdata('logged_in', $session_data);
                        $this->session->set_flashdata('success', 'Great! You have successfully logged in.');
                        $this->load->view('admin_page', $classes);
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Username or Password');
                    $data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('login_form', $data);
                }
            }
        }
    }

    public function logout() {
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('header');
        $this->load->view('login_form', $data);
    }

    public function show_classes() {
        return $this->login_database->show_classes();
    }

}
?>
