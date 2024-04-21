@extends('admin.layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row-fluid">
      @include('admin.sidebar')

      <div class="span9" id="">
        <div class="row-fluid">
          <!-- block -->
          <form action="{{route('admin.documents.upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="control-group">
              <p>
              <div class="controls">
                <p>
                    <input type="text" class="input focused" name="name" autofocus placeholder="File Name/ Meeting">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                           <p style="color: red">{{ $message }}</p>
                        </span>
                    @enderror
                </p>
              </div>
            </div>
            <div class="control-group">
              <p>
              <div class="controls">
                <p>
                    <input type="file" class="input focused" name="document" autofocus>
                    @error('document')
                        <span class="invalid-feedback" role="alert">
                           <p style="color: red">{{ $message }}</p>
                        </span>
                    @enderror
                </p>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="background-color: blue;">Upload document</button>
          </form>
          @if (session('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>{{ session('success') }}</strong>
                </div>
          @endif
          <div id="block_bg" class="block">
            <div class="navbar navbar-inner block-header">
              <div class="muted pull-left"></i><i class="icon-book"></i> Meeting meets and Reports</div>
              <div class="muted pull-right">
                <span class="badge badge-info"></span>
              </div>
            </div>
            <div class="block-content collapse in">


              <div style="display: ; font-size:large; " style="font-weight:bold;" class="span20" id="printableArea">
                <div class="empty">
                </div>
                <table cellpadding="0" cellspacing="0" border="1" class="table" tyle="width:100%" id="example">
                  <thead>
                    <tr>
                      <th>Document Name</th>
                      <th> Uploaded By</th>
                      <th style="margin-right:16; margin-left:8; padding-left:16"> Date </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($documents as $document)
                    <tr>
                      <td>
                        <span class="card-text">{{$document->name}} </span><br>

                      </td>
                      <td style="text-align: center;">
                        {{$document->user->name}}
                      </td>
                      <td style="text-align: center;">{{date_format($document->created_at,"d/m/Y")}}</td>
                      <td><a href="{{Storage::url($document->document)}}" class="btn btn-primary btn-lg" download="{{$document->name}}">Download</a> 
                        @if ($document->user->is(auth()->user()))
                            <a href="{{Storage::url($document->document)}}" class="btn btn-danger btn-lg" download="{{$document->name}}">Delete</a>
                        @endif
                      </td>
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
  </div>
@endsection