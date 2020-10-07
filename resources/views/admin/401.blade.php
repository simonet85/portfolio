@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <form class="was-validated">
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                      <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                      <div class="invalid-feedback">Example invalid feedback text</div>
                    </div>
                  
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                      <div class="invalid-feedback">More example invalid feedback text</div>
                    </div>
                  
                    <div class="form-group">
                      <select class="custom-select" required>
                        <option value="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                  
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</main>
 @endsection