import {printList} from "../printList.js"

const vocabularyMain = document.querySelector('#vocabularyMain')

let userLevel = 2;
let topicsList = []; 

const loadVocabulary = async () => {
    try{
        let res = await fetch('./../../json/vocabulary.json');
        let data = await res.json();
        topicsList = createListTopics(data);

        console.log(topicsList);

        printList(vocabularyMain, topicsList, userLevel)

    }catch(error){
        console.log(error);
    }
}

const goToVocabularyTopic = (topic) => {
    window.location.href = "./../../html/vocabularyTopic.html?topic=" + topic;
}

const createListTopics = (data) => {
    let topicsSet = new Set();
    data.forEach(item => {
        topicsSet.add(JSON.stringify({ topicTitle: item.topicTitle, level: item.level }));
    });
    
    let topicsList = Array.from(topicsSet).map(item => JSON.parse(item));
    return topicsList;
}

loadVocabulary();

document.addEventListener("click", e => {
    const element = e.target;
    if(element.classList.contains('activated')){
        goToVocabularyTopic(element.id)
    }
})

vocabularyMain.addEventListener("click", e => {
    const element = e.target.closest('.check');
    if (element) {
        if (element.classList.contains('check--transparent')) {
            userLevel += 1;
            console.log("User level updated:", userLevel);
            vocabularyMain.innerHTML = "";
            printList(vocabularyMain, topicsList, userLevel);
        }
    }
});