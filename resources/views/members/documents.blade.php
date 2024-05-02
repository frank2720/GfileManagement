@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row-fluid">
      @include('members.sidebar')

      <div class="span9" id="">
        <div class="row-fluid">
          <!-- block -->
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
                      <th>Action</th>
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
                      <td><a href="{{Storage::url($document->document)}}" class="btn btn-primary btn-lg" download="{{$document->name}}">Download</a></td>
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