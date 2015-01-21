<?php

defined('BASEPATH') OR exit('No direct script access allowed');
// @author Michael Chodolak
class first extends Application {

	public function index()
	{
            $this->data['pagebody'] = 'justone';
            
            //Get the quote from the first() function
            $quote_data = $this->quotes->first();
            
            //Create an array and then assign the it from the quote_data
            $people = array();
            $people[] = array('who' => $quote_data['who'], 'mug' => $quote_data['mug'], 'href' => $quote_data['where'],'what' => $quote_data['what']);
            
            //Merge the data and then render
            $this->data = array_merge($people[0], $this->data);
            $this->render();
	}
        
        public function zzz()
	{
            $this->data['pagebody'] = 'justone';
            
            //Get the quote from the get() function
            $quote_data = $this->quotes->get("1");
            
            //Create an array and then assign the it from the quote_data
            $people = array();
            $people[] = array('who' => $quote_data['who'], 'mug' => $quote_data['mug'], 'href' => $quote_data['where'],'what' => $quote_data['what']);
            
            //Merge the data and then render
            $this->data = array_merge($people[0], $this->data);
            $this->render();
	}
        
        public function gimmie($num)
	{
            $this->data['pagebody'] = 'justone';
            
            //Get the quote from the get() function
            $quote_data = $this->quotes->get($num);
            
            //Create an array and then assign the it from the quote_data
            $people = array();
            $people[] = array('who' => $quote_data['who'], 'mug' => $quote_data['mug'], 'href' => $quote_data['where'],'what' => $quote_data['what']);
            
            //Merge the data and then render
            $this->data = array_merge($people[0], $this->data);
            $this->render();
	}
}

