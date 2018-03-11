
$(document).ready(function() {

    $('#lista-usuarios').DataTable( {
        processing: true,
        serverSide: true,
        ajax: 'usuarios/listar-usuarios',

        columns: [
            { data: 'name' },
            { data: 'email' },
            { data: 'status' },
        ],
        
        "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            }
            //LISTAR USUÁRIOS NO DATATABLE
    } );

     $(document).on('click', '.btnAddUser', function() {

        $('.print-error-msg').hide();
        $('#modalAddForn .id').val('');
        $('#modalAddForn .nome').val('');
        $('#modalAddForn .cnpj').val('');
        $('#modalAddForn .cep').val('');
        $('#modalAddForn .endereco').val('');
        
       
        $('#modalAddUser').modal('show');
    });
    
    

   function printErrorMsg() {
        $( ".print-msg" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
        $(".print-msg").find("ul").html('');
        $(".print-msg").css('display','block');
        $(".print-msg").find("ul").append('<li> Fornecedor Deletado Com Sucesso </li>');
    }
    
    $(document).ready(function(){
          $('#department_id').select2();

       });
    $(document).ready(function(){
          $('#company_id').select2();
          
       });
} );