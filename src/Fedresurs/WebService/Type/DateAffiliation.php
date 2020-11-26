<?php

namespace Fedresurs\WebService\Type;

class DateAffiliation
{

    /**
     * @var \DateTimeInterface
     */
    private $DateInclude;

    /**
     * @var \DateTimeInterface
     */
    private $DateExclude;

    /**
     * @var string
     */
    private $CauseExclude;

    /**
     * @return \DateTimeInterface
     */
    public function getDateInclude()
    {
        return $this->DateInclude;
    }

    /**
     * @param \DateTimeInterface $DateInclude
     * @return DateAffiliation
     */
    public function withDateInclude($DateInclude)
    {
        $new = clone $this;
        $new->DateInclude = $DateInclude;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateExclude()
    {
        return $this->DateExclude;
    }

    /**
     * @param \DateTimeInterface $DateExclude
     * @return DateAffiliation
     */
    public function withDateExclude($DateExclude)
    {
        $new = clone $this;
        $new->DateExclude = $DateExclude;

        return $new;
    }

    /**
     * @return string
     */
    public function getCauseExclude()
    {
        return $this->CauseExclude;
    }

    /**
     * @param string $CauseExclude
     * @return DateAffiliation
     */
    public function withCauseExclude($CauseExclude)
    {
        $new = clone $this;
        $new->CauseExclude = $CauseExclude;

        return $new;
    }


}

