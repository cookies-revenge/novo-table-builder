<?php

namespace CookiesRevenge\NovoTableBuilder;

abstract class Abstract_Builder
{

    abstract public function Build();

    public function SetTemplatingEngine($templatingEngine)
    {
        $this->templatingEngine_ = $templatingEngine;
        return $this;
    }

    public function SetDefinitionsMap($definitionsMap)
    {
        $this->definitionsMap_ = $definitionsMap;
        return $this;
    }

    public function SetDataCollection($dataCollection)
    {
        $this->dataCollection_ = $dataCollection;
        return $this;
    }

    public function SetActivePage($activePage)
    {
        $this->activePage_ = $activePage;
        return $this;
    }

    public function SetResultsPerPage($resultsPerPage)
    {
        $this->resultsPerPage_ = $resultsPerPage;
        return $this;
    }

    public function SetSortingColumn($sortingColumn)
    {
        $this->sortingColumn_ = $sortingColumn;
        return $this;
    }

    public function SetSortingOrder($sortingOrder)
    {
        if (!in_array(strtoupper($sortingOrder), [Table_Builder_Constants::ORDER_ASCENDING, Table_Builder_Constants::ORDER_DESCENDING]))
            throw new \Exception("Invalid value set for Sorting Type");
        $this->sortingOrder_ = $sortingOrder;
        return $this;
    }

    public function SetShowAll(bool $showAll)
    {
        $this->showAll_ = $showAll;
        return $this;
    }

    public function SetIsResponsive(bool $isResponsive)
    {
        $this->isResponsive_ = $isResponsive;
        return $this;
    }

    public function SetIsStriped(bool $isStriped)
    {
        $this->isStriped_ = $isStriped;
        return $this;
    }

    public function SetIsBordered(bool $isBordered)
    {
        $this->isBordered_ = $isBordered;
        return $this;
    }

    // templating engine
    private $templatingEngine_;

    // definitions map to build upon
    private $definitionsMap_;

    // dataset
    private $dataCollection_ = [];

    // dataset sorting and batch options
    private $activePage_ = 1;
    private $resultsPerPage_ = 20;
    private $sortingColumn_ = "Id";
    private $sortingOrder_ = "ASC";
    private $showAll_ = false;

    // styling options
    private $isBordered_;
    private $isStriped_;
    private $isResponsive_;

    // Not supported; Include later
    // header color
    // font family
    // font size
}