@extends('template')

@section('title', '| Utilisateurs')

@section('content')
	@if(isset($users[1]))
		<button type="button" id="btn-clck1" class='btn btn-primary' style="width: 30%">Etudiants</button>
		<br/>
		<button type="button" id="btn-clck2" class='btn btn-primary' style="width: 30%">Membres BDE</button>
		<br/>
		<button type="button" id="btn-clck3" class='btn btn-primary' style="width: 30%">Tuteurs CESI</button>
		<br/>
        <button type="button" id="btn-clck4" class='btn btn-primary' style="width: 30%">Voir tout</button>
        <br/>

		<div id="easyPaginate">
			@include('listeUtilisateurs')
		</div>

		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="{{asset('js/jquery.easyPaginate.js')}}"></script>
		<script>
			$('#easyPaginate').easyPaginate({
				paginateElement: 'div',
				elementsPerPage: 5,
				effect: 'climb'
			});
		</script>
	@else
		@include('listeUtilisateurs')
	@endif
@endsection

@section('scripts')
	<script>
        $(document).ready(function() {
            function filter(e) {
                $.ajax({
                    type: 'POST',
                    url: '/administration/users?ajaxid=4',
                    data: {
                        filterParameter: e.data.filterParam
                    },
                    success: function (data) {
                        $('.easyPaginateNav').remove();
                        $("#easyPaginate").html(data);
                        $('#easyPaginate').easyPaginate({
                            paginateElement: 'div',
                            elementsPerPage: 5,
                            effect: 'climb'
                        });
                    },
                    error: function (data, textStatus, errorThrown) {
                        console.log(e.data.filterParam);
                        console.log(data);
                        console.log(errorThrown);
                    },
                });
            }

            $("#btn-clck1").bind("click", {filterParam: "students"}, filter);
            $("#btn-clck2").bind("click", {filterParam: "members"}, filter);
            $("#btn-clck3").bind("click", {filterParam: "employees"}, filter);
            $("#btn-clck4").bind("click", {filterParam: "all"}, filter);
        });
	</script>
@endsection
