<?
require_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $ingredients;
    public $weight;

    public function __construct($name, $price, $img, Category $category, $ingredients, $weight, $type, $dimension)
    {
        parent::__construct($name, $price, $img, $category, $type, $dimension);
        $this->ingredients = $ingredients;
        $this->weight = $weight;
        $this->type = $type;
    }
    public function InfoProduct()
    {
        $category_animal = $this->category->animal;
        return "Prodotto per:$category_animal - Nome prodotto: $this->name - Prezzo : $this->price - $this->img - Ingredienti: $this->ingredients - Peso: $this->weight - Tipo: $this->type - Dimension: $this->dimension";
    }
}
