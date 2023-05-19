<?php
/**
 * HL7 Parser test file
 * @version 1.0
 * @package HL7 Parser
 * @Author Gavin R. Nesmith <grnesmith@gmail.com>
 * 
 */

require_once __DIR__ . '/../src/autoload.php';

$hl7 = new hl7();

$hl7Message = "PID|1|12345|67890|Doe^John^J^^Mr.||19800101|M|||123 Some Street^Anytown^NY^12345||(555)555-5555||||12345\r\nOBX|1|ST|001^Test Result||Positive||||||F\r\nOBX|2|NM|002^Test Value||42.3|Celsius|||||F";

$parsedData = $hl7->parseHL7Message($hl7Message);

print_r($parsedData);

// Output:
// Array
// (
//     [PID] => Array
//         (
//             [F1] => Array

//                 (
//                     [C1] => Array
//                         (
//                             [0] => 12345
//                         )
// ECT....