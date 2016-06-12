import sys

def main(file_name):
    input_file = open(file_name, 'r')

    # read file and determine maxLength
    lines = []
    for line in input_file:
        lines.append(line.rstrip())
    maxLength = len(max(lines, key=len))

    # Transpose
    result = []
    for i in range(0, maxLength):
        transposed = ""
        for line in lines:
            if i < len(line):
                transposed += line[i]
            else:
                transposed += " "
        result.append(transposed)

    # Print Result
    print "\n".join(result)

main(sys.argv[1])