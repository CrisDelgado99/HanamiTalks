export class Kanji {
    kanjiId;
    symbol;
    kunyomi;
    onyomi;
    translation;
    topicTitle;
    level;

    constructor(
        kanjiId,
        symbol,
        kunyomi,
        onyomi,
        translation,
        topicTitle,
        level
    ) {
        this.kanjiId = kanjiId;
        this.symbol = symbol;
        this.kunyomi = kunyomi;
        this.onyomi = onyomi;
        this.translation = translation;
        this.topicTitle = topicTitle;
        this.level = level;
    }

    printKanji() {
        const innerHtml = `
            <div class='card--rotating hiragana'>
                <div class='card--full'>
                    <div class='card--folded card--full__front'>
                        <h1 class='kanjiSymbol--front japanese'>${this.symbol}</h1>
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
                        <table class='table--kanji'>
                            <tr>
                                <td rowspan='2'>
                                    <h1 class="kanjiSymbol--back japanese">${this.symbol}</h1>
                                </td>
                                <td><p>Onyomi: <label class="japanese">${this.onyomi}</label></p></td>
                            </tr>
                            <tr>
                                <td><p>Kunyomi: <label class="japanese">${this.kunyomi}</label></p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><p>Translation: ${this.translation}</p></td>
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
