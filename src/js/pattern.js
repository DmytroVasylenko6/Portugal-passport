const cyrillicPattern = /^[\u0400-\u04FF]+$/;

const inputName = document.querySelector('[data-name-input]');
const inputLastName = document.querySelector('[data-lastname-input]');
const re = /а|б|в|г|д|е|ё|ж|з|и|ё|к|л|м|н|о|п|р|с|т|у|ф|х|ц|ч|ш|щ|ъ|ы|ь|э|ю|я|і|й|є/gi;

inputName.addEventListener('input', onInput);
inputLastName.addEventListener('input', onInput);


function onInput(e) {
    
    // if (cyrillicPattern.test(e.currentTarget.value)) {
    //     e.currentTarget.value = '';
    // }
    e.currentTarget.value = e.currentTarget.value.replace(re, '');
}
