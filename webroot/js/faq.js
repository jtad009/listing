const  show = ()=> {
    const d = document.querySelectorAll(".card");
    d.forEach(item => {
        item.classList.remove('d-none');
    });
}
const search = ()=>{
    const titles = document.querySelectorAll(".accordion-toggle");
        const match = [...titles].filter(title => {
            return title.innerHTML.toLowerCase().match($this.val().toLowerCase());
        });
        const notMatch = [...titles].filter(title => {
            return !title.innerHTML.toLowerCase().match($this.val().toLowerCase());
        });
       
        //show those that match the creteria
        match.forEach(item => {
            item.parentElement.parentElement.parentElement.classList.remove('d-none')
            item.parentElement.parentElement.parentElement.classList.add('d-block')
        });

        //hide those that do not match the creteria
        notMatch.forEach(item => {
            item.parentElement.parentElement.parentElement.classList.remove('d-block')
            item.parentElement.parentElement.parentElement.classList.add('d-none')
        })
}
$(document).ready(function(){
    $(document).on('keyup', '.input-field', function () {
        $this = $(this);
        if ($this.val().length === 0) {
            show(); //show all response
            return false;
        }
        search();
        
    });

})