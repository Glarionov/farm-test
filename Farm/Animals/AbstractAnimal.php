<?php

class AbstractAnimal
{
    protected $productionMin = 0;
    protected $productionMax = 0;
    protected $discreteProduction = false;
    protected $productName = '';

    /**
     * Имитация производства новой продукции
     * @return float|int
     * @throws Exception
     */
    public function getProduction()
    {
        if ($this->discreteProduction) {
            return random_int($this->productionMin, $this->productionMax);
        }
        return random_int($this->productionMin, $this->productionMax - 1) + (random_int(0, 100) / 100 );
    }

    /**
     * Получение названия продукции
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }
}
