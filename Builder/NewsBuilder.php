<?php

namespace FantasyPro\DataBundle\Builder;

use FantasyPro\DataBundle\Entity\News;
use FantasyPro\DataBundle\Helpers\DateHelper;

class NewsBuilder
{
    /**
     * @var DateHelper $dateHelper
     */
    private $dateHelper;

    public function __construct( DateHelper $dateHelper )
    {
        $this->dateHelper = $dateHelper;
    }

    public function buildNews( $currentNews = null, $news )
    {
        if ( ! $currentNews) { // check if we already have the news stored
            $currentNews = new News();
        }
        $currentNews->setNewsID( $news['NewsID'] );
        $currentNews->setTitle( $news['Title'] );
        $currentNews->setUpdated( $this->dateHelper->parseDate( $news['Updated'] ) );
        $currentNews->setUrl( $news['Url'] );
        $currentNews->setContent( $news['Content'] );
        $currentNews->setSource( $news['Source'] );
        $currentNews->setTermsOfUse( $news['TermsOfUse'] );
        $currentNews->setTeam( $news['Team'] );
        $currentNews->setPlayerID( $news['PlayerID'] );

        return $currentNews;
    }
}