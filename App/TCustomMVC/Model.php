<?php

class Model
{
    /**
     * @dbf id:INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
     */
    protected $id;

    /**
     * @dbf is_using:BOOLEAN
     */
    protected $is_using;

    /**
     * @dbf create_at:TIMESTAMP
     * @ccccc create_at:TIMESTAMP
     */
    protected $created_at;

    /**
     * @dbf created_by:INT UNSIGNED
     */
    protected $created_by;

    /**
     * @dbf updated_at:TIMESTAMP
     */
    protected $updated_at;

    /**
     * @dbf updated_by:INT UNSIGNED
     */
    protected $updated_by;

    public function createTable()
    {

    }

    public function iterateVisible() {
        echo "MyClass::iterateVisible:\n";
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }

    public function getCommentProperties()
    {
        $fields = array();
        $refClass = new ReflectionClass($this);
        foreach ($refClass->getProperties() as $refProperty) {
            $comment = $refProperty->getDocComment();
            $commentContent = substr($comment, 12);
            $commentContent = substr_replace($commentContent, "", -3);
            echo $commentContent . "<br>";
            array_push($fields, $commentContent);
        }
        return $fields;
    }
}