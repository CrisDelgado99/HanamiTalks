import {Vocabulary} from "../classes/Vocabulary.js"
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

const loadVocabulary = async () => {
    try{
        let res = await fetch('./../../json/vocabulary.json');
        let data = await res.json();
        let vocabularyList = createListVocabulary(data);

        let vocabularyListTopic = vocabularyList.filter(vocabulary => vocabulary.topicTitle === topic);

        console.log(vocabularyListTopic);

        vocabularyListTopic.forEach(vocabulary => {
            containerGrid.innerHTML += vocabulary.printVocabulary();
        })
    }catch(error){
        console.log(error);
    }
}

const createListVocabulary = (data) => {
    let vocabularyList = data.map(item => new Vocabulary(
        item.vocabularyId,
        item.word,
        item.kana,
        item.romaji,
        item.translation,
        item.topicTitle,
        item.level
    ));
    
    return vocabularyList;
}

loadVocabulary();

containerGrid.addEventListener("click", e => {
    const element = e.target.closest('.card--rotating');
    if (!element) return; // If no card element is clicked, exit

    const svgBack = element.querySelector('.cornerSvg--back');
    rotateCard(element, svgBack);
});

