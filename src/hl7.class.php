<?php
/**
 * HL7 Parser
 * @author Gavin R. Nesmith <grnesmith@gmail.com>
 * @version 1.0
 * @package HL7 Parser
 */
class hl7{
    
/**
 * Parses an HL7 message into an array
 * @param string $message
 * @return array
 */
 
public function parseHL7Message($message) {
    $segments = explode("\n", $message);
    $data = array();

    foreach ($segments as $segment) {
        $fields = explode("|", $segment);
        $segmentName = $fields[0];
        $data[$segmentName] = array();

        for ($i = 1; $i < count($fields); $i++) {
            $components = explode("^", $fields[$i]);
            $fieldData = array();

            for ($j = 0; $j < count($components); $j++) {
                $subComponents = explode("~", $components[$j]);
                $componentData = array();

                for ($k = 0; $k < count($subComponents); $k++) {
                    $repeatedFields = explode("&", $subComponents[$k]);
                    $repeatedFieldData = array();

                    for ($l = 0; $l < count($repeatedFields); $l++) {
                        $repeatedFieldData[] = $repeatedFields[$l];
                    }

                    $componentData["C".($k + 1)] = $repeatedFieldData;
                }

                $fieldData["F".($j + 1)] = $componentData;
            }

            $data[$segmentName]["F".($i)] = $fieldData;
        }
    }

    return $data;
}
}

