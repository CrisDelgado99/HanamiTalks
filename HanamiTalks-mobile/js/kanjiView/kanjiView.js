import {printList} from "../printList.js"

const kanjiMain = document.querySelector('#kanjiMain')

let userLevel = 2;
let topicsList = []; 

const loadKanji = async () => {
    try{
        let res = await fetch('./../../json/kanji.json');
        let data = await res.json();
        topicsList = createListTopics(data);

        console.log(topicsList);

        printList(kanjiMain, topicsList, userLevel)

    }catch(error){
        console.log(error);
    }
}

const goToKanjiTopic = (topic) => {
    window.location.href = "./../../html/kanjiTopic.html?topic=" + topic;
}

const createListTopics = (data) => {
    let topicsSet = new Set();
    data.forEach(item => {
        topicsSet.add(JSON.stringify({ topicTitle: item.topicTitle, level: item.level }));
    });
    
    let topicsList = Array.from(topicsSet).map(item => JSON.parse(item));
    return topicsList;
}

loadKanji();

document.addEventListener("click", e => {
    const element = e.target;
    if(element.classList.contains('activated')){
        goToKanjiTopic(element.id)
    }
})

kanjiMain.addEventListener("click", e => {
    const element = e.target.closest('.check');
    if (element) {
        element.style.backgroundColor = "black";
        console.log("click");
        if (element.classList.contains('check--transparent')) {
            userLevel += 1;
            console.log("User level updated:", userLevel);
            kanjiMain.innerHTML = "";
            printList(kanjiMain, topicsList, userLevel);
        }
    }
});