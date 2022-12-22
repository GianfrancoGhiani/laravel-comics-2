import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

import Swal from 'sweetalert2/dist/sweetalert2.js';
import 'sweetalert2/src/sweetalert2.scss';

let deleteBtns = document.getElementsByClassName('myBtn');
for (const btn of deleteBtns) {
    btn.addEventListener('click', function swal(event){
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#0282F9',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            console.log(result, Swal.fire())

            if (result.isConfirmed) {
                
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    
                )
                const btnClicked = document.getElementsByClassName('swal2-confirm');
                btnClicked[0].addEventListener('click', function(){
                    btn.parentElement.submit();
                })
                
               
            }
        })}
    )
    
};
