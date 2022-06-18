@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-2">
           
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Greeting response</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" method="post" action="{{route('admin.greeting_response.store')}}">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label">Option</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control @error('option') is-invalid  @enderror" name="option" placeholder="option Number">
                        @error('option')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-md-12">
                        <label for="" class="col-sm-4 col-form-label">Greeting_id </label>
                        <div class="input-group mb-3 col-12">  
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-cog"></i></span>
                        </div>
                        <select class="form-control @error('greetings_id') is-invalid  @enderror" name="greetings_id" >
                              <option value="">Choose a greeting question</option>
                          @foreach ($greetings as $greeting)
                              <option value="{{ $greeting->id}}">{{ $greeting->question}}</option>             
                          @endforeach
                        </select>

                        @error('greeting_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                      </div>

                    
                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">greeting response</label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('response') is-invalid  @enderror" name="response" placeholder="response">
                     @error('response') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
                  </div>

                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">English Translation</label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('trans_eng') is-invalid  @enderror" name="trans_eng" placeholder="trans_eng">
                     @error('trans_eng') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
                  </div>

                  <div class="col-md-12">
                    <label for="" class="col-sm-4 col-form-label">Arabic Translation</label>
                    <div class="input-group mb-3 col-12">  
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                    </div>
                    <input type="text" class="form-control @error('trans_ar') is-invalid  @enderror" name="trans_ar" placeholder="trans_ar">
                     @error('trans_ar') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>   
                  </div>
                        
                    </div>
                 
                  
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Add</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>


        </div>
      </div>
    </div>
</section>

  @endsection