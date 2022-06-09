@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Lista de Matrículas</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="register-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Telefone</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Telefone</th>
              <th>Ações</th>
            </tr>
          </tfoot>
          <tbody>


                <tr>
                    <td>122</td>
                    <td>Maria Francisca</td>
                    <td>(88) 9999-99999</td>

                    <td>
                    {{-- <form method="POST" action="">
                      @csrf
                      @method('delete')
                          <button class="btn btn-danger btn-sm dltBtn" data-id= style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td> --}}
                </tr>

          </tbody>
        </table>
        <span style="float:right"></span>

      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
      .zoom {
        transition: transform .2s; /* Animation */
      }

      .zoom:hover {
        transform: scale(5);
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('backend/js/deleteItem.js')}}"></script>

  <script>

      $('#register-dataTable').DataTable( {
            responsive: true,
            "order": [[0,"desc"]],
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[10]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){

        }
  </script>
@endpush
