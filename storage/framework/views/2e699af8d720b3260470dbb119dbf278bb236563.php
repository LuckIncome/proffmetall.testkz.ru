<link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.css')); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js"></script>
<script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>


<script>
$(document).ready(function(){
	
	$("#order_form").on('submit', function(event) {
	    event.preventDefault();
	    let form = $(this);
	    let action = form.attr("action");
	    let type = form.attr("method");
	    let _token = $('input[name="_token"]').val();
	    let headers = {
	          headers: {
	              'X-CSRF-TOKEN': _token,
	          },
	        };
	    let fd = new FormData(form[0]);
	    let $inputs = form.find("input, select, button, textarea");
	    axios.post(action, fd, headers).then(res => {
	        if (res.status === 200) {
	        	$('#application').modal('hide');
	          	//var path = window.location.hostname + '/thank_you_page';
	          	window.location.replace('/thank_you_page');
	        } 
	        $inputs.prop("disabled", false);
	        $inputs.val("");
	        $inputs.prop("checked",false);
        }).catch((error) => console.log(error.response.data));   
    });

	$("#question_form").on('submit', function(event) {
	    event.preventDefault();
	    let form = $(this);
	    let action = form.attr("action");
	    let type = form.attr("method");
	    let _token = $('input[name="_token"]').val();
	    let headers = {
	          headers: {
	              'X-CSRF-TOKEN': _token,
	          },
	        };
	    let fd = new FormData(form[0]);
	    let $inputs = form.find("input, select, button, textarea");
	    axios.post(action, fd, headers).then(res => {
	        if (res.status === 200) {
	          	window.location.replace('/thank_you_page');
	        } 
	        $inputs.prop("disabled", false);
	        $inputs.val("");
	        $inputs.prop("checked",false);
        }).catch((error) => console.log(error.response.data));   
    });

    $("#write_form").on('submit', function(event) {
	    event.preventDefault();
	    let form = $(this);
	    let action = form.attr("action");
	    let type = form.attr("method");
	    let _token = $('input[name="_token"]').val();
	    let headers = {
	          headers: {
	              'X-CSRF-TOKEN': _token,
	          },
	        };
	    let fd = new FormData(form[0]);
	    let $inputs = form.find("input, select, button, textarea");
	    axios.post(action, fd, headers).then(res => {
	        if (res.status === 200) {
	        	$('#message').modal('hide');
	          	window.location.replace('/thank_you_page');
	        } 
	        $inputs.prop("disabled", false);
	        $inputs.val("");
	        $inputs.prop("checked",false);
        }).catch((error) => console.log(error.response.data));   
    });

});

let token = document.head.querySelector('meta[name="csrf-token"]');
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
</script><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/partials/scripts.blade.php ENDPATH**/ ?>