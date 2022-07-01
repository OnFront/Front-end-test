const body = document.querySelector('body');

if(body.classList.contains('page-template-template-frontend')){
   
    const buttons = document.querySelectorAll('[data-target="open-popup"]');
    const popup = document.getElementById('frontend-popup');
    const closeBtn = popup.querySelector('.button--close');

    buttons.forEach(btn =>{
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            togglePopup();
        })
    })

    closeBtn.addEventListener('click', () => {
        togglePopup();
    })
    
    
    function togglePopup() {
        popup.classList.toggle('active');
        body.classList.toggle('overflow-hidden');
    }
}