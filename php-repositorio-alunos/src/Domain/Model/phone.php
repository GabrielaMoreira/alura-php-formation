<?php


namespace Alura\Pdo\Domain\Model;


class phone
{
    private ?int $id;
    private string $areacode;
    private string $number;

    public function __construct(?int $id, string $areacode, string $number)
    {

        $this->id = $id;
        $this->areacode = $areacode;
        $this->number = $number;
    }

    public function formattedPhone(): string
    {
        return "($this->areacode) $this->number";
    }
}