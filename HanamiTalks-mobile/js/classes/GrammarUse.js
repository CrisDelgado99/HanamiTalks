export class GrammarUse{
    grammarUseId;
    title;
    description;
    example;
    grammarId;

    constructor(grammarUseId, title, description, example, grammarId) {
        this.grammarUseId = grammarUseId;
        this.title = title;
        this.description = description;
        this.example = example;
        this.grammarId = grammarId;
    }
}