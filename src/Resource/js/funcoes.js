function ValidarCampos(formID)
{
    
    let ret = true;

    $("#" + formID + " input, #" + formID + " select, #" + formID + " textarea").each(function()
    {

        if($(this).hasClass("obg"))
        {

            if($(this).val() == "")
            {
                ret = false;
                $(this).addClass("is-invalid");

            }
            else
            {
                $(this).removeClass("is-invalid").addClass("is-valid");
            }

        }

    });

    if(!ret)
        MostrarMensagem(0);

    return ret;
}

function HabilitaItensCardapio()
{
    document.addEventListener("DOMContentLoaded", function(){

        const data = document.getElementById("data");
        const itensDiv = document.getElementById("itensDiv");

        data.addEventListener("change", function(){

            const dataSelecionada = new Date(this.value);
            const dataLimite = new Date("2023-12-31");

            if(dataSelecionada <= dataLimite) 
            {
                itensDiv.style.display = "block";
            }else
            {
                itens.style.display = "none";
            }

        });

        });
}

