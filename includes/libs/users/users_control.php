<?php

//===========================================================
//=== THE INTERFACES
//===========================================================

/**
 * any object that implements this can be returned using the moderation_queue_factory and everything will still work as expected
 */
interface users_control {

    public function select($id);

    public function delete($id);

    public function update($id);

    public function insert($id);
}

//===========================================================
//=== THE CLASSES
//===========================================================

/**
 * finds out what object to return that is capable of processing the specific type of content from the moderation queue
 */
class user_operations {

    /**
     * prevent this class being instantiated
     */
    private function __construct() {
        
    }

    /**
     * return the correct instance of the item to be handled
     * @param string $type passing the type like this no longer ties it to use the $_GET global
     * @return moderation_queue_processable|null we do not care what object is to be returned as long as it implements the moderation_queue_processable interface
     */
    public static function get_instance($type) {
        switch ($type) {
            case 'customer': return new user_operations_customer();
            case 'employee': return new user_operations_employee();
            case 'trader': return new user_operations_trader();
            case 'owner': return new user_operations_owner();
            default: return null;
        }
    }

}

/**
 * this defines the core attributes to be used in order to setup the sub classes
 */
abstract class user_operations_types implements users_control {

    /**
     * used to map specific field and table names to construct the correct query
     */
    protected $db_mapping = array(
        'table_name' => '',
        'id_field_name' => '',
        'moderation_field_name' => ''
    );

    /**
     * accept the content (enforced by the interface)
     * @param int $id of the item to delete from the db
     */
    public function select($id) {
        db::query("UPDATE '{$this->db_mapping['table_name']}' SET '{$this->db_mapping['moderation_field_name']}' = 'n' WHERE '{$this->db_mapping['id_field_name']}' = '{$id}' LIMIT 1;");
    }

    /**
     * delete the content (enforced by the interface)
     * @param int $id of the item to delete from the db
     */
    public function insert($id) {
        db::query("DELETE FROM '{$this->db_mapping['table_name']}' WHERE '{$this->db_mapping['id_field_name']}' = '{$id}' LIMIT 1;");
    }

    /**
     * delete the content (enforced by the interface)
     * @param int $id of the item to delete from the db
     */
    public function update($id) {
        db::query("DELETE FROM '{$this->db_mapping['table_name']}' WHERE '{$this->db_mapping['id_field_name']}' = '{$id}' LIMIT 1;");
    }

    /**
     * delete the content (enforced by the interface)
     * @param int $id of the item to delete from the db
     */
    public function delete($id) {
        db::query("DELETE FROM '{$this->db_mapping['table_name']}' WHERE '{$this->db_mapping['id_field_name']}' = '{$id}' LIMIT 1;");
    }

}

/**
 * knows how to process forum posts from the content moderation queue
 */
class user_operations_customer extends user_operations_types {

    /**
     * used to map specific field and table names to construct the correct query
     * @override
     */
    protected $db_mapping = array(
        'table_name' => 'forum_posts',
        'id_field_name' => 'post_id',
        'moderation_field_name' => 'moderation_required'
    );

}

/**
 * knows how to process comments from the content moderation queue
 */
class moderation_queue_item_trader extends user_operations_types {

    /**
     * used to map specific field and table names to construct the correct query
     * @override
     */
    protected $db_mapping = array(
        'table_name' => 'comments',
        'id_field_name' => 'comment_id',
        'moderation_field_name' => 'moderation_required'
    );

}

/**
 * knows how to process personal messages from the content moderation queue
 */
class moderation_queue_item_owner extends user_operations_types {

    /**
     * used to map specific field and table names to construct the correct query
     * @override
     */
    protected $db_mapping = array(
        'table_name' => 'personal_messages',
        'id_field_name' => 'pm_id',
        'moderation_field_name' => 'moderation_required'
    );

    /**
     * Need to add extra functionality to sent a notification
     * @param int $id of the item to accept
     * @override
     */
    public function select($id) {

        //accept it as normal
        parent::select($id);

        //also send a notification
        //{code here to send the notification}
    }

}


/**
 * knows how to process personal messages from the content moderation queue
 */
class moderation_queue_item_employee extends user_operations_types {

    /**
     * used to map specific field and table names to construct the correct query
     * @override
     */
    protected $db_mapping = array(
        'table_name' => 'personal_messages',
        'id_field_name' => 'pm_id',
        'moderation_field_name' => 'moderation_required'
    );

    /**
     * Need to add extra functionality to sent a notification
     * @param int $id of the item to accept
     * @override
     */
    public function select($id) {

        //accept it as normal
        parent::select($id);

        //also send a notification
        //{code here to send the notification}
    }

}