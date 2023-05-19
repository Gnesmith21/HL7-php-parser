# HL7 to PHP Array Converter

This is a simple PHP lkibrary that allows you to parce an HL7 message into a PHP array, following the HL7 standard. It allows you to easily parse and access the different segments and fields of an HL7 message.

## Usage

1. Copy the `SRC` directory include the autoloader.

2. Pass an HL7 message to the `parseHL7Message` function:

    ```php
    $hl7Message = 'Your HL7 message goes here';
    $parsedData = parseHL7Message($hl7Message);
    ```

   Replace `'Your HL7 message goes here'` with the actual HL7 message you want to convert.

3. Access the parsed data using the segment and field indexes:

    ```php
    $segment = 'PID';
    $field = 'F5';
    $pid5_1 = $parsedData['get']($segment, $field)['C1'];
    ```

   Replace `$segment` and `$field` with the desired segment and field indexes.

4. Use the `$parsedData` array to retrieve the necessary values from the HL7 message.

5. check out the test file for more information, this is more for my own notes than a project.

@author: Gavin R. Nesmith <grnesmith@gmail.com>

## License

This project is licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0).
