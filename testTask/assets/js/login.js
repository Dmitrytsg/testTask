document.getElementById('auth').addEventListener("click",(e) => {
    e.preventDefault();
    let login = document.getElementById('login').value;
    let password = document.getElementById('password').value;
    $.ajax({
        type : "POST",
        url : "assets/php/login.php",
        dataType : "json",
        data : {
            login    : login,
            password : password,
        },
        success: (a) => {
            console.log(a);
            if(a.flag) {
                document.location.href = '/account.php';
            }
            else {
                $('.alert').css("display", "block");
                $('.alert').text("Введены неверные данные");
                $('.form-control').addClass("is-invalid");
            }
        },
        // error: function(xhr) {
        //     console.log(xhr.responseText);
        // }
        error: function() {
            alert("Ошибка входа");
        }
    });
});

document.getElementById('login').addEventListener("click",(e) => {
    $('.alert').css("display", "none");
});

document.getElementById('password').addEventListener("click",(e) => {
    $('.alert').css("display", "none");
});