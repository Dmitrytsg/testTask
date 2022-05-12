
const setUserList = (function() {
    $.ajax({
        type : "POST",
        url : "assets/php/getUsers.php",
        dataType : "json",
        success: (a) => {
            $('#table-body').text("");
            for(let i = 0; i < (a).length ; ++i){
                row = "";
                row += "<tr>";
                
                row += "<td>" + a[i][0] +"</td>";
                row += "<td>" + a[i][1] + "</td>";
                row += "<td>" + a[i][3] + "</td>";
                row += "<td>" + a[i][4] + "</td>";
                row += "<td>" + a[i][5] + "</td>";
                
                row += "</tr>"
                $('#table-body').append(row);
            }
        },
        
        error: function() {
            console.log("DB Error");
        }
    });
})();

