function CarregarSetor(id, setor)
{
    $("#setor_alterar").val(setor);
    $("#id_alterar").val(id);

}

function CarregarFilial(id, filial, cod_atak)
{
    $("#filial_alterar").val(filial);
    $("#cod_atak_alterar").val(cod_atak);
    $("#id_alterar").val(id);
}

function CarregarContato(id, nome, email, ramal, fk_setor, fk_local)
{
    $("#nome_alterar").val(nome);
    $("#email_alterar").val(email);
    $("#ramal_alterar").val(ramal);
    $("#setor_alterar").val(fk_setor);
    $("#local_alterar").val(fk_local);
    $("#id_alterar").val(id);
}