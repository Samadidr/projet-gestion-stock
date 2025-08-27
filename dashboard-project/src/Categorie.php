<?php
class Categorie {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public static function afficher() {
        // This method should return a list of categories from the database
        // Placeholder for database connection and query
        // Example return:
        return [
            new Categorie(1, "Electronics"),
            new Categorie(2, "Clothing"),
            new Categorie(3, "Home & Kitchen"),
        ];
    }

    public function save() {
        // This method should handle saving the category to the database
        // Placeholder for database insert/update logic
    }

    public function delete() {
        // This method should handle deleting the category from the database
        // Placeholder for database delete logic
    }
}
?>