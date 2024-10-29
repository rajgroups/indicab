@extends('layouts.admin.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Home /
                                    <strong class="text-primary small">Faq /
                                        <strong class="text-primary small">list/
                                        </strong>
                                </h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <!-- Show Authenticated User ID -->
                                        <li>User ID: <span class="text-base">{{ Auth::guard('admin')->user()->id }}</span></li>

                                        <!-- Show Authenticated User Created Date -->
                                        <li>Created Date: <span class="text-base">{{ Auth::guard('admin')->user()->created_at->format('d M, Y h:i A') }}</span></li>

                                        <!-- Example Last Login (Optional) -->
                                        <!-- Assuming you are tracking the last login in your database -->
                                        <li>Last Login: <span class="text-base">{{ Auth::guard('admin')->user()->last_login ? Auth::guard('admin')->user()->last_login->format('d M, Y h:i A') : 'N/A' }}</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.faq.create') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                                    <em class="icon ni ni-plus"></em>
                                    <span>Create</span></a><a href="{{ route('admin.faq.create') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-plus"></em></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Display validation errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <table class="datatable-init-export nowrap table dataTable no-footer dtr-inline"
                                    data-export-title="Export" id="DataTables_Table_2"
                                    aria-describedby="DataTables_Table_2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 40.0469px;">SL.</th>
                                            <th class="sorting" tabindex="0" aria-controls="supplierList" rowspan="1"
                                                colspan="1" style="width: 162.609px;">qustion</th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 101.891px;">Status</th>
                                            <th width="50px;" class="sorting" tabindex="0" aria-controls="supplierList"
                                                rowspan="1" colspan="1" style="width: 50px;">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($faqs as $faq)
                                        <tr class="odd">
                                            <td>{{ $faq->id }}</td>
                                            <td>{{ $faq->qustion }}</td>
                                            <td>
                                                @if($faq->status == 'active')
                                                <span class="badge bg-success">Active</span>
                                                @elseif ($service->status == 'inactive')
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td class="d-flex">
                                                    {{-- <a href="{{ route('admin.category.show',$category->id) }}"><i class="fa fa-eye p-2"></i></a> --}}
                                                    <a href="{{ route('admin.testimonial.edit',$faq->id) }}"><i class="fa fa-pencil p-2"></i></a>
                                                   <!-- Delete Button with Confirmation Alert -->   
                                                    <form action="{{ route('admin.testimonial.destroy', $faq->id) }}" method="POST" onsubmit="return confirmDelete()">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash p-0 m-0"></i>
                                                        </button>
                                                    </form>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this category?');
    }
</script>
@endpush
