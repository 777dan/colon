<?php
$text = '$ Today $ we saw many $ animals: elephants, $ lions, deers';
if (preg_match_all('#\w+(?=:)#', $text, $result)) {
    print_r($result);
}
// echo $text;
if (preg_match_all('#(?<!\$)\w+#', $text, $result)) {
    print_r($result);
}