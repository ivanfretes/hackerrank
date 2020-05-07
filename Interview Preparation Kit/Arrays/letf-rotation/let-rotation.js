// Complete the rotLeft function below.
function rotLeft(a, d) {
    let new_arr = [];

    for (let i = (d - 1); i >= 0; i--) {
        const element = a[i];
        new_arr.unshift(element)
    }

    for (let i = a.length - 1; i >= d; i--) {
        const element = a[i];
        new_arr.unshift(element)
    }

    return new_arr;
}

console.log(rotLeft([33,47,70,37,8,53,13,93,71,72,51,100,60,87,97], 13));