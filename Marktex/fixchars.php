<?php

$text = '';
while($f = fgets(STDIN)){
    $text .= $f;
}

$trans = array("à" => "&agrave;", "À" => "&Agrave;", "á" => "&aacute;", "Á" => "&Aacute;", "â" => "&acirc;", "Â" => "&Acirc;", "ä" => "&auml;", "Ä" => "&Auml;", "ã" => "&atilde;", "Ã" => "&Atilde;", "å" => "&aring;", "Å" => "&Aring;", "è" => "&egrave;", "È" => "&Egrave;", "é" => "&eacute;", "É" => "&Eacute;", "ê" => "&ecirc;", "Ê" => "&Ecirc;", "ë" => "&euml;", "Ë" => "&Euml;", "ì" => "&igrave;", "Ì" => "&Igrave;", "í" => "&iacute;", "Í" => "&Iacute;", "î" => "&icirc;", "Î" => "&Icirc;", "ï" => "&iuml;", "Ï" => "&Iuml;", "ò" => "&ograve;", "Ò" => "&Ograve;", "ó" => "&oacute;", "Ó" => "&Oacute;", "ô" => "&ocirc;", "Ô" => "&Ocirc;", "ö" => "&ouml;", "õ" => "&otilde;", "Õ" => "&Otilde;", "ø" => "&oslash;", "Ø" => "&Oslash;", "ù" => "&ugrave;", "Ù" => "&Ugrave;", "ú" => "&uacute;", "Ú" => "&Uacute;", "û" => "&ucirc;", "Û" => "&Ucirc;", "ü" => "&uuml;", "Ü" => "&Uuml;", "ÿ" => "&yuml;", "Ÿ" => "&Yuml;", "ñ" => "&ntilde;", "Ñ" => "&Ntilde;", "ç" => "&ccedil;", "Ç" => "&Ccedil;", "¿" => "&iquest;", "Æ" => "&Aelig", "æ" => "&aelig;", "ý" => "&yacute;", "€" => "&euro;");
                //$trans = get_html_translation_table(HTML_ENTITIES);
                foreach ($trans as $key => $value) {
                    # code...
                    $text = str_replace( $key, $value, $text );
                }
//echo $text;

file_put_contents( $argv[1], $text);