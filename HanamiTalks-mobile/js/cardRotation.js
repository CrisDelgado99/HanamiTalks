export const rotateCard = (cardElement, svgBack) => {
    if(cardElement.classList.contains('rotated')){
        cardElement.classList.remove('rotated');
        svgBack.classList.add('dispNone')
        svgBack.classList.remove('dispNotNone')
    } else {
        cardElement.classList.add('rotated');
        svgBack.classList.remove('dispNone')
        svgBack.classList.add('dispNotNone')
    }
};
