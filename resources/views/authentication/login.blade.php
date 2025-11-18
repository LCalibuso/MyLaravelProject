@include(view: 'components.header')
{!! Form::open(['routes' => 'register', 'method'=>'post']) !!}
<p>Email</p>
{!! Form::text('Email') !!}
<p>Password</p>
{!! Form::Password('Password') !!}
@include(view: 'components.footer')
