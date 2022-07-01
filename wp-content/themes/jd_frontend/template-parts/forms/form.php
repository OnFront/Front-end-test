<?php

?>


<form action="?" method="POST" enctype="multipart/form-data" class="popup__form" id="popup-form" required>
    <div class="popup__fields">
        <div class="popup__fields-field">
            <label for="name_surname">Twoje imię i nazwisko</label>
            <input class="popup__form-input" type="text" name="name_surname" id="name_surname" placeholder="Imię i nazwisko" required>
        </div>

        <div class="popup__fields-field">
            <label for="your_email">Twój adres e-mail</label>
            <input class="popup__form-input" type="email" name="your_email" id="your_email" placeholder="Adres e-mail" required>
        </div>
    </div>

    <div class="popup__file">
        <label class="popup__file-label active" for="file_upload" data-active>
            
            <svg class="popup__file-icon" width="71" height="59" viewBox="0 0 71 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_10_10)">
                <path d="M35 24V57" stroke="#FF4367" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M26 33L35.0012 24L44 33" stroke="#FF4367" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M44.1255 41H55.2935C62.7219 41 69 35.1914 69 28.3195C69 21.2301 62.2104 14.8959 53.7324 15.7178C51.9167 9.83274 46.2078 5.2905 38.078 6.29405C27.2103 -2.83344 10.9508 3.35031 8.58508 17.6723C-3.66362 25.2085 2.73452 41 15.0409 41H24.494" stroke="#FF4367" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                <clipPath id="clip0_10_10">
                <rect width="71" height="59" fill="white"/>
                </clipPath>
                </defs>
            </svg>

            <div>Przeciągnij plik lub <span> wybierz z folderu</span></div>
        </label>


        <div class="uploading" data-active>
        </div>
        

        <div class="successfully-uploaded" data-active>
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 30.2476L24.8319 40L46 19" stroke="#00D1C1" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 57H57V3H3V57Z" stroke="#00D1C1" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="info">
                    Twój plik wgrany poprawnie
                </div>
        </div>
        <input class="popup__form-input input-file" type="file" name="file_upload" id="file_upload" >
    </div>

    <div class="msg">
        Maksymalny rozmiar pliku to 5 MB, a dopuszczalne formaty to: pdf, doc, docx.
    </div>
    <!-- <?php //wp_nonce_field( 'new-cv' ); ?> -->
    <input type="hidden" name="post_id" id="post_id" value="55" />
    <input cglass="popup__form-input" id="btnSubmit" type="submit" value="Aplikuj">
</form>