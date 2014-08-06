<?php
function getSnippetContent($filename) {
    $o = file_get_contents($filename);
    $o = trim(str_replace(array('<?php','?>'),'',$o));
    return $o;
}
$snippets = array();
 
$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'Quotes',
    'description' => 'Displays a list of quotes',
    'snippet' => getSnippetContent($sources['elements'].'snippets/snippet.Quotes.php'),
),'',true,true);
$properties = include $sources['data'].'properties/properties.snippet.Quotes.php';
$snippets[1]->setProperties($properties);
unset($properties);
 
return $snippets;
