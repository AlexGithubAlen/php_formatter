How to use?
- Locate to same folder where are files located
- Paste to cmd: php formatter.php test.txt



### --- Documentation for coders ---

#### Overview
This PHP program takes input in the form of XML or HTML from stdin, reformats it by properly indenting the tags, and prints the reformatted output to stdout.

#### Input
The input to the program is simple XML or HTML code.

#### Assumptions
- The input does not contain syntactical errors.
- Attribute values are ignored.
- No external/internal libraries are used.
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
   - Example: `php formatter.php test.txt`

