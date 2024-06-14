export class Grammar{
    grammarId;
    title;
    description;
    grammarUses

    constructor(grammarId, topicTitle, description, level, grammarUses) {
        this.grammarId = grammarId;
        this.topicTitle = topicTitle;
        this.description = description;
        this.level = level;
        this.grammarUses = grammarUses;
    }

    printGrammar(){
        let grammarUsesHtml = `<div>`;

        this.grammarUses.forEach(grammarUse => {
            grammarUsesHtml+= `
            <div class='container--grammarUse'>
                <h2 class="title--grammarUse">${grammarUse.title}</h2>
                <p>${grammarUse.description}</p>
                <p>
                    <strong>Example: </strong>
                    ${grammarUse.example}
                </p>
            </div>
            `;
        })

        grammarUsesHtml += '</div>'
        const innerHtml = `
        <h1 class="title--grammar">${this.topicTitle}</h1>
        <p>${this.description}</p>
        ${grammarUsesHtml}
        `

        return innerHtml
    }
}