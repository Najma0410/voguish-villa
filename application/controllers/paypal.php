<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Paypal extends CI_Controller {

    /*public function Paypal() {
        parent::Controller();
        $this->load->model( 'items_model', 'Item' );
        $this->load->library( 'Paypal_Lib' );
        $data['site_name'] = $this->config->item( 'site_name' );
        $this->load->vars( $data );
    }*/
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('items_model', 'Item');
        $this->load->library('Paypal_Lib');
        $data['site_name'] = $this->config->item('site_name');
        $this->load->vars($data);
    }
        public function index()
        {
            redirect('items');
        }

        public function success()
        {
            $this->session->set_flashdata('success', 'Your payment is being processed now.');
            redirect('items');
        }

        public function cancel()
        {
            $this->session->set_flashdata('success', 'Payment cancelled.');
            redirect('items');
        }
   /* public function ipn() {
        if ( $this->paypal_lib->validate_ipn() ) {
            $item_name = $this->paypal_lib->ipn_data['item_name'];
            $price = $this->paypal_lib->ipn_data['mc_gross'];
            $currency = $this->paypal_lib->ipn_data['mc_currency'];
            $payer_email = $this->paypal_lib->ipn_data['payer_email'];
            $key = $this->paypal_lib->ipn_data['transaction_subject'];
            $this->Item->confirm_payment( $key, $payer_email);
            $purchase = $this->Item->get_purchase_by_key( $key );
            $item = $this->Item->get( $purchase->item_id );


            $to = $purchase->email;
            $from = $this->config->item( 'no_reply_email' );
            $name = $this->config->item( 'site_name' );
            $subject = $item->name . ' Download';

            $segments = array( 'item', url_title( $item->name, 'dash', true ), $item->id );
            $message = '<p>Thanks for purchasing ' . anchor( $segments, $item->name ) . ' from ' . anchor( '', $name ) . '. Your download link is below.</p>';
            $message .= '<p>' . anchor( 'download/' . $key ) . '</p>';

            $this->email->from( $from, $name );
            $this->email->to( $to );
            $this->email->subject( $subject );
            $this->email->message( $message );
            $this->email->send();
            $this->email->clear();

            // Send confirmation of purchase to admin
$message = '<p><strong>New Purchase:</strong></p><ul>';
$message .= '<li><strong>Item:</strong> ' . anchor( $segments, $item->name ) . '</li>';
$message .= '<li><strong>Price:</strong> $' . $item->price . '</li>';
$message .= '<li><strong>Email:</strong> ' . $purchase->email . '</li><li></li>';
$message .= '<li><strong>PayPal Email:</strong> ' . $payer_email . '</li>';
$this->email->from( $from, $name );
$this->email->to( $this->config->item( 'admin_email' ) );
$this->email->subject( 'A purchase has been made' );
$this->email->message( $message );
$this->email->send();
$this->email->clear();
        }
    }*/
    }