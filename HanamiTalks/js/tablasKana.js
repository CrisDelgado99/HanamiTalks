const hiraganaTable = document.querySelector(".hiragana-table");
const katakanaTable = document.querySelector(".katakana-table");
const hiraganaImpureTable = document.querySelector(".hiragana-table--impure");
const katakanaImpureTable = document.querySelector(".katakana-table--impure");

let arrKatakana = [];
let arrHiragana = [];

let arrPureLetters = ["vowel", "k", "s", "t", "n", "h", "m", "y", "r", "w"];
let arrImpureLetters = ["g", "z", "d", "p", "b"];

let arrVowel = ['a', 'i', 'u', 'e', 'o', ''];
let arrImpureVowel = ['a', 'i', 'u', 'e', 'o'];

fetch("./../json/hiragana.json")
  .then((response) => response.json())
  .then((data) => {
    const arrHiragana = [];
    for (const item of data) {
      arrHiragana.push(item);
    }
    printKana(arrHiragana, hiraganaTable, arrPureLetters, arrVowel);
    printKana(arrHiragana, hiraganaImpureTable, arrImpureLetters, arrImpureVowel);
  });

  fetch("./../json/katakana.json")
  .then((response) => response.json())
  .then((data) => {
    const arrKatakana = [];
    for (const item of data) {
      arrKatakana.push(item);
    }
    printKana(arrKatakana, katakanaTable, arrPureLetters, arrVowel);
    printKana(arrKatakana, katakanaImpureTable, arrImpureLetters, arrImpureVowel);
  });

  const printKana = (array, table, arrLetters, arrVowel) => {
    let tableContent = ''; // Initialize an empty string to hold table content
    arrLetters.forEach(letter => {
      let rowContent = '<tr>'; // Initialize row content for each letter
      arrVowel.forEach(vowel => {
        let sound;
        if (letter === 'vowel') {
          sound = vowel;
        } else {
          sound = letter + vowel;
        }
  
        let elementExists = array.some(element => element.sound === sound);
  
        if (elementExists) {
          let element = array.find(element => element.sound === sound);
          rowContent += '<td>' + element.kana + '<div class="sound-div">' + element.sound + '</div></td>';
        } else if (sound === 'si') {
          let element = array.find(element => element.sound === 'shi');
          rowContent += '<td>' + element.kana + '<div class="sound-div">' + element.sound + '</div></td>';
        } else if (sound === 'ti') {
          let element = array.find(element => element.sound === 'chi');
          rowContent += '<td>' + element.kana + '<div class="sound-div">' + element.sound + '</div></td>';
        } else if (sound === 'tu') {
          let element = array.find(element => element.sound === 'tsu');
          rowContent += '<td>' + element.kana + '<div class="sound-div">' + element.sound + '</div></td>';
        } else if (sound === 'hu') {
          let element = array.find(element => element.sound === 'fu');
          rowContent += '<td>' + element.kana + '<div class="sound-div">' + element.sound + '</div></td>';
        } else if(sound === 'zi'){
          let element = array.find(element => element.sound === 'ji');
          rowContent += '<td>' + element.kana + '<div class="sound-div">' + element.sound + '</div></td>';
        } else if(sound === 'di'){
          let element = array.findLast(element => element.sound === 'ji');
          rowContent += '<td>' + element.kana + '<div class="sound-div">' + element.sound + '</div></td>';
        } else if(sound === 'du'){
          let element = array.findLast(element => element.sound === 'zu');
          rowContent += '<td>' + element.kana + '<div class="sound-div">' + element.sound + '</div></td>';
        } else {
          rowContent += '<td></td>';
        }
      });
      rowContent += '</tr>'; // Close the row
      tableContent += rowContent; // Append the row to the table content
    });
    // After constructing the table content, set the inner HTML of hiraganaTable
    table.innerHTML = tableContent;
  };
