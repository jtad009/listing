var baseLink = window.location.href.indexOf('localhost') > -1 ? 'http://localhost:7020/' : 'http://listing.skole.com.ng/';
$(document).ready(function(){
    $(document).on('click', 'a#approve', function(e){
        e.preventDefault();
        $this = $(this);
        $.ajax({
            url: baseLink+'directory/listings/approve',
            type: 'post',
            data: {'approved': $(this).attr('data-val')== 0 ? 1 : 0, 'id': $(this).attr('data-id') },
            beforeSend: function(xhr){
                $this.html('Please Wait, saving');
            },
            success: function(result){
                $this.html('Approve listing');
                const response = $.parseJSON(result);
                if(response.code === 401){
                    alertify.message(response.message);
                }else{
                    $this.attr('data-val', response.data);
                    alertify.message(response.message);
                }
            }
        });
    });
    $(document).on('click', 'a#publish', function(e){
        e.preventDefault();
        $this = $(this);
        $.ajax({
            url: baseLink+'directory/listings/publish',
            type: 'post',
            data: { 'published': $(this).attr('data-val') ==0 ? 1 : 0,'id': $(this).attr('data-id') },
            beforeSend: function(xhr){
                $this.html('Please Wait, saving');
            },
            success: function(result){
                const response = $.parseJSON(result);
                if(response.code === 401){
                    alertify.message(response.message);
                }else{
                    alertify.message(response.message);
                    $this.attr('data-val', response.data);
                }
                
                $this.html('Publish listing');
            }
        });
    });

    $(document).on('keyup', 'input#param', function(e){
        e.preventDefault();
        $this = $(this);
        if($this.val().length === 0){
            return false;
        }

        $.ajax({
            url: baseLink+'directory/listings/search',
            type: 'post',
            data: { 'param': $(this).val() },
            beforeSend: function(xhr){
                // $this.html('Please Wait, saving');
            },
            success: function(result){
                const response = $.parseJSON(result);
                if(response.code === 401){
                    alertify.message(response.message);
                }else{
                    console.log(response)
                    // $this.attr('data-val', response.data);
                }
                
                // $this.html('Publish listing');
            }
        });
    })
});