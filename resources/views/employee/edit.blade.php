@extends('main')

@section('title', 'PPO-ARKA')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Employee</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Data Employee</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('employees') }}" class="btn btn-success btnsm">
                        <i class="fa fa-undo"></i>Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('employees/'.$employee->id) }}" method="post">
                                @method('PUT')    
                                @csrf
                                    <div class="form-group">
                                        <label for="">NIK</label>
                                            <input type="text" name="nik" value="{{ old('nik', $employee->nik) }}" class="form-control @error('nik') is-invalid @enderror" autofocus>
                                        @error('nik')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Employee Name</label>
                                            <input type="text" name="employee_name" value="{{ old('employee_name', $employee->employee_name) }}" class="form-control @error('employee_name') is-invalid @enderror" autofocus>
                                         @error('employee_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                     </div>
                                     <div class="form-group">
                                        <label for="">Project Name</label>
                                            <select name="project_id" class="form-control @error('project_id') is-invalid @enderror">
                                                <option value="">- Select -</option>
                                                @foreach ($projects as $item)
                                                    <option value="{{ $item->id }}" {{ old('project_id', $employee->project_id ) == $item->id ? 'selected' : null }}>{{ $item->name_project }}</option> 
                                                @endforeach     
                                            </select>
                                            @error('project_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                    </div>
                                

                                <button type="submit" class="btn btn-success">Save

                                </button>
                            </form>

                        </div>

                    </div>
                
            </div>
        </div>
        
        
    </div>
</div>
@endsection




