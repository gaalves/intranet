
$(document).ready(function() {

    $('#lista-usuarios').DataTable( {
        processing: true,
        serverSide: true,
        ajax: 'ControleAcesso/ListarControleAcesso',

        columns: [
            { data: 'name', name: 'name'},
            { data: 'email', name: 'email'},
            { data: 'status', name: 'status'},
            { data: 'departments.title', name: 'departments.title'},
            { data: 'roles', name: 'roles.name'}



        ],
        /*
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
        }
        //LISTAR USUÁRIOS NO DATATABLE*/
    } );



    function printErrorMsg() {
        $( ".print-msg" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
        $(".print-msg").find("ul").html('');
        $(".print-msg").css('display','block');
        $(".print-msg").find("ul").append('<li> Fornecedor Deletado Com Sucesso </li>');
    }
/*
    $(document).ready(function(){
        $('#department_id').select2();

    });
    $(document).ready(function(){
        $('#company_id').select2();

    });
    */
} );