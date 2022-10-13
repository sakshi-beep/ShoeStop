const userLogin=()=> {
  event.preventDefault();
  let email = jQuery("#email-input").val();
  let password = jQuery("#password-input").val();

if(password =='' || email==''){

  if(password=='' && email==''){
    emailValidation();
    passwordValidation();
    return;
  }
  password == '' ? passwordValidation():emailValidation();
return;
}

  $.post(
    "../helpers/customerLogin.php",
    {
      email: email,
      password: password,
    },
    (result)=> {
      if (result == "login successfull") {
        $("#successmessage").css("color", "green");
        $("#successmessage").show();

        $("#successmessage").html(result);
        setTimeout(() => {
          $("#successmessage").hide();
        }, 2800);
        window.location.href = "../index.php";
      } else {
        $("#errormessage").css("color", "rgb(214, 30, 30");

        $("#errormessage").show();

        $("#errormessage").html(result);
        setTimeout(() => {
          $("#errormessage").hide();
        }, 2800);
      }
    }
  );
}


const toggleVisibility=()=> {
  let passwordEvent = document.getElementById("password-input");
  passwordEvent.addEventListener("input", function () {
    let inputValue = document.getElementById("password-input").value;
    while (inputValue.length < 1) {
      return false;
    }
    document.getElementById("btn-eye").style.display = "block";
  });
}

const togglePassword=()=> {
  event.preventDefault();
  let inputType = document.getElementById("password-input").type;
  if (inputType != "password") {
    document.getElementById("password-input").type = "password";
    document.getElementById("btn-eye").innerHTML = "Show";
  } else {
    document.getElementById("password-input").type = "text";
    document.getElementById("btn-eye").innerHTML = "Hide";
  }
}

const emailValidation=()=> {
  document.getElementById("email-input").style.borderColor = "red";
  document.getElementById("required-email").innerHTML = "email is required";
  document.getElementById("required-email").style.display = "block";
  setTimeout(()=> {
    document.getElementById("required-email").style.display = "none";
    document.getElementById("email-input").style.borderColor = "#615c5c";
  }, 2000);
}

const passwordValidation=()=> {
  document.getElementById("password-field").style.borderColor = "red";
  document.getElementById("required-password").style.display = "block";
  document.getElementById("required-password").innerHTML =
    "password is required";
  setTimeout(()=> {
    document.getElementById("required-password").style.display = "none";
    document.getElementById("password-field").style.borderColor = "#615c5c";
  }, 2000);
}
