document.addEventListener('DOMContentLoaded', () => {
    const divisiDropdown = document.getElementById('divisiKeperluanDropdown');
    const keperluanInput = document.getElementById('keperluanDivisiInput');
    const keperluanWrapper = document.getElementById('keperluanDivisiWrapper');
    const hasilInputDiv = document.getElementById('hasilInput');

    const keperluanDivisi = {};

    // Event saat divisi dipilih
    divisiDropdown.addEventListener('change', () => {
        const selectedDivisi = divisiDropdown.value;
        keperluanInput.style.display = 'block';
        keperluanInput.focus();
        updateKeperluanList(selectedDivisi);
    });

    keperluanInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && keperluanInput.value.trim() !== "") {
            const selectedDivisi = divisiDropdown.value;
            const keperluan = keperluanInput.value.trim();

            if (!keperluanDivisi[selectedDivisi]) {
                keperluanDivisi[selectedDivisi] = [];
            }
            keperluanDivisi[selectedDivisi].push(keperluan);

            keperluanInput.value = '';
            updateKeperluanList(selectedDivisi);
            updateHasilInput();
            e.preventDefault();
        }
    });

    function updateKeperluanList(divisi) {
        keperluanWrapper.innerHTML = '';

        if (keperluanDivisi[divisi]) {
            keperluanDivisi[divisi].forEach((keperluan, index) => {
                const listItem = document.createElement('div');
                const nameSpan = document.createElement('span');
                nameSpan.textContent = keperluan;

                const removeButton = document.createElement('button');
                removeButton.textContent = '×';
                removeButton.addEventListener('click', () => {
                    keperluanDivisi[divisi].splice(index, 1);
                    updateKeperluanList(divisi);
                    updateHasilInput();
                });

                listItem.appendChild(nameSpan);
                listItem.appendChild(removeButton);
                listItem.classList.add('list-horizontal-item');
                keperluanWrapper.appendChild(listItem);
            });
        }
    }

    function updateHasilInput() {
        hasilInputDiv.innerHTML = '';

        Object.keys(keperluanDivisi).forEach(divisi => {
            if (keperluanDivisi[divisi].length > 0) {
                const divisiWrapper = document.createElement('div');

                const divisiHeading = document.createElement('h5');
                divisiHeading.textContent = `Divisi. ${divisi}`;

                const keperluanList = document.createElement('ul');
                keperluanDivisi[divisi].forEach(keperluan => {
                    const listItem = document.createElement('li');
                    listItem.textContent = keperluan;
                    keperluanList.appendChild(listItem);
                });

                divisiWrapper.appendChild(divisiHeading);
                divisiWrapper.appendChild(keperluanList);
                hasilInputDiv.appendChild(divisiWrapper);
            }
        });
    }

    // Event untuk input masal
    function addToList(inputId, listId) {
        const input = document.getElementById(inputId);
        const list = document.getElementById(listId);

        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' && input.value.trim() !== "") {
                createListItem(input.value, list);
                input.value = '';
                e.preventDefault();
            }
        });
    }

    function createListItem(value, list) {
        const listItem = document.createElement('div');
        const nameSpan = document.createElement('span');
        nameSpan.textContent = value;

        const removeButton = document.createElement('button');
        removeButton.textContent = '×';
        removeButton.addEventListener('click', () => listItem.remove());

        listItem.appendChild(nameSpan);
        listItem.appendChild(removeButton);
        list.appendChild(listItem);
    }

    function handleDropdownWithManualInput(dropdownId, manualInputId, listId) {
        const dropdown = document.getElementById(dropdownId);
        const manualInput = document.getElementById(manualInputId);
        const list = document.getElementById(listId);

        dropdown.addEventListener('change', () => {
            if (dropdown.value === 'other') {
                manualInput.style.display = 'block';
                manualInput.focus();
            } else if (dropdown.value !== '') {
                createListItem(dropdown.value, list);
                dropdown.value = '';
            }
        });

        manualInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' && manualInput.value.trim() !== "") {
                createListItem(manualInput.value, list);
                manualInput.value = '';
                manualInput.style.display = 'none';
                dropdown.value = '';
                e.preventDefault();
            }
        });
    }

    addToList('tamuUndangan', 'listTamuUndangan');
    addToList('divisiHumas', 'listDivisiHumas');
    addToList('divisiAcara', 'listDivisiAcara');
    handleDropdownWithManualInput('divisiPerlengkapanDropdown', 'divisiPerlengkapanManual', 'listDivisiPerlengkapan');

    // Drag and Drop Script
    const dragDropArea = document.getElementById('dragDropArea');
    const fileInput = document.getElementById('fileInput');
    const imagePreviewWrapper = document.getElementById('imagePreviewWrapper');
    const imagePreview = document.getElementById('imagePreview');
    const removeImageButton = document.getElementById('removeImage');

    dragDropArea.addEventListener('click', () => fileInput.click());

    dragDropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dragDropArea.classList.add('dragover');
    });

    dragDropArea.addEventListener('dragleave', () => dragDropArea.classList.remove('dragover'));

    dragDropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dragDropArea.classList.remove('dragover');
        const file = e.dataTransfer.files[0];
        if (file) {
            fileInput.files = e.dataTransfer.files;
            previewImage(file);
        }
    });

    fileInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            previewImage(file);
        }
    });

    removeImageButton.addEventListener('click', () => {
        fileInput.value = "";
        imagePreview.src = "";
        imagePreviewWrapper.style.display = "none";
        dragDropArea.style.display = "flex";
    });

    function previewImage(file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.src = e.target.result;
            imagePreviewWrapper.style.display = "block";
            dragDropArea.style.display = "none";
        };
        reader.readAsDataURL(file);
    }

    // File Upload Script
    const fileDropArea = document.getElementById('file-drop-area');
    const fileInputDokumen = document.getElementById('file_dokumen');
    const uploadedFile = document.getElementById('uploaded-file');
    const fileNameSpan = document.getElementById('file-name');
    const removeFileButton = document.getElementById('remove-file');
    const maxSize = 5 * 1024 * 1024;
    
    fileDropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileDropArea.classList.add('dragover');
    });

    fileDropArea.addEventListener('dragleave', () => fileDropArea.classList.remove('dragover'));

    fileDropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        fileDropArea.classList.remove('dragover');
        const file = e.dataTransfer.files[0];
        
        if (validateFile(file)) {
            fileInputDokumen.files = e.dataTransfer.files;
            fileNameSpan.textContent = file.name;
            fileDropArea.style.display = 'none';
            uploadedFile.style.display = 'flex';
        }
    });

    fileDropArea.addEventListener('click', () => fileInputDokumen.click());

    fileInputDokumen.addEventListener('change', () => {
        const file = fileInputDokumen.files[0];
        if (validateFile(file)) {
            fileNameSpan.textContent = file.name;
            fileDropArea.style.display = 'none';
            uploadedFile.style.display = 'flex';
        }
    });

    removeFileButton.addEventListener('click', () => {
        fileInputDokumen.value = '';
        fileDropArea.style.display = 'block';
        uploadedFile.style.display = 'none';
    });

    function validateFile(file) {
        const allowedExtensions = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'];

        if (file.size > maxSize) {
            Swal.fire({
                icon: 'error',
                title: 'Ukuran File Terlalu Besar',
                text: 'Ukuran file melebihi 5MB. Silakan unggah file yang lebih kecil.',
            });
            return false;
        }

        if (!allowedExtensions.includes(file.type)) {
            Swal.fire({
                icon: 'error',
                title: 'Format File Tidak Valid',
                text: 'Harap unggah file dengan format Word, Excel, PDF, atau PowerPoint.',
            });
            return false;
        }

        return true;
    }
});
