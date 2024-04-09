### --- XML/HTML Reformatter User Manual ---

#### Introduction
The XML/HTML Reformatter is a PHP program designed to format XML or HTML code by properly indenting the tags.

#### Installation
1. Ensure PHP is installed on your system. If not, download and install PHP from the official PHP website: [php.net](https://www.php.net/).
2. Save the provided PHP code in a file with a `.php` extension (e.g., `formatter.php`).

#### Usage
1. **Running the Program**:
   - Open your command line interface (CLI).
   - Navigate to the directory where the PHP file is located.
   - Execute the program by running the following command:
     ```
     php formatter.php < test.txt
     ```
   - Replace `test.txt` with the path to your input file containing XML or HTML code. Alternatively, you can provide input directly through stdin.

2. **Input**:
   - The program accepts XML or HTML code as input.
   - Ensure that the input does not contain syntactical errors. Attribute values are ignored in the formatting process.

3. **Output**:
   - The reformatted XML or HTML code is printed to the console.
   - Tags are properly indented to enhance readability.

#### Example
Suppose you have the following XML code saved in a file named `test.txt`:

```xml
<apply><csymbol encoding="OpenMath"><msub><mi>P</mi><mn>1</mn></msub></csymbol><ci>x</ci></apply>
```

Running the program with this input will produce the following output:

```xml
<apply>
  <csymbol>
    <msub>
      <mi>P</mi>
      <mn>1</mn>
    </msub>
  </csymbol>
  <ci>x</ci>
</apply>
```

#### Notes
- This program is intended for basic XML/HTML formatting needs and may not handle complex scenarios or edge cases.
- Ensure that your input XML/HTML code does not contain syntactical errors, as the program assumes valid input.
- For advanced formatting requirements or handling specific cases, consider modifying the code accordingly.



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

#### How to test?
1. Install PHPUnit using Composer (if not already installed):
   - composer require --dev phpunit/phpunit
2. Run PHPUnit tests using the Composer script:
   - composer test


#### Usage
1. Ensure PHP is installed on your system.
2. Save the PHP code in a file (e.g., `reformatter.php`).
3. Run the program and provide input either from a file or directly through stdin.
   - Example: `php formatter.php test.txt`

