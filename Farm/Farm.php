<?php

namespace Farm;

class Farm
{
    /**
     * Список всеж животных
     * @var array
     */
    private $farmAnimals = [];

    /**
     * Добавление животных в списко
     */
    public function addAnimal($name, $id = false)
    {
        $str = "$name";
        $newAnimal = new $str();
        if (empty($this->farmAnimals[$name])) {
            $this->farmAnimals[$name] = [
                'produced' => 0,
                'name' => $name,
                'amount' => 1,
                'list' => []
            ];
        }
        if (empty($id !== false)) {
            array_push($this->farmAnimals[$name]['list'], $newAnimal);
        } else {
            $idStr = "id_{$id}";
            $this->farmAnimals[$name]['list'][$idStr] = $newAnimal;
        }
    }

    /**
     * Сбор продкции со всех животных
     */
    public function collectProduction()
    {
        foreach ($this->farmAnimals as $animalName => $animalData) {
            foreach ($animalData['list'] as $animalObject) {
                $this->farmAnimals[$animalName]['produced'] += $animalObject->getProduction();
            }
        }
    }

    /**
     * Показывает количество животных
     */
    public function showAmountOfAnimals()
    {
        echo "Animals:\n____________\n";
        foreach ($this->farmAnimals as $animalData) {
            echo $animalData['name'] . ': ' . count($animalData['list']) . "\n";
        }
    }

    /**
     * Показывает количество произведённой продукции
     */
    public function showAmountOfProducts()
    {
        echo "Produced:\n____________\n";
        foreach ($this->farmAnimals as $animalData) {
            /**
             * Можно было бы избежать этой конструкции, заведя отдельный массив для названий продуктов, но я решил тут
             * использовать принцип "каждый класс животного хранит название своего продукта"
             */
            echo $animalData['list'][array_key_first($animalData['list'])]->getProductName() .
                ': ' . $animalData['produced'] . "\n";
        }
    }
}
