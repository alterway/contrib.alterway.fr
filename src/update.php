<?php
$file = 'https://raw.githubusercontent.com/ziadoz/awesome-php/master/README.md';
$lines = file($file);

$result = array('name' => 'PHP', 'children' => array(), 'description' => '');
$r = null;
foreach($lines as $line) {
    if(preg_match('!^##(.*)!', $line, $m)) {
        list(, $name) = $m;

        if(null !== $r) {
            $result['children'][] = $r;
        }
        $r = array('name' => $name);
    }

    if(preg_match('!\[(.*)\]\((.*)\)\s+-\s+(.*)!', $line, $m)) {
        list(, $name, $uri, $descr) = $m;
        $r['children'][] = array(
            'name' => $name
            , 'uri' => $uri
            , 'description' => $descr
            , 'size' => 1
        );
    }
}


$json = json_encode($result, JSON_PRETTY_PRINT);
$json = trim($json, '[]');
file_put_contents(__DIR__.'/../data.json', $json);