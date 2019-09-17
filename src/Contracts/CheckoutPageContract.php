<?php

namespace Spatie\SchemaOrg\Contracts;

interface CheckoutPageContract
{
    public function breadcrumb($breadcrumb);

    public function lastReviewed($lastReviewed);

    public function mainContentOfPage($mainContentOfPage);

    public function primaryImageOfPage($primaryImageOfPage);

    public function relatedLink($relatedLink);

    public function reviewedBy($reviewedBy);

    public function significantLink($significantLink);

    public function significantLinks($significantLinks);

    public function speakable($speakable);

    public function specialty($specialty);

    public function about($about);

    public function accessMode($accessMode);

    public function accessModeSufficient($accessModeSufficient);

    public function accessibilityAPI($accessibilityAPI);

    public function accessibilityControl($accessibilityControl);

    public function accessibilityFeature($accessibilityFeature);

    public function accessibilityHazard($accessibilityHazard);

    public function accessibilitySummary($accessibilitySummary);

    public function accountablePerson($accountablePerson);

    public function aggregateRating($aggregateRating);

    public function alternativeHeadline($alternativeHeadline);

    public function associatedMedia($associatedMedia);

    public function audience($audience);

    public function audio($audio);

    public function author($author);

    public function award($award);

    public function awards($awards);

    public function character($character);

    public function citation($citation);

    public function comment($comment);

    public function commentCount($commentCount);

    public function contentLocation($contentLocation);

    public function contentRating($contentRating);

    public function contributor($contributor);

    public function copyrightHolder($copyrightHolder);

    public function copyrightYear($copyrightYear);

    public function creator($creator);

    public function dateCreated($dateCreated);

    public function dateModified($dateModified);

    public function datePublished($datePublished);

    public function discussionUrl($discussionUrl);

    public function editor($editor);

    public function educationalAlignment($educationalAlignment);

    public function educationalUse($educationalUse);

    public function encoding($encoding);

    public function encodingFormat($encodingFormat);

    public function encodings($encodings);

    public function exampleOfWork($exampleOfWork);

    public function expires($expires);

    public function fileFormat($fileFormat);

    public function funder($funder);

    public function genre($genre);

    public function hasPart($hasPart);

    public function headline($headline);

    public function inLanguage($inLanguage);

    public function interactionStatistic($interactionStatistic);

    public function interactivityType($interactivityType);

    public function isAccessibleForFree($isAccessibleForFree);

    public function isBasedOn($isBasedOn);

    public function isBasedOnUrl($isBasedOnUrl);

    public function isFamilyFriendly($isFamilyFriendly);

    public function isPartOf($isPartOf);

    public function keywords($keywords);

    public function learningResourceType($learningResourceType);

    public function license($license);

    public function locationCreated($locationCreated);

    public function mainEntity($mainEntity);

    public function material($material);

    public function mentions($mentions);

    public function offers($offers);

    public function position($position);

    public function producer($producer);

    public function provider($provider);

    public function publication($publication);

    public function publisher($publisher);

    public function publishingPrinciples($publishingPrinciples);

    public function recordedAt($recordedAt);

    public function releasedEvent($releasedEvent);

    public function review($review);

    public function reviews($reviews);

    public function schemaVersion($schemaVersion);

    public function sourceOrganization($sourceOrganization);

    public function spatial($spatial);

    public function spatialCoverage($spatialCoverage);

    public function sponsor($sponsor);

    public function temporal($temporal);

    public function temporalCoverage($temporalCoverage);

    public function text($text);

    public function thumbnailUrl($thumbnailUrl);

    public function timeRequired($timeRequired);

    public function translator($translator);

    public function typicalAgeRange($typicalAgeRange);

    public function version($version);

    public function video($video);

    public function workExample($workExample);

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
