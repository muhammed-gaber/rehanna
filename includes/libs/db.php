<?php

/**
 * @author hazem ali <hazem@zwaar.org> 
 * @version 1.0
 * @time 2013-09-28 
 */
class db {

    /**
     * tables names
     * @var array of tables name
     */
    static $tables = array(
        // zwaar_zwaar db
        'time_dimension' => '`zwaar_zwaar`.`time_dimension`',
        'country' => '`zwaar_zwaar`.`countries`',
        'domains' => '`zwaar_zwaar`.`domains`',
        'browsers' => '`zwaar_zwaar`.`browsers`',
        'devices' => '`zwaar_zwaar`.`devices`',
        'platforms' => '`zwaar_zwaar`.`platforms`',
        'oss_target_data' => '`zwaar_zwaar`.`target_data_platforms`',
        'browsers_target_data' => '`zwaar_zwaar`.`target_data_browsers`',
        'target_data_platforms' => '`zwaar_zwaar`.`target_data_platforms`',
        'publisher_directory' => '`zwaar_zwaar`.`target_data_domains`',
        'country_target_data' => '`zwaar_zwaar`.`target_data_countries`',
        'target_data_devices' => '`zwaar_zwaar`.`target_data_devices`',
        'price_list' => '`zwaar_zwaar`.`price_list`',
        // function
        'getTimeId' => '`zwaar_zwaar`.`getTimeId`',
        // function
        'get_page_id' => '`zwaar_zwaar`.`get_page_id`',
        // function
        'get_domain_id' => '`zwaar_zwaar`.`get_domain_id`',
        // function
        'check_domain_relation' => '`zwaar_zwaar`.`check_domain_relation`',
        // zwaar_campaigns db
        'campaigns' => '`zwaar_campaigns`.`campaigns`',
        'campaigns_actives' => '`zwaar_campaigns`.`campaigns_actives`',
        'campaigns_status' => '`zwaar_campaigns`.`campaigns_status`',
        'campaigns_users' => '`zwaar_campaigns`.`campaigns_users`',
        'active_logs' => '`zwaar_campaigns`.`active_logs`',
        'units' => '`zwaar_campaigns`.`campaigns_ad_units`',
        'banners' => '`zwaar_campaigns`.`banners`',
        'targets' => '`zwaar_campaigns`.`campaigns_targets`',
        // stored procuder
        'budgetRoutin' => '`zwaar_campaigns`.`budget_transferred`',
        'budgetTrac' => '`zwaar_campaigns`.`campaigns_bugets_tracing`',
        'refuse-special' => '`zwaar_campaigns`.`refuses_reasons_special`',
        'refuse' => '`zwaar_campaigns`.`refuses_reasons`',
        // zwaar_rb7 db
        'customer' => '`reb7`.`customer`',
        'advertiser' => '`reb7`.`customer`',
        'publisher' => '`reb7`.`users`',
        'bill' => '`reb7`.`customer_bills`',
        'moneyRecord' => '`reb7`.`money_record`',
        'tickets' => '`reb7`.`support_topics`',
        'tickets_posts' => '`reb7`.`support_posts`',
        // stored procuder
        'withdraw' => '`reb7`.`withDraw`',
        //statistcs db
        'adv_source' => '`zwaar_advert_statistics`.`adv_source`',
        'advert_statistics' => '`zwaar_advert_statistics`.`advert_statistics`',
        'advert_statistics_browser_daily_banner' => '`zwaar_advert_statistics`.`advert_statistics_browser_daily_banner`',
        'advert_statistics_browser_daily_popup' => '`zwaar_advert_statistics`.`advert_statistics_browser_daily_popup`',
        'advert_statistics_country_daily_banner' => '`zwaar_advert_statistics`.`advert_statistics_country_daily_banner`',
        'advert_statistics_country_daily_popup' => '`zwaar_advert_statistics`.`advert_statistics_country_daily_popup`',
        'advert_statistics_platform_daily_banner' => '`zwaar_advert_statistics`.`advert_statistics_platform_daily_banner`',
        'advert_statistics_platform_daily_popup' => '`zwaar_advert_statistics`.`advert_statistics_platform_daily_popup`',
        'advert_statistics_referer_daily_banner' => '`zwaar_advert_statistics`.`advert_statistics_referer_daily_banner`',
        'advert_statistics_referer_daily_popup' => '`zwaar_advert_statistics`.`advert_statistics_referer_daily_popup`',
        'statistics_banner_daily' => '`zwaar_advert_statistics`.`statistics_banner_daily`',
        'statistics_popup_daily' => '`zwaar_advert_statistics`.`statistics_popup_daily`',
        //statistics stored procedure
        'advert_statistics_elements_banner' => '`zwaar_advert_statistics`.`statistics_elements_banner`',
        'advert_statistics_elements_popup' => '`zwaar_advert_statistics`.`statistics_elements_popup`',
        'advert_statistics_selection_banner' => '`zwaar_advert_statistics`.`statistics_selection_banner`',
        'advert_statistics_selection_popup' => '`zwaar_advert_statistics`.`statistics_selection_popup`',
        //statistics stored procedure
        'advert_statistics_elements_selection_by_unit_banner' => '`zwaar_advert_statistics`.`advert_statistics_elements_selection_by_unit_banner`',
        'advert_statistics_elements_selection_by_unit_popup' => '`zwaar_advert_statistics`.`advert_statistics_elements_selection_by_unit_popup`',
        'advert_statistics_selection_by_camp_banner' => '`zwaar_advert_statistics`.`advert_statistics_selection_by_camp_banner`',
        'advert_statistics_selection_by_camp_popup' => '`zwaar_advert_statistics`.`advert_statistics_selection_by_camp_popup`',
        'advert_statistics_selection_by_unit_banner' => '`zwaar_advert_statistics`.`advert_statistics_selection_by_unit_banner`',
        'advert_statistics_selection_by_unit_popup' => '`zwaar_advert_statistics`.`advert_statistics_selection_by_unit_popup`'
    );

    /**
     * @var array of database information
     */
    private $db_info = array("host" => "localhost", "dbname" => "reb7", "username" => "root", "password" => "123");

    /**
     * @var object of mysqli 
     */
    private $dbh;

    /**
     * @var instance from db class 
     */
    public static $instance = NULL;

    /**
     * @param array $db_info
     * @return void
     */
    public function __construct(array $db_info = null) {
        $this->dbh = new mysqli($this->db_info['host'], $this->db_info['username'], $this->db_info['password'], $this->db_info['dbname']);
        $this->dbh->query("SET NAMES utf8");
    }

    /**
     * @return object from db class
     */
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

/**
 * examples
 * $query = "select * from ".db::$tables['campaigns']." ";
 * direct query 
 * $result = db::getinstance()->query($query);
 * $array  = db::getinstance()->fetch_array($result); 
 * one step fetch data
 * $array  = db::getinstance()->fetch_row($query);
 * to fetch all rows
 * $Array  = db::getinstance()->fetch_rows($query);
 */
?>
