<?
// THE POST CLASS
class Post{
    // DB Stuff
    private $dbcon;
    private $table = 'demo';
    
    // Post propertys
    public $id;
    public $firstname;
    public $lastname;
    //...more propertys

    // constructor
    public function __construct($db)
    {
        $this->dbcon = $db;
    }

    // getting the data from DB

    public function data(){
        // Create Query 
        $query = 'SELECT firstname, lastname, email FROM '.$this->table.' ORDER BY firstname ASC';

        // Prepare Statement
        $statement = $this->dbcon->prepare($query);
        // Execute Query
        $statement->execute();

        return $statement;
    }



}