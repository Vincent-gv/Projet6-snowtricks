$(document).ready(function () {

    const $fileInput = $('.input-upload');

    $fileInput.on('change', (e) => {
        e.preventDefault();
        $('.custom-file-label').text($fileInput.val());
    })

    const $collectionElements = document.querySelectorAll('.collection_element');

    $('legend').remove();
    $('.alt-text').remove();
    $('.input-video').remove();

for (let $collectionElement of $collectionElements) {
    const $deleteButton = document.createElement('button');
    $deleteButton.innerHTML = '<i class="fas fa-trash"></i> Delete';
    $deleteButton.setAttribute('type', 'button');
    $deleteButton.className = 'btn-round mt-2 text-sm delete';
    $deleteButton.addEventListener('click', function () {
        this.parentElement.remove();
    });

    $collectionElement.parentElement.prepend($deleteButton);
}

function addInput($inputsDiv, prototype, label, index) {
    const finalPrototype = prototype
        .replace(/__name__label__/gm, 'New ' + index + ' *')
        .replace(/__name__/gm, 'generated_' + index);
    const $input = document.createRange().createContextualFragment(finalPrototype);

    const $deleteButton = document.createElement('button');
    $deleteButton.innerHTML = '<i class="fas fa-trash"></i> Delete';
    $deleteButton.setAttribute('type', 'button');
    $deleteButton.className = 'btn-round mt-2 text-sm delete';
    $deleteButton.addEventListener('click', function () {
        this.parentElement.remove();
    });

    $input.querySelector('.form-group').appendChild($deleteButton);

    $inputsDiv.appendChild($input);

}

$collectionDivs = document.querySelectorAll('*[data-prototype]');

for (const $collectionDiv of $collectionDivs) {
    let index = 0;

    const prototype = $collectionDiv.dataset.prototype;
    const label = $collectionDiv.dataset.label;

    const $inputsDiv = document.createElement('div');
    $collectionDiv.appendChild($inputsDiv);

    const $addButton = document.createElement('button');
    $addButton.innerHTML = '<i class="fas fa-plus"></i> Add more';
    $addButton.setAttribute('type', 'button');
    $addButton.className = 'btn-round mb-3 text-sm add-more m-auto';
    $addButton.addEventListener('click', function () {
        addInput($inputsDiv, prototype, label, ++index);
    });
    $collectionDiv.appendChild($addButton);

    addInput($inputsDiv, prototype, label, ++index);
}
});