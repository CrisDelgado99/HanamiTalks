import {Kanji} from "../classes/Kanji.js"
import {rotateCard} from "../cardRotation.js"

const h1Title = document.querySelector('.title--kanjiTopic');
const containerGrid = document.querySelector('.container--grid');

const obtainTopic = () => {
    const params = new URLSearchParams(window.location.search);
    const topic = params.get('topic')
    return topic
}

const topic = obtainTopic();
h1Title.innerHTML = topic;

const loadKanji = async () => {
    try{
        let res = await fetch('./../../json/kanji.json');
        let data = await res.json();
        let kanjiList = createListKanji(data);

        let kanjiListTopic = kanjiList.filter(kanji => kanji.topicTitle === topic);

        console.log(kanjiListTopic);

        kanjiListTopic.forEach(kanji => {
            containerGrid.innerHTML += kanji.printKanji();
        })
    }catch(error){
        console.log(error);
    }
}

const createListKanji = (data) => {
    let kanjiList = data.map(item => new Kanji(
        item.kanjiId,
        item.symbol,
        item.kunyomi,
        item.onyomi,
        item.translation,
        item.topicTitle,
        item.level
    ));
    
    return kanjiList;
}

loadKanji();

containerGrid.addEventListener("click", e => {
    const element = e.target.closest('.card--rotating');
    if (!element) return; // If no card element is clicked, exit

    const svgBack = element.querySelector('.cornerSvg--back');
    rotateCard(element, svgBack);
});

