<?php

/**
 * control all db query operation and connection
 *
 * @author muhammed gaber
 */
class db {
    /*
     * @var instance of db
     */

    private static $instance;

    /**
     * @var array of database information
     */
    private $db_info = array("host" => "localhost", "dbname" => "reb7", "username" => "root", "password" => "123");

    /**
     * @var object of mysqli 
     */
    private static $dbh;

    function __construct(array $db_info = null) {
        if ($db_info != null) {
            $this->db_info = $db_info;
        }
        self::$dbh = new mysqli($this->db_info['host'], $this->db_info['username'], $this->db_info['password'], $this->db_info['dbname']);
        self::$dbh->query("SET NAMES utf8");
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new db();
        }
        return self::$instance;
    }

    /**
     * @param string $query
     * @return array of all rows
     */
    public function fetch_rows($query) {
        $rst = self::getinstance()->multi_query($query);
        $data = $rst->fetch_all(MYSQLI_ASSOC);
        $rst->free_result();
        return $data;
    }

    /**
     * @param string of $query
     * @param int of $page number
     * @param int of $count of data
     * @return array of data , morData (if there is more data 1 or  0  if not)
     */
    function fetch_rows_pages($query, $page = 0, $count = 3) {

        $page = intval($page);
        $count = intval($count);
        $start = $count * $page;

        $res = $query . " limit $start , $count";

        $rst = self::getinstance()->multi_query($res);
        $data = $rst->fetch_all(MYSQLI_ASSOC);
        $rst->free_result();

        unset($res, $rst);
        // check if there is more data 

        $res = $query . " limit " . ($count * ($page + 1)) . " , 1";
        $rst = self::getinstance()->multi_query($res);
        $morData = self::getinstance()->num_rows($rst);



        return array('data' => $data, 'moreData' => $morData);
    }

    /**
     * @param string $query
     * @return array
     */
    public function fetch_row($query) {
        $rst = self::getinstance()->multi_query($query);
        return $rst->fetch_array();
    }

    /**
     * @param string $query
     * @return object of mysqli query pointer
     * @throws Exception
     */
    public function query($query) {
        $rst = $this->dbh->query($query);

        if ($this->dbh->error) {
            try {
                throw new Exception("MySQL error {$this->dbh->error} <br> Query:<br> $query", $this->dbh->errno);
            } catch (Exception $e) {
                // error handler
                echo "Error No: " . $e->getCode() . " - " . $e->getMessage() . "<br >";
                exit(nl2br($e->getTraceAsString()));
            }
        }

        return $rst;
    }

    function num_rows($rst) {
        return $rst->num_rows;
    }

    /**
     * @param object $sth from query function
     * @return array
     */
    public function simple_fetch_row($sth) {
        return $sth->fetch_array(MYSQLI_BOTH);
    }

    /**
     * @return int of last insert id
     */
    public function insert_id() {
        return $this->dbh->insert_id;
    }

    /**
     * @param string $name
     * @return string converted by mysqli real_escape_string
     */
    public function real_escape_string($name) {
        return $this->dbh->real_escape_string($name);
    }

    // mirror functions 

    function query_self($query) {
        return db::getInstance()->fetch_row($query);
    }

    function fetch_array($result) {
        return db::getInstance()->simple_fetch_row($result);
    }

    /**
     * destory the current conncetion
     * @return boolean
     */
    function close() {
        return $this->dbh->close();
    }

    /**
     * free result
     * @return void 
     */
    function free_result($rst) {
        $rst->free_result();
    }

    function multi_query($query) {
        $rst = $this->dbh->multi_query($query);
        $result = $this->dbh->store_result();

        if ($this->dbh->error) {
            try {
                throw new Exception("MySQL error {$this->dbh->error} <br> Query:<br> $query", $this->dbh->errno);
            } catch (Exception $e) {
                // error handler
                echo "Error No: " . $e->getCode() . " - " . $e->getMessage() . "<br >";
                exit(nl2br($e->getTraceAsString()));
            }
        }
        if (mysqli_more_results($this->dbh)) {
            mysqli_next_result($this->dbh);
        }

        return $result;
    }

    function fetch_all($rst) {
        $data = $rst->fetch_all(MYSQLI_ASSOC);
        $rst->free_result();
        return $data;
    }

}
