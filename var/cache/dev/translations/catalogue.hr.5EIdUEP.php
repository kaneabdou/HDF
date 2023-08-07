<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hr', array (
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Prethodna',
    'label_next' => 'Sljedeća',
    'filter_searchword' => 'Tražena riječ...',
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
