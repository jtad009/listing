/**
 * remove all d-none from .cards
 */
const show = () => {
    const d = document.querySelectorAll(".card");
    d.forEach(item => {
        item.classList.remove('d-none');
    });
}
/**
 * Filter accordion by on it's title content
 * STEPS
 * 1. get all tags with class  .accordion-toogle
 * 2. get all the tags that have innerText = searchPharse
 * 3. get all those tags that innerText != searchPhase
 * 4. get the remove .d-none and add .d-block to the Great-GrandParent of that element for matches
 * 5. get the remove .d-block and add .d-none to the Great-GrandParent of that element for those that don't match
 * @return void
 */
const search = () => {
    // STEP 1
    const titles = document.querySelectorAll(".accordion-toggle"); 
    // STEP 2
    const match = [...titles].filter(title => {
        return title.innerHTML.toLowerCase().match($this.val().toLowerCase());
    });
    // STEP 3
    const notMatch = [...titles].filter(title => {
        return !title.innerHTML.toLowerCase().match($this.val().toLowerCase());
    });

    //STEP 4 show those that match the creteria
    match.forEach(item => {
        item.parentElement.parentElement.parentElement.classList.remove('d-none')
        item.parentElement.parentElement.parentElement.classList.add('d-block')
    });

    //STEP 5 hide those that do not match the creteria
    notMatch.forEach(item => {
        item.parentElement.parentElement.parentElement.classList.remove('d-block')
        item.parentElement.parentElement.parentElement.classList.add('d-none')
    })
}
$(document).ready(function () {
    $(document).on('keyup', '.input-field', function () {
        $this = $(this);
        if ($this.val().length === 0) {
            show(); //show all response
            return false;
        }
        search();

    });

})