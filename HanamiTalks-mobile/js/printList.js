export const printListElement = (topic, userLevel) => {
    let ppalDivClass = "";
    if (topic.level > userLevel) {
        ppalDivClass = "card--simple list deactivated";
    } else {
        ppalDivClass = "card--simple list activated";
    }

    let checkClass = "";
    if (topic.level === userLevel) {
        checkClass = "check check--transparent";
    } else {
        checkClass = "check";
    }

    let innerHtml = `
    <div id='${topic.topicTitle}' class='${ppalDivClass}'>
        <ul>
            <li>${topic.topicTitle}</li>
        </ul>
        <div class="buttons">
            <div class="lock">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"
                    />
                </svg>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 dispNone"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5V6.75a4.5 4.5 0 1 1 9 0v3.75M3.75 21.75h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H3.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"
                    />
                </svg>
            </div>
            <div class='${checkClass}'>
            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            className="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m4.5 12.75 6 6 9-13.5"
                            />
                        </svg>
            </div>
        </div>
    </div>
`;

return innerHtml;
};

export const printList = (parentElement, topicList, userLevel) => {
    topicList.map(topic => {
        parentElement.innerHTML += printListElement(topic, userLevel);
    })
}
