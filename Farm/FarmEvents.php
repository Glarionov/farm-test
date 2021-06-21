<?php



namespace Farm;

class FarmEvents
{
    private $farm;

    public function __construct()
    {
        $this->farm = new Farm();
    }

    /**
     * Запуск действий на ферме
     */
    public function start()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->farm->addAnimal('Cow', $i);
        }
        for ($i = 0; $i < 20; $i++) {
            $this->farm->addAnimal('Hen', $i);
        }
        echo "Days 1-7:\n===============\n";
        $this->farm->showAmountOfAnimals();

        for ($i = 0; $i < 7; $i++) {
            $this->farm->collectProduction();
        }
        $this->farm->showAmountOfProducts();

        $this->farm->addAnimal('Cow');
        for ($i = 0; $i < 5; $i++) {
            $this->farm->addAnimal('Hen');
        }
        echo "Days 8-14:\n===============\n";
        $this->farm->showAmountOfAnimals();

        for ($i = 0; $i < 7; $i++) {
            $this->farm->collectProduction();
        }
        $this->farm->showAmountOfProducts();
    }
}
