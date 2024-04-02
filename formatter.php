<?php

function getLenght($s) {
    $length = 0;
    for ($i = 0; isset($s[$i]); $i++) {
        $length++;
    }
    return $length;
}

function format_tags($input_str) {
    $output_str = '';
    $newline_flag = false;
    for ($i = 0; $i < getLenght($input_str); $i++) {
        $char = $input_str[$i];
        if ($char == '<') {
            if ($newline_flag) {
                $output_str .= "\n";
                $newline_flag = false;
            }
            $output_str .= '<';
        } elseif ($char == '>') {
            $output_str .= '>';
            $newline_flag = true;
        } else {
            $output_str .= $char;
            $newline_flag = false;
        }
    }
    return $output_str;
}


$file = fopen("test.txt","r");
$input_str = fgets($file);

$output_str = format_tags($input_str);
echo $output_str;

fclose($file);

?>
