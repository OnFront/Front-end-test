
window.addEventListener('DOMContentLoaded', function(e) {
    const pageFrontend = document.querySelector('.page-template-template-frontend');

    if(pageFrontend) {
        ajaxForm();
    }
})

function ajaxForm(e) {
    const popup = document.querySelector('.popup');
    const submitBtn = document.getElementById('btnSubmit');
    const form = document.getElementById('popup-form');
    const fileInput = document.querySelector('.input-file');
    const msg = popup.querySelector('.msg');
    const uploading = popup.querySelector('.uploading');
    const dataActive = popup.querySelectorAll('[data-active]');
    const uploadedMsg = popup.querySelector('.successfully-uploaded');
   const label = popup.querySelector('.popup__file-label');

    let canPass;

    fileInput.addEventListener('change', () => {
        const inputVal = fileInput.value;
        const inputName = inputVal.split(/(\\|\/)/g).pop();
        const fileName = fileInput.files[0].name;
        const fileSize = fileInput.files[0].size / 1024 / 1024;

        canPass = validate() ? true : false;

        function validate(){
            const isValidExt = validateExt() ? true : false;
            const isValidSize = fileSize < 6 ? true : false;
            let handler;

            if(isValidExt && isValidSize) {
                msg.classList.contains('has-error') ?  msg.classList.remove('has-error') : '';
                displayUploadMsg();
                uploadProgress(e);
                return handler = true;
            } else {
               hideItems();
               label.classList.add('active') ;
               msg.innerText = 'Maksymalny rozmiar pliku to 5 MB, a dopuszczalne formaty to: pdf, doc, docx.';
               msg.classList.add('has-error');
               return handler = false;
            }

            return handler;
        }
     
        function validateExt() {
           
            const allowed_extensions = new Array("pdf","doc","docx");
            let file_extension = fileName.split('.').pop().toLowerCase();

            
            for(let i = 0; i <= allowed_extensions.length; i++){
                if(allowed_extensions[i] == file_extension)
                {   
                    msg.classList.contains('has-error') ?  msg.classList.remove('has-error') : '';
                    return true
                } 
            }
        }


        function displayUploadMsg() {
            hideItems();
            uploading.classList.add('active');
            uploading.innerText = inputName;
        }
  

        function uploadProgress(e) {
         const xhr = new XMLHttpRequest();
         xhr.open('POST', 'form.php');
         xhr.upload.addEventListener('progress', e => {
            if (e.lengthComputable) {
                let percentComplete = e.loaded / e.total;
                percentComplete = parseInt(percentComplete * 100);
        
                if (percentComplete === 100) {
                    hideItems();
                    uploadedMsg.classList.add('active');
                    label.classList.add('hidden');
                    msg.innerText = inputName;
                }   
             }
         })
         xhr.send(new FormData(form));
        }

        function hideItems() {
            dataActive.forEach( item => {
                item.classList.remove('active');
            })
        }
    })
    
   
    submitBtn.addEventListener('click', function(e){
        e.preventDefault(); 

        if(canPass) {
            form.submit();
        }
    })
    
}