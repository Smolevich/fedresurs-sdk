<?php

namespace Fedresurs\WebService\Type;

class TradePlace
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfTrade
     */
    private $TradeList;

    /**
     * @var string
     */
    private $INN;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Site;

    /**
     * @var string
     */
    private $OwnerName;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfTrade
     */
    public function getTradeList()
    {
        return $this->TradeList;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfTrade $TradeList
     * @return TradePlace
     */
    public function withTradeList($TradeList)
    {
        $new = clone $this;
        $new->TradeList = $TradeList;

        return $new;
    }

    /**
     * @return string
     */
    public function getINN()
    {
        return $this->INN;
    }

    /**
     * @param string $INN
     * @return TradePlace
     */
    public function withINN($INN)
    {
        $new = clone $this;
        $new->INN = $INN;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return TradePlace
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->Site;
    }

    /**
     * @param string $Site
     * @return TradePlace
     */
    public function withSite($Site)
    {
        $new = clone $this;
        $new->Site = $Site;

        return $new;
    }

    /**
     * @return string
     */
    public function getOwnerName()
    {
        return $this->OwnerName;
    }

    /**
     * @param string $OwnerName
     * @return TradePlace
     */
    public function withOwnerName($OwnerName)
    {
        $new = clone $this;
        $new->OwnerName = $OwnerName;

        return $new;
    }


}

