import sys

def main(position, max):
    position = int(position)

    # exclude 0th by starting at 1
    max = int(max) + 1
    result = []
    for i in range(1, max):
        ord = ""
        if i % 10 == 1:
            ord = "st"
        elif i % 10 == 2:
            ord = "nd"
        elif i % 10 == 3:
            ord = "rd"
        else:
            ord = "th"

        # special case 11, 12, 13
        if i == 11 or i == 12 or i == 13:
            ord = "th"

        # exclude position
        if i != position:
            result.append(str(i)+ord)

    print ', '.join(result)

max = 100
if (len(sys.argv) > 2):
    max = int(sys.argv[2])
main( int(sys.argv[1]), max);