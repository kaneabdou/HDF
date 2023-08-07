<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ca', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Següent',
    'filter_searchword' => 'Cercar...',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
