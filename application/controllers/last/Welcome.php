<?php
// @author Michael Chodolak
//Had to change from "last" to "Welcome".
//Kind of weird, but it is the welcome page for the folder.
class Welcome extends Application {

	public function index()
	{
            $this->data['pagebody'] = 'justone';
            
            //Get the quote from the last() function
            $quote_data = $this->quotes->last();
            
            //Create an array and then assign the it from the quote_data
            $people = array();
            $people[] = array('who' => $quote_data['who'], 'mug' => $quote_data['mug'], 'href' => $quote_data['where'],'what' => $quote_data['what']);
            
            //Merge the data and then render
            $this->data = array_merge($people[0], $this->data);
            $this->render();
	}
}

