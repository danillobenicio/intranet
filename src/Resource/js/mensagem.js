function MostrarMensagem(ret)
{
    switch (ret)
    {
        case -1:
            toastr.error('Ocorreu um erro na operação!');
            break;
        case 0:
            toastr.warning('Preencher os campos obrigatórios!');
            break;
        case 1:
            toastr.success('Cadastrado com sucesso!');
            break;
        case 2:
            toastr.warning('Data não permitida!');
            break;
        case 3:
            toastr.success('Alterado com sucesso!');
            break;
    }
}