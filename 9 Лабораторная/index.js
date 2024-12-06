function equation(x, y, w) {
    return Math.pow(((6 * Math.pow(y, 2) - Math.sqrt(x) + Math.pow(w, 2)) / Math.pow(x, 2) + 3 * y + 7 * w), 2) - (Math.pow(y, 2) / 2) - 4;
}

const result = equation(1, 2, 3);
console.log(result);