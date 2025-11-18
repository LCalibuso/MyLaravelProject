@include(view: 'components.header')
{!! Form::open(['routes' => 'register', 'method'=>'post']) !!}
<p>Name</p>
{!! Form::text('name') !!}
<p>Email</p>
{!! Form::text('Email') !!}
<p>Password</p>
{!! Form::Password('Password') !!}
<p>Confirm Password</p>
{!! Form::Password('Confirm Password') !!}
@include(view: 'components.footer')
