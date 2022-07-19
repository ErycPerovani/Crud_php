$("#bt_prod").on("click",function(){
    var input_prod = $("#prod").val();
    var input_valor = $("#valor").val();

    $.ajax({
        url: "../crud/create.php",
        type: "post",
        data:{
            produto: input_prod,
            valor: input_valor
        },
        beforeSend : function(){
            $("#resposta").html("Enviando!");
        }
    }).done(function(r){
        $("#resposta").html("Prodto cadstrado com sucesso!");
    })
})
$("#bt_atualizar").on("click", function(){
    var input_prod = $("#prod").val();
    var input_valor = $("#valor").val();

    $.ajax({
        url: "../crud/update.php",
        type: "post",
        data:{
            produto: input_prod,
            valor: input_valor
        },
        beforeSend : function(){
            $("#resposta").html("Enviando!");
        }
    }).done(function(r){
        $("#resposta").html("Atualizado com sucesso!");
    })
})