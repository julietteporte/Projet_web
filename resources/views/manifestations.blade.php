@extends('template')

@section('title', '| Manifestations')

@section('content')
	@if(isset($events[1]))
	<div class="text-center">
		<button type="button" id="btn-clck1" class='btn btn-primary' style="width: 20%">Boite à idée</button>
		<button type="button" id="btn-clck2" class='btn btn-primary' style="width: 20%">Desactives</button>
		<button type="button" id="btn-clck3" class='btn btn-primary' style="width: 20%">Actives</button>
        <button type="button" id="btn-clck4" class='btn btn-primary' style="width: 20%">Voir tout</button>
</div>
		<div id="easyPaginate">
			@include('listeManifestations')
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
		@include('listeManifestations')
	@endif
@endsection

@section('scripts')
	<script>
        $(document).ready(function() {
            function filter(e) {
                $.ajax({
                    type: 'POST',
                    url: '/administration/events?ajaxid=4',
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

            $("#btn-clck1").bind("click", {filterParam: "idea"}, filter);
            $("#btn-clck2").bind("click", {filterParam: "inactive"}, filter);
            $("#btn-clck3").bind("click", {filterParam: "active"}, filter);
            $("#btn-clck4").bind("click", {filterParam: "all"}, filter);
        });
	</script>
@endsection
