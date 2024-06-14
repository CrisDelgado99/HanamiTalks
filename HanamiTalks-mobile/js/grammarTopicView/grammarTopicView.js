import {GrammarUse} from "../classes/GrammarUse.js"
import {Grammar} from "../classes/Grammar.js"

const grammarDiv = document.querySelector('#grammarDiv');

const obtainTopic = () => {
    const params = new URLSearchParams(window.location.search);
    const topic = params.get('topic');
    return topic;
}

const topic = obtainTopic();

let thisTopicGrammarUses = [];
let currentGrammar = null;  // Global variable to store the current grammar object

const loadGrammarUse = async (grammar) => {
    try {
        let res = await fetch('./../../json/grammarUse.json');
        let data = await res.json();
        let grammarUseList = createListGrammarUse(data);

        thisTopicGrammarUses = grammarUseList.filter(grammarUse => grammarUse.grammarId === grammar.grammarId);

        // Associate grammar uses with the grammar topic
        grammar.grammarUses = thisTopicGrammarUses;

        console.log(thisTopicGrammarUses);

    } catch (error) {
        console.log(error);
    }
}

const loadGrammar = async () => {
    try {
        let res = await fetch('./../../json/grammar.json');
        let data = await res.json();
        let grammarList = createListGrammar(data);

        let grammarListTopic = grammarList.filter(grammar => grammar.topicTitle === topic);

        if (grammarListTopic.length > 0) {
            currentGrammar = grammarListTopic[0];  // Set the current grammar object
            await loadGrammarUse(currentGrammar);

            console.log(currentGrammar);

            grammarDiv.innerHTML += currentGrammar.printGrammar();
        } else {
            console.log("No grammar topics found for the given topic.");
        }

    } catch (error) {
        console.log(error);
    }
}

const createListGrammarUse = (data) => {
    let grammarUseList = data.map(item => new GrammarUse(
        item.grammarUseId,
        item.title,
        item.description,
        item.example,
        item.grammarId
    ));

    return grammarUseList;
}

const createListGrammar = (data) => {
    let grammarList = data.map(item => new Grammar(
        item.grammarId,
        item.topicTitle,
        item.description,
        item.level,
        [] // Initialize with an empty array for grammarUses
    ));
    
    return grammarList;
}

loadGrammar();