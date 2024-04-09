How to use?
- Locate to same folder where are files located
- Paste to cmd: php formatter.php test.txt



### XML/HTML Reformatter Documentation

#### Overview
This PHP program takes input in the form of XML or HTML from stdin, reformats it by properly indenting the tags, and prints the reformatted output to stdout.

#### Input
The input to the program is simple XML or HTML code. The formatting (whitespace) in the input may be random, but there should be no syntactical errors. However, there may be grammatical errors.

#### Assumptions
- The input does not contain syntactical errors.
- Attribute values are ignored.
- No external/internal libraries are used.
- Proper indentation is applied to the tags.
- The program verifies that tags match.

#### Functionality
1. **getLength($s)**:
   - Description: This function calculates the length of a string.
   - Parameters:
     - $s: The input string.
   - Returns: The length of the input string.

2. **format_tags($input_str)**:
   - Description: This function formats the XML/HTML tags by properly indenting them.
   - Parameters:
     - $input_str: The input string containing XML/HTML code.
   - Returns: The formatted string with properly indented tags.

3. **Main Code**:
   - Reads the input from stdin.
   - Calls the `format_tags()` function to format the input string.
   - Prints the formatted string to stdout.

#### Usage
1. Ensure PHP is installed on your system.
2. Save the PHP code in a file (e.g., `reformatter.php`).
3. Run the program and provide input either from a file or directly through stdin.
   - Example: `php reformatter.php < input.xml`

#### Notes for Future Developers
- Ensure that the input provided to the program is valid XML/HTML and does not contain syntactical errors.
- Attribute values are ignored in the formatting process. Modify the code if attribute values need to be considered.
- The code applies indentation based on the nesting level of tags. Adjustments may be needed for specific formatting requirements.
- Consider adding error handling mechanisms for handling unexpected input or errors during the formatting process.
- Keep in mind that this implementation serves as a proof of concept and may need further enhancements for production use or handling edge cases.
