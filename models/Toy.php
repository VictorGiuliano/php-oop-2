<?
require_once __DIR__ . '/Product.php';
class Toy extends Product
{
    public $material;


    public function __construct($name, $price, $img, Category $category, $material, $type, $dimension)
    {
        parent::__construct($name, $price, $img, $category, $type, $dimension);
        $this->material = $material;
    }
    public function InfoProduct()
    {
        $category_animal = $this->category->animal;
        return "Prodotto per:$category_animal - Nome prodotto: $this->name - Prezzo : $this->price - $this->img - Tipo: $this->type - Dimension: $this->dimension - Materiale: $this->material";
    }
}
