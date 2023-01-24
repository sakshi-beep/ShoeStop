const userSignup=()=> {
  event.preventDefault();
  let fullname = jQuery("#fullname-input").val();
  let email = jQuery("#email-input").val();
  let password = jQuery("#password-input").val();

  if (fullname == "" || password == "" || email == "") {
    if (password == "" && email == "" && fullname == "") {
      fullnameValidation();
      emailValidation();
      passwordValidation();
      return;
    }
    if (fullname == "") {
      fullnameValidation();
    }

    if (email == "") {
      emailValidation();
    }

    if (password == "") {
      passwordValidation();
    }

    if (fullname == "" && email == "") {
      fullnameValidation();
      emailValidation();
    }

    if (email == "" && password == "") {
      emailValidation();
      passwordValidation();
    }

    if (fullname == "" && password == "") {
      fullnameValidation();
      passwordValidation();
    }
    return;
  }
  $.post(
    "../helpers/customerRegistration.php",
    {
      fullname: fullname,
      email: email,
      password: password,
    },
    (result)=> {
      if (result == "Email already exists !") {
        $("#errormessage").show();
        $("#errormessage").html(result);
        $("#errormessage").css("color", "red", "padding", "20px");
        setTimeout(() => {
          $("#errormessage").hide();
        }, 2800);
        return;
      } else{
        $("#successmessage").css("color", "green", "padding", "20px");
        $("#successmessage").show();

        $("#successmessage").html(result);
        setTimeout(() => {
          $("#successmessage").hide();
        }, 2700);
        window.location.href = "../screens/login.php";
      }
    }
  );
}

const toggleVisibility=()=> {
  let passwordEvent = document.getElementById("password-input");
  passwordEvent.addEventListener("input",  ()=> {
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

const fullnameValidation =()=> {
  document.getElementById("fullname-input").style.borderColor = "red";
  document.getElementById("required-fullname").innerHTML =
    "fullname is required";
  document.getElementById("required-fullname").style.display = "block";
  setTimeout(()=> {
    document.getElementById("required-fullname").style.display = "none";
    document.getElementById("fullname-input").style.borderColor = "#615c5c";
  }, 2000);
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
