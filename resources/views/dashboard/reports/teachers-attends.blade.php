@extends('dashboard.base')

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
              <div class="card">
                  <div class="card-header"> DataTables
                    <div class="card-header-actions">
                      
                    </div>
                  </div>
                  <div class="card-body">
                    {{$dataTable->table()}}

                  </div>
              </div>
            </div>
          </div>
      
@endsection

@section('javascript')
    {{$dataTable->scripts()}}
@endsection