{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div style="padding: 10px;" class="panel-header"> <h1> Dashboard </h1> 
						<button class="btn btn-primary btnAddUser"> Cadastrar Usuário </button>
					</div>
					
						<div class="panel-body">
						    <table id="lista-usuarios" class="table table-bordered table-hover">
						        <thead>
							        <tr>
							          <th>Nome</th>
							          <th>Email</th>
							          <th>Status</th>
 									</tr>
						        </thead>

						       	<tfoot>
							        <tr>
							          <th>Nome</th>
							          <th>Email</th>
							          <th>Status</th>
									</tr>
						        </tfoot>
						  	</table>
					 	</div>
				</div>
			</div>
		</div>
	</div>



<div id="modalAddUser" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastrar Usuário</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <div class="container-fluid"> 
                	<div class="row">       
                		<div class="col-md-12"> 
		                	{!! Form::open(['url' => 'usuarios/cadastrar', 'method' => 'post']) !!}
		    					<div class="row">
		    						<div class="col-md-6">
			    						<div class="form-group">
			                                {{ Form::label('name', 'Nome Completo') }}
			                                
			                        	</div>
			                        </div>
		    					</div>
							{!! Form::close() !!}
		                        
		                       
		                    <br>                        
		                    <div class="modal-footer">                                                                       
		                        <button type="submit" class="btn btn-success  actionBtn" id="addforn">
		                            <span id="footer_action_button" class='fa fa-check'> Lançar </span >
		                        </button>                                    
		                        <button type="button" class="btn btn-warning" data-dismiss="modal">
		                            <span class='fa fa-close'></span> Fechar
		                        </button>
		                    
		                	</div> 
		                </div>
	                </div>                              
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    
@stop

@section('js')
    <script src="{{ asset('js/users/users.js') }}"></script>

@stop