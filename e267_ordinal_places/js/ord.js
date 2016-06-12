/**
 * e267
 * With bonus
 */

// get argument, dog position then maximum (default to 100)
const position = process.argv[2];
const max = parseInt(process.argv[3]) + 1 || 101;

// construct result set
var result = [];
for (let i = 1; i < max; i++) {
    ord = "";
    if (i % 10 == 1) {
        ord = "st";
    } else if (i % 10 == 2) {
        ord = "nd";
    } else if (i % 10 == 3) {
        ord = "rd";
    } else {
        ord = "th";
    }

    //special case dealing with 11, 12 and 13
    if (i == 11 || i == 12 || i == 13) {
        ord = "th";
    }

    // exclude the position
    if (i != position) {
        result.push(i + ord);
    }
}

// Print Result
console.log( result.join(', ') );