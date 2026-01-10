import { initBootstrapValidation } from './form-validation';
document.addEventListener("DOMContentLoaded", function(){

    // Select all dropdown toggles that are INSIDE another dropdown menu
    // (This targets "NEET", but ignores "Registration")
    let nestedDropdowns = document.querySelectorAll('.dropdown-menu .dropdown-toggle');

    nestedDropdowns.forEach(function(element){
        element.addEventListener('click', function (e) {

            e.preventDefault();
            e.stopPropagation(); // Stop the Registration menu from closing

            let nextEl = this.nextElementSibling;
            if(nextEl && nextEl.classList.contains('dropdown-menu')){

                // Toggle the 'show' class manually
                if(nextEl.style.display === 'block'){
                    nextEl.style.display = 'none';
                } else {
                    nextEl.style.display = 'block';
                }
            }
        });
        
        
        
    });

    // Image preview functionality for file inputs
    function setupImagePreview(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);

        if (input && preview) {
            input.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.visibility = 'visible';
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.src = '';
                    preview.style.visibility = 'hidden';
                }
            });
        }
        // var rollModal = document.getElementById('rollNoModal');
        // rollModal.addEventListener('show.bs.modal', function (event) {
        //     // Button that triggered the modal
        //     var button = event.relatedTarget;
            
        //     // Extract info from data-* attributes
        //     var userId = button.getAttribute('data-user-id');
            
        //     // Update the modal's content.
        //     var modalUserIdInput = rollModal.querySelector('#modalUserId');
        //     // var modalStudentName = rollModal.querySelector('#studentNameDisplay');
            
        //     modalUserIdInput.value = userId;
        //     // modalStudentName.textContent = userName;
        // });
    }

    // Set up image previews for each file input
    setupImagePreview('signature', 'signature-preview');
    setupImagePreview('student_image', 'student-image-preview');
    initBootstrapValidation();
});