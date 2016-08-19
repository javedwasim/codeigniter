<?php

class Issue extends My_Model{
    const DB_TABLE = "issues";
    const DB_TABLE_PK  = "issue_id";
    
    /**
     * Issue unique identifier.
     * @var type int      
     */
    public $issue_id;
    /**
     * Publication unifying record.
     * @var type int
     */
    public $publication_id;
    
    /**
     * Publisher assigned issue number.
     * @var type int
     */
    public $issue_number;
    
    /**
     * Date that the issue was published
     * @var type date
     */
    public $issue_date_publication;
    
    /**
     * Path to the file contining file cover.
     * @var varchar 
     */
    public $issue_cover;
    
    
}

?>
