export class Vocabulary{
    vocabularyId;
    word;
    translation;
    topicTitle;
    level;

    constructor(vocabularyId, word, kana, romaji, translation, topicTitle, level) {
        this.vocabularyId = vocabularyId;
        this.word = word;
        this.kana = kana;
        this.romaji = romaji;
        this.translation = translation;
        this.topicTitle = topicTitle;
        this.level = level;
    }

    printVocabulary(){
        const innerHtml = `
        <div class='card--rotating hiragana'>
            <div class='card--full'>
                <div class='card--folded card--full__front'>
                    <h1 class='word--front japanese'>${this.word}</h1>
                    <p class='translation--front'>${this.translation}</p>
                    <div class="cornerSvg cornerSvg--back">
                        <svg
                        data-slot="icon"
                        aria-hidden="true"
                        fill="none"
                        stroke-width="1.5"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            ></path>
                        </svg>
                    </div>
                </div>
                <div class='card--folded card--full__back'>
                    <table class='table--vocabulary'>
                        <tr>
                            <td colspan='2'>
                                <h1 class="word--back japanese">${this.word}</h1>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Kana: <label class="japanese">${this.kana}</label></p></td>
                        </tr>
                        <tr>
                            <td><p>Romaji: <label class="japanese">${this.romaji}</label></p></td>
                        </tr>
                        <tr>
                            <td><p>Translation: ${this.translation}</p></td>
                        </tr>
                    </table>

                    <div class="cornerSvg dispNone">
                        <svg
                        data-slot="icon"
                        aria-hidden="true"
                        fill="none"
                        stroke-width="1.5"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    `;

    return innerHtml;
    }
}