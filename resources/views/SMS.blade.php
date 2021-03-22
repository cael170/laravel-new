@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS Portal With Twilio</title>
    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Add Phone Number
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Enter Phone Number</label>
                                    <input type="tel" class="form-control" name="phone_number" placeholder="Enter Phone Number">
                                </div>

                         
                                <button type="submit" class="btn btn-primary">Register User</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Send SMS Message or Call Number
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/custom">
                                @csrf
                                <div class="form-group">
                                    <label>Select users to notify</label>
                                   
                                     <select name="users[]" multiple class="form-control">                               

                                            @foreach ($users as $user)    <option>
                                            {{$user->phone_number}} 
                                            @endforeach     
                                            </option> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Notification Message</label>
                                    <textarea name="body" class="form-control" rows="3"></textarea>
                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Send Notification</button>                                <a href="/chart" class="btn btn-primary" role="button" aria-pressed="true">Chart Registered Users</a>


                                
                            </form>
                        </head>
                        <body>
                        
                        </div>
                        <form method="post" action="{{ route('initiate_call') }}">
                            @csrf
                            @if ($errors->any())
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                            @endif 

                            <br>
                              <div class="form-group col-12">
                                <label>Call Number</label>

                                <input type="text" class="form-control" name="phone_number" id="phoneNumber" aria-describedby="phoneHelp" placeholder="Example, +18005551212" required>
                                <small id="phoneHelp" class="form-text text-muted">Phone number should match <code>[+][country code][phone number including area code]</code></small>
                                
                              </div>
                              
                              <button type="submit" class="btn btn-primary btn-block">Call</button>   
                              <a href="/index" class="btn btn-primary btn-block" role="button" aria-pressed="true">Call from Browser</a>
                            </div>
                          </form>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
@endsection




    


 

