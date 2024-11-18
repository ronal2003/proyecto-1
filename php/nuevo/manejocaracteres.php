<?php
$text = "CAJA PLASTICA AZUL CORONA REU 330CC X 30";
$lineLength = 29; // Longitud máxima de caracteres por línea
$wrappedText = wordwrap($text, $lineLength, "\n", true);

echo $wrappedText;
