<form id="enquiry_form">
    <?php wp_nonce_field('wp_rest');?>
    <label>Name</label><br/>
    <input type="text" name="name"><br/><br/>
    <label>Email</label><br/>
    <input type="text" name="email"><br/><br/>
    <label>Phone</label><br/>
    <input type="text" name="phone"><br/><br/>
    <label>Your Message</label><br/>
    <textarea name="message"></textarea><br/><br/>

    <button type="submit" >Submit Form</button>
</form>

<script>
    jQuery(document).ready(function($){

        $('#enquiry_form').submit(function(event){
            event.preventDefault();

            var form = $(this);
            console.log(form.serialize());
            $.ajax({

                type: "POST",
                url: "<?php echo get_rest_url(null, 'v1/contact-form/submit');?> ",
                data: form.serialize()


            });
        });

    });
    </script>