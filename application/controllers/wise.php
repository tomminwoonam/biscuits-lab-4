<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
{

        function __construct()
	{
		parent::__construct();
	}
	/**
	 * Homepage for our app
	 */
	public function index()
	{
		
            //load data from model
            $source = $this->quotes->get(5);
            //get quote
            $this->data['what'] = $source['what'];
            $this->data['who'] = $source['who'];
            $this->data['mug'] = $source['mug'];
            //load view
            $this->data['pagebody'] = 'justone';
            $this->render();
                
	}
	
	public function bingo()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->get(6);
		$this->data['mug'] = $source['mug'];
		$this->data['who'] = $source['who'];
		$this->data['what'] = $source['what'];

		$this->render();
	}
	
}
