<?
require_once __DIR__ . '/Category.php';
class Product
{
    public $name;
    public $price;
    public $img;
    public $category;
    public $dimension;
    public $type;

    function __construct($name, $price, $img, Category $category, $type, $dimension)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
        $this->type = $type;
        $this->dimension = $dimension;
    }
    public function InfoProduct()
    {
        $category_animal = $this->category->animal;
        return "Prodotto per:$category_animal - Nome prodotto: $this->name - Prezzo : $this->price - $this->img - Tipo: $this->type - Dimension: $this->dimension";
    }
}
