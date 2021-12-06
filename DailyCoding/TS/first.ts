//* Given a list of numbers and a number k, return whether any two numbers from the list add up to k.
//* For example, given [10, 15, 3, 7] and k of 17, return true since 10 + 7 is 17.

const numsAddToK = (arr: number[], k: number): boolean =>
  !!arr.find((el, idx) => {
    for (let i = idx + 1; i < arr.length; i++) {
      if (el + arr[i] === k) return true;
    }
  })

console.log(numsAddToK([10, 15, 3, 7], 17) ? "true" : "false");
//! Bonus: Can you do this in one pass?