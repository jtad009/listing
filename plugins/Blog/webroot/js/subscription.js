var baseLink = `${window.location.protocol}//${window.location.host}`;
$(document).ready(function(){
   $('.spinner-grow ').addClass('d-none');
    $(document).on('click', 'a.subscribe', function(e){
        $this = $(this);
        e.preventDefault();
        let re =  	
        /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
        const regex = new RegExp(re);
       if(regex.test($this.parent().find('input[name="subscribe"]').val())) {
        $.ajax({
            url: baseLink+'blog/subscriptions/add',
            type: 'post',
            data: { email: $this.parent().find('input[name="subscribe"]').val() },
            beforeSend: function(xhr){
                $this.parent().find('div.spinner-grow').removeClass('d-none');
                $this.addClass('d-none');
            },
            success: function(result){
                $this.parent().find('div.spinner-grow').addClass('d-none');
                $this.removeClass('d-none');
                let response = $.parseJSON(result);
                if(response.code === 200){
                    alertify.message(response.message + " added to mail-list.");
                    $this.parent().find('input[name="subscribe"]').val('')
                } else {
                    alertify.error(response.message);
                }
                
            }
        });
       } else {
        alertify.error("Your email is invalid.");
       }
        
    });
})