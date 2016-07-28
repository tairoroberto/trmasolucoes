@extends('layouts.app')

@section('content')
    <!--Avatar Content-->
    <div class="row">
        <div class="col s12 m12 l12">
            <p class="header">Usuários</p>
        </div>

        @if (count($errors) > 0)
            <div id="card-alert" class="card red ">
                @foreach ($errors->all() as $error)
                    <div class="card-content white-text">
                        <p>{{ $error }}</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&nbsp;×</span>
                    </button>
                @endforeach
            </div>
        @endif
        @if(session('success'))
            <br>
            <br>
            <div id="card-alert" class="card green " style="overflow:visible; height: 60px">
                <div class="card-content white-text">
                    <p>{{ session('success') }}</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&nbsp;×</span>
                </button>
            </div>
        @endif

        <div class="col s12 m12 l12">
            <table id="data-table-users" class="display hoverable" style="border: 0;" cellspacing="0">
                <thead>
                <tr>
                    <th></th>
                </tr>
                </thead>
            </table>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript">
        $(function() {
            $('#data-table-users').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{{ route("user.datatables") }}',
                columns: [
                    {data: 'details', name: 'details'}
                ],
                oLanguage: {
                    oAria: {
                        sSortAscending: ": activate to sort column ascending",
                        sSortDescending: ": activate to sort column descending"
                    },
                    oPaginate: {sFirst: "Anterior", sLast: "Último", sNext: "Próximo", sPrevious: "Anterior"},
                    sEmptyTable: "Nenhum registro encontrado",
                    sInfo: "Mostrando _START_ de _END_ para _TOTAL_ registros",
                    sInfoEmpty: "Mostrando 0 de 0 para 0 registros",
                    sInfoFiltered: "(filtrado de _MAX_ registros)",
                    sInfoPostFix: "",
                    sDecimal: "",
                    sThousands: ",",
                    sLengthMenu: "Mostrando _MENU_ registros",
                    sLoadingRecords: "Carregando...",
                    sProcessing: "Carregando...",
                    sSearch: "Buscar:",
                    sSearchPlaceholder: "",
                    sUrl: "",
                    sZeroRecords: "Nenhum registro encontrado"
                }

            });
        });

        $("#float-action-button").css('display', 'none');
    </script>
@stop