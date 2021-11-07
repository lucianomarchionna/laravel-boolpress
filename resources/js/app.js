require('./bootstrap');

const deleteForm = document.querySelectorAll('.delete-confirmed');

deleteForm.forEach(item =>{
    item.addEventListener('submit', function(e){
        const resp = confirm('Vuoi davvero cancellare il post?');

        if(!resp){
            e.preventDefault();
        }
    })
})