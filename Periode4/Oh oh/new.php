<?php
class Table {
    private $_rows;
    
}

class Row {
    private $_cells;

}

class Cell {
    private $_content;

}
?>

<?php
class Table {
    private $_rows;
    
    public function __construct() {
        $this->_rows = array();
    }
    
    public function append($row) {
        $this->_rows[] = $row;
    }
    
    public function draw() {
        
    }
}

class Row {
    private $_cells;
    
    public function __construct() {
        $this->_cells = array();
    }
    
    public function append($cell) {
        $this->_cells[] = $cell;
    }
    
    public function getCells() {
        return $this->_cells;
    }
}

class Cell {
    private $_content;
    
    public function __construct($content) {
        $this->_content = $content;
    }
    
    public function getContent() {
        return $this->_content;
    }
}
?>