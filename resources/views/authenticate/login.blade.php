<x-layout>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/authenticate/custom.css')}}">

    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-up">
                        <form method="POST" class="registerForm" action="/register">
                            @csrf
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="text" placeholder="Username" name="name" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="email" placeholder="Email" name="email" required>
                            </div>

                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="text" placeholder="Address" name="address" required>
                            </div>

                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="number" placeholder="number" name="number" required>
                            </div>

                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="number" placeholder="Contact Person number" name="contact_person" required>
                            </div>

                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" placeholder="Confirm password" name="password_confirmation"
                                    required>
                            </div>
                            <button  class="registerButton" type="submit">
                                Sign up
                            </button>
                        </form>
                        <p>
                            <span>
                                Already have an account?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Sign in here
                            </b>
                        </p>
                    </div>
                </div>

            </div>
            <!-- END SIGN UP -->
            <!-- SIGN IN -->
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">
                        <form method="post" action="/login">
                            @csrf
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="email" placeholder="email" name="email" value="admin@gmail.com">
                                <x-form_error for="email"></x-form_error>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" placeholder="Password" name="password" value="admin">
                                <x-form_error for="password"></x-form_error>
                            </div>
                            <button type='submit'>
                                Sign in
                            </button>
                            <form>
                                <p>
                                    <b>
                                        Forgot password?
                                    </b>
                                </p>
                                <p>
                                    <span>
                                        Don't have an account?
                                    </span>
                                    <b onclick="toggle()" class="pointer">
                                        Sign up here
                                    </b>
                                </p>
                    </div>
                </div>
                <div class="form-wrapper">

                </div>
            </div>
            <!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->
        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>
                        Welcome
                    </h2>

                </div>
                <div class="img sign-in">

                </div>
            </div>
            <!-- END SIGN IN CONTENT -->
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up">

                </div>
                <div class="text sign-up">
                    <h2>
                        Join with us
                    </h2>

                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->
    </div>

</x-layout>

<script src="{{ asset('js/landing_page/jquery-3.4.1.min.js') }} "></script>
<script>
    let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
  
  
  $('.registerButton').on("click", function(event) {
     event.preventDefault();
  
      const actionUrl = $(this).closest(".registerForm").attr('action'); 
      const formData = $(this).closest(".registerForm").serialize();
  
      console.log("Submitting form data:", formData); // Debugging, remove in production
  
     update(actionUrl, formData);
  });
  
  
  function update(actionUrl, formData) {
      $.ajax({
          url: actionUrl,
          method: 'POST',
          data: formData,
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          },
          success: function(response) {
                  ja({
                      type: "success",
                      animation: "rotateX",
                      html: "<b style='font-size: 30px;'>Great!!</b><br>Task was Assigned Successfully.",
                      continueButtonHtml: "Got it!",
                   });
  
                   $(".ja-continue").on("click", function(){
                      
                      window.location.href = "/client-show/" + response.message;
                   })
  
                  
          },
          error: function(xhr, status, error) {
              // Handle error
              console.error("Error:", error.responseText);
                  ja({
                      type: "error",
                      animation: "rotateX",
                      html: "<b style='font-size: 30px;'>Error..!!</b><br> Please ensure your password meets the minimum requirements: <br> Fill out all forms <br> at least 8 characters,<br> including both uppercase <br> i and lowercase letters.",
                      continueButtonHtml: "Got it!",
                   });
          },
      });
  }
  });
</script>