$("ul.aprobacion").click(function (e) {
    e.preventDefault(); // prevent default submit behaviour
    var target = $(e.target);
    // get values from FORM
    if(target.is("button")){
        var accion = target.text();
        var index = target.parent().prev().find('h4.badge').text();
        indexInt = parseInt(index);
        console.log(accion, indexInt);
        $.ajax({
            url: "./demanda/api/reclamo.php",
            type: "POST",
            data: {
                accion: accion,
                id: indexInt
            },
            success: function(data) {
                // Success message
                console.log(data);
                
            },
            error: function(data) {
                // Fail message
                console.log(data);
            },
        });
    }
});