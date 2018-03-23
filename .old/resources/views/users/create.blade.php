@extends('layouts.app')

@section('content')
    <div class="pg-tp">
        <i class="ion-cube"></i>
        <div class="pr-tp-inr">
            <h4>Create User</h4>
            <span></span>
        </div>
    </div><!-- Page Top -->

    <div class="panel-content">

                    {!! Form::open(['route' => 'users.store', 'class' => 'form-wrp']) !!}

                        @include('users.fields')

                        @include('users.submit')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->

@endsection

@section('scripts')
    <script>

        var number = Math.floor(Math.random() * 1E2);

        var password = "password";
        var price = Math.floor(Math.random() * 2E3);
        var quantity = Math.floor(Math.random() * 1E3);
        var model = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);
        var firstname = "Harry";
        var lastname = "Balls " + number;
        var wn = "Test Website";
        var website = "testwebsite.com";
        var name = firstname + " " + lastname + number;
        var username = name.replace(/\s+/g, '');
        var email = number + "testing@fake.com";
        var sku = Math.floor(Math.random() * 1E6);
        var upc = Math.random().toString().slice(-6);
        var company = "test company";
        var keywords = "Aenean, commodo, ligula, eget, dolor, Aenean massa";
        var details = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.";
        var descrip = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. " +
            "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, " +
            "pretium quis, sem. Nulla consequat massa quis enim.";
        document.getElementById("first_name").value = firstname;
        document.getElementById("last_name").value = lastname;
        document.getElementById("name").value = name;
        document.getElementById("password").value = password;
        document.getElementById("email").value = email;
        document.getElementById("username").value = username;
        document.getElementById("about_me").value = descrip;
        document.getElementById("company").value = company;
        document.getElementById("website_name").value = wn;
        document.getElementById("website").value = website;
        // document.getElementById("subtitle").value = "subtitle goes here";
        // document.getElementById("details").value = details;
        // document.getElementById("description").value = descrip;
        document.getElementById("password_confimation").value = password;

$(document).ready(function() {
  $('body [class*="summernote"]').summernote();
  		$("input#name").attr('readonly','readonly');
		$('#name,#first_name,#last_name').blur(function() {
			$('input#name').val(
			$('input#first_name').val() + " " +
			$('input#last_name').val() );
		});
});
    </script>
@endsection
