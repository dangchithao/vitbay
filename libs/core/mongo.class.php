<?php
require_once 'interface/manipulate.php';
require_once 'configs/db.php';

class T_MONGO implements Manipulate {
	public static $instance;
    private $conn;

    public function __construct(DB $MONGO) {
        $this->connect($MONGO::$SERVER_NAME, $MONGO::$USER_NAME, $MONGO::$PASSWORD, $MONGO::$DB_NAME);
    }

    /*
     *  Singleton pattern
     */

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new T_MONGO();
        }

        return self::$instance;
    }

    /*
     * Connect to database
     */

    public function connect($server, $username, $password, $dbname) {
        $this->conn = mysql_connect($server, $username, $password) or die("Could not connect to Database" . mysql_error($this->conn));
        mysql_select_db($dbname, $this->conn) or die("Could not select database");
        mysql_query("set names utf8");
    }

    /**
     * Get all records
     */
    public function getAll($tableName, $data = array(), $conditions = array()) {
        $listAll = array();

        $sql = 'select ' . (!empty($data) ? implode(', ', $data) : "*") . ' ';

        // Select from table name
        $sql .= 'from `' . $tableName . '` ';

        // Conditions
        if (!empty($conditions)) {
            $arrayConvert = array();
            foreach ($conditions as $fieldName => $value) {
                if (preg_match('/%/', $value)) {
                    $arrayConvert[] = '`' . $fieldName . '` LIKE "' . mysql_real_escape_string($value) . '" ';
                } else {
                    $arrayConvert[] = '`' . $fieldName . '` = "' . mysql_real_escape_string($value) . '" ';
                }
            }

            $sql .= ' where ' . implode(' and ', $arrayConvert);
        }
        
        $result = mysql_query($sql, $this->conn) or die("Could not query get all");

        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            $listAll[] = $row;
        }

        return $listAll;
    }

    /*
     * Update data
     */

    public function update($tableName, $data = array(), $conditions = array()) {
        if (empty($data) || empty($conditions)) {
            return false;
        }

        $sql  = 'update `' . $tableName . '` ';
        $sql .= 'set ';
        // Data update
        $arrayConvertData = array();
        foreach ($data as $fieldName => $value) {
            $arrayConvertData[] = '`' . $fieldName . '` = ' . $value;
        }
        $sql .= implode(', ', $arrayConvertData);

        // Conditions update
        $arrayConvertConditions = array();
        foreach ($data as $fieldName => $value) {
            $arrayConvertConditions[] = '`' . $fieldName . '` = ' . $value;
        }
        $sql .= ' where ' . implode(' and ', $arrayConvertConditions);

        return get_resource_type(mysql_query($sql, $this->conn));
    }

    /*
     * Insert new
     */

    public function insert($tableName, $data = array()) {
        if (empty($data)) {
            return false;
        }

        $fields = array();
        $values = array();

        foreach ($data as $fieldName => $value) {
            $fields[] = $fieldName;
            $values[] = $value;
        }

        $sql = "insert into `" . $tableName . "` (`" . implode("`, `", $fields) . "`)" . " 
				values('" . implode("','", $values) . "')";

        return get_resource_type(mysql_query($sql, $this->conn));
    }

    /*
     * Delete data
     */

    public function delete($tableName, $conditions = array()) {
        if (empty($conditions)) {
            return false;
        }

        $sql = "delete from `" . $tableName . '` ';

        // Conditions delete
        $arrayConvertConditionsDel = array();
        foreach ($conditions as $fieldName => $value) {
            $arrayConvertConditionsDel[] = '`' . $fieldName . '` = ' . $value;
        }

        $sql .= " where " . implode(' and ', $arrayConvertConditionsDel);

        return get_resource_type(mysql_query($sql, $this->conn));
    }
}
