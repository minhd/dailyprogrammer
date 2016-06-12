const fs = require('fs')
const filename = process.argv[2];

fs.readFile(filename, 'utf8', (err, lines) => {
    lines = lines.split('\n');

    // determine maxLength
    var maxLength = 0;
    lines.forEach(function(line){
        if (line.length > maxLength) maxLength = line.length;
    });

    // Transpose
    var result = [];
    for (let i = 0; i < maxLength; i++) {
        transposed = ""
        lines.forEach(function(line) {
            transposed += (i < line.length) ? line[i] : ' ';
        });
        result[i] = transposed;
    }

    // Print Result
    console.log(result.join('\n'));
});