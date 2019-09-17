<?php

namespace Spatie\SchemaOrg\Contracts;

interface BreadcrumbListContract
{
    public function itemListElement($itemListElement);

    public function itemListOrder($itemListOrder);

    public function numberOfItems($numberOfItems);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

}
