import {printList} from "../printList.js"

const grammarMain = document.querySelector('#grammarMain')

let userLevel = 2;
let topicsList = []; 

const loadGrammar = async () => {
    try{
        let res = await fetch('./../../json/grammar.json');
        let data = await res.json();
        topicsList = createListTopics(data);

        console.log(topicsList);

        printList(grammarMain, topicsList, userLevel)

    }catch(error){
        console.log(error);
    }
}

const goToGrammarTopic = (topic) => {
    window.location.href = "./../../html/grammarTopic.html?topic=" + topic;
}

const createListTopics = (data) => {
    let topicsSet = new Set();
    data.forEach(item => {
        topicsSet.add(JSON.stringify({ topicTitle: item.topicTitle, level: item.level }));
    });
    
    let topicsList = Array.from(topicsSet).map(item => JSON.parse(item));
    return topicsList;
}

loadGrammar();

document.addEventListener("click", e => {
    const element = e.target;
    if(element.classList.contains('activated')){
        goToGrammarTopic(element.id)
    }
})

grammarMain.addEventListener("click", e => {
    const element = e.target.closest('.check');
    if (element) {
        element.style.backgroundColor = "black";
        console.log("click");
        if (element.classList.contains('check--transparent')) {
            userLevel += 1;
            console.log("User level updated:", userLevel);
            grammarMain.innerHTML = "";
            printList(grammarMain, topicsList, userLevel);
        }
    }
});