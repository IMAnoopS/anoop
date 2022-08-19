<!doctype>
<html>
    <head>
        <style>
            .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
        </style>
    </head>
    <body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        
                        <h3>&nbsp;</h3>
                        <p>&nbsp;</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Create Employee</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @if (session()->has('errors'))
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
         @foreach ($errors->all() as $error)
        <ul>
           {{ $error }}
        </ul>
         @endforeach
    </div>
@endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">    
                                @csrf
                                    <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text"  name="firstName" class="form-control" placeholder="First Name" value="{{ old('firstName')}}"  required=""/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text"  name="lastName" class="form-control" placeholder="Last Name" value="{{ old('lastName')}}"  required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  name="phone" class="form-control" placeholder="Phone" value="{{ old('phone')}}"  required=""/>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email')}}" required=""/>
                                        </div>
                                         <div class="form-group">
                                             <select name="company_id" class="form-control">
                                                <option class="hidden"  selected disabled>Select Company</option>
                                                @foreach($companies as $company)
                                                <option value={{ $company->id }} {{ old('company_id') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Save"/>
                                    </div>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
    </body>
    <script>
  $('div.alert').fadeOut(7000);
</script>
</html>