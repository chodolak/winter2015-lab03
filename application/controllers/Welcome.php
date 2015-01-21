<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }
    
    function shucks() {
        $this->data['pagebody'] = 'justone';
            
        //Get the quote from the get() function
        $quote_data = $this->quotes->get("2");

        //Create an array and then assign the it from the quote_data
        $people = array();
        $people[] = array('who' => $quote_data['who'], 'mug' => $quote_data['mug'], 'href' => $quote_data['where'],'what' => $quote_data['what']);

        //Merge the data and then render
        $this->data = array_merge($people[0], $this->data);
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */