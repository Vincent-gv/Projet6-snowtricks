$(document).ready(function () {

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
        const $input = $(finalPrototype);

        const $deleteButton = document.createElement('button');
        $deleteButton.innerHTML = '<i class="fas fa-trash"></i> Delete';
        $deleteButton.setAttribute('type', 'button');
        $deleteButton.className = 'btn-round mt-2 text-sm delete';
        $deleteButton.addEventListener('click', function () {
            this.parentNode.parentNode.remove();
        });

        $input.find('.collection_element').append($deleteButton);

        const $fileInput = $input.find('.input-upload');

        if ($fileInput) {
            $fileInput.on('change', (e) => {
                e.preventDefault();
                const temp = $fileInput.val().split('\\');
                $input.find('.custom-file-label').text(temp[temp.length - 1]);
            })
        }

        $($inputsDiv).append($input);
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
