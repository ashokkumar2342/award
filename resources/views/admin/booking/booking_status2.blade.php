@extends('admin.layout.base')
@push('links')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">    
@endpush
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div>
        <div class="card">
            <div class="card-body"> 
                <div class="table-responsive">
                     @if (count($bookings)>0)
                     <table class="table table-bordered" id="example">
                        <thead style="background-color: #605f6a;color: #fff">
                            @php
                               $datas=json_decode($bookings[0]->json); 
                            @endphp
                            <tr> 
                                @foreach ($datas as $key=>$data)
                                   <th>{!! str_replace('_', ' ', $key) !!}</th>
                                @endforeach
                                <th>Status</th>
                                  @if ($user->role_id==1)
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $rr_list)
                                @php
                                    if($rr_list->status==0){
                                        $color='bg-warning';
                                        $status='Pending';
                                    }elseif($rr_list->status==1){
                                        $color='bg-success';
                                        $status='Approved';
                                    }elseif($rr_list->status==2){
                                        $color='bg-danger';
                                        $status='Reject';
                                    }
                                     $datas=json_decode($rr_list->json);
                                @endphp
                                <tr>
                                    @foreach ($datas as $key=>$data)
                                       <td>{{ $data }}</td>
                                    @endforeach

                                    
                                    
                                    
                                    <td class="{{$color}}">{{$status}}</td>
                                     @if ($user->role_id==1)
                                        <td>
                                            <a href="{{ route('admin.booking.approve',$rr_list->id) }}" title="" class="btn btn-success btn-sm">Approve</a>
                                            <a href="{{ route('admin.booking.reject',$rr_list->id) }}" title="" class="btn btn-danger btn-sm">Reject</a>
                                        </td>
                                    @endif
                                     
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                     @endif
                    
                </div>
            </div>
        </div> 
    </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.html5.min.js"></script>
<script type='text/javascript' src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "ordering": false,
        'paging':   false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]

    } );
} );
   </script>
</script> 
@endpush

