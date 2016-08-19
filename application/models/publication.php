<?php

class Publication extends My_Model{
    const DB_TABLE = "publications";
    const DB_TABLE_PK  = "publication_id";
    /**
     *
     * @var type int
     */
    public $publication_id;
    /**
     *
     * @var string 
     * 
     */
    public $publication_name;
    
}