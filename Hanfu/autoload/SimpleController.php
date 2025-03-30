<?php
// Class that provides methods for working with the form data.
// There should be NOTHING in this file except this class definition.

class SimpleController {
	protected $mapper;

	public function __construct($table)
    {
		global $f3;						// needed for $f3->get()
		$this->mapper = new DB\SQL\Mapper($f3->get('DB'), $table);	// create DB query mapper object
	}

	public function putIntoDatabase($data)
	{
		$this->mapper->Name   = $data["Name"];
		$this->mapper->Email = $data["Email"];
        $this->mapper->PhoneNumber  = $data["PhoneNumber"];
        $this->mapper->Password = $data["Password"];
		$this->mapper->save();					 // save new record with these fields
	}
    public function putIntoReviewDatabase($data)
    {
        $this->mapper->title   = $data["title"];
        $this->mapper->comment = $data["comment"];
        $this->mapper->suit_id = $data["suit_id"];
        $this->mapper->create_time = date('Y-m-d H:i:s');
        $this->mapper->save();					 // save new record with these fields
    }
	public function getData()
    {
		return $this->mapper->find();
	}

	public function deleteFromDatabase($idToDelete)
    {
		$this->mapper->load(['id=?', $idToDelete]); // load DB record matching the given ID
		$this->mapper->erase();						// delete the DB record
	}
}