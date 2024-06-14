import {rotateCard} from "./../cardRotation.js";

const cardHiragana = document.querySelector("#hiraganaCard");
const cardKatakana = document.querySelector("#katakanaCard");
const svgHiraganaBack = document.querySelector('#cornerSvgBack--Hiragana');
const svgKatakanaBack = document.querySelector('#cornerSvgBack--Katakana');

cardHiragana.addEventListener("click", (e) => {
    rotateCard(cardHiragana, svgHiraganaBack);
});

cardKatakana.addEventListener("click", (e) => {
    rotateCard(cardKatakana, svgKatakanaBack);
});

