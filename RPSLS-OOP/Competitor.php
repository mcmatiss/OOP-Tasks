<?php
class Competitor
{
    private string $name;
    private array $winsVs;

    public function __construct(string $name, array $winsVs)
    {
        $this->name = $name;
        $this->winsVs = $winsVs;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getWinsVs(): array
    {
        return $this->winsVs;
    }
}
