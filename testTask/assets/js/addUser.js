document.getElementById('addUser').addEventListener("click",(e) => {
    e.preventDefault();
    let login = document.getElementById('login').value;
    let password = document.getElementById('password').value;
    let name = document.getElementById('name').value;
    let surname = document.getElementById('surname').value;
    let age = document.getElementById('age').value;
    if(login == '' || password == '' || name == '' || surname == '' || age == '') {
        $('.alert').css("display", "block");
        $('.alert').text("Введены неверные данные");
        $('.form-control').addClass("is-invalid");
    } 
    else if (isNaN(age)) {
        $('.age').addClass("is-invalid");
        $('.alert').css("display", "block");
        $('.alert').text("Введены неверные данные");
    }
    else {
        $.ajax({
            type : "POST",
            url : "assets/php/addUser.php",
            dataType : "json",
            data : {
                login    : login,
                password : password,
                name     : name,
                surname  : surname,
                age      : age,
            },
            success: (a) => {
                
                if(a.flag) {
                    document.location.href = '/account.php';
                }
                else {
                    $('.login').addClass("is-invalid");
                    $('.alert').css("display", "block");
                    $('.alert').text("Такой логин уже существует");
                }
            },
            error: function() {
                alert("Ошибка создания пользователя");
            }
        });
    }
});

document.getElementById('login').addEventListener("click",(e) => {
    $('.alert').css("display", "none");
    $('.form-control').removeClass("is-invalid");
});
document.getElementById('password').addEventListener("click",(e) => {
    $('.alert').css("display", "none");
    $('.form-control').removeClass("is-invalid");
});
document.getElementById('name').addEventListener("click",(e) => {
    $('.alert').css("display", "none");
    $('.form-control').removeClass("is-invalid");
});
document.getElementById('surname').addEventListener("click",(e) => {
    $('.alert').css("display", "none");
    $('.form-control').removeClass("is-invalid");
});
document.getElementById('age').addEventListener("click",(e) => {
    $('.alert').css("display", "none");
    $('.form-control').removeClass("is-invalid");
});
