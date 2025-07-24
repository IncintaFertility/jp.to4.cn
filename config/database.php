<?php
class Database {
    private $db;
    private static $instance = null;
    
    private function __construct() {
        $dbPath = __DIR__ . '/../database/incinta_fertility.db';
        
        try {
            $this->db = new PDO('sqlite:' . $dbPath);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
            // Create tables if database doesn't exist or is empty
            $this->initializeDatabase();
        } catch (PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->db;
    }
    
    private function initializeDatabase() {
        // Check if tables exist
        $tables = $this->db->query("SELECT name FROM sqlite_master WHERE type='table'")->fetchAll();
        if (empty($tables)) {
            $schema = file_get_contents(__DIR__ . '/../database/schema.sql');
            $this->db->exec($schema);
        }
    }
    
    public function query($sql, $params = array()) {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            throw new Exception('Query failed: ' . $e->getMessage());
        }
    }
    
    public function fetchAll($sql, $params = array()) {
        return $this->query($sql, $params)->fetchAll();
    }
    
    public function fetchOne($sql, $params = array()) {
        return $this->query($sql, $params)->fetch();
    }
    
    public function insert($table, $data) {
        $keys = array_keys($data);
        $fields = implode(',', $keys);
        $placeholders = ':' . implode(', :', $keys);
        
        $sql = "INSERT INTO {$table} ({$fields}) VALUES ({$placeholders})";
        return $this->query($sql, $data);
    }
    
    public function update($table, $data, $where, $whereParams = array()) {
        $setClause = [];
        foreach (array_keys($data) as $key) {
            $setClause[] = "{$key} = :{$key}";
        }
        $setClause = implode(', ', $setClause);
        
        $sql = "UPDATE {$table} SET {$setClause} WHERE {$where}";
        return $this->query($sql, array_merge($data, $whereParams));
    }
    
    public function delete($table, $where, $params = array()) {
        $sql = "DELETE FROM {$table} WHERE {$where}";
        return $this->query($sql, $params);
    }
}