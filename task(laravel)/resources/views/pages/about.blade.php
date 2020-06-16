@extends('layouts.app')

@section('content')
<main role="main">
<br><br><hr><br>
    
    <section class="text-center">
      <div class="container">
        <h1 class="heading">This section for ABOUT PAGE</h1>
        <p class="lead text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, in illum? Cum velit, eum, reprehenderit omnis praesentium esse ullam ad odit quam sapiente totam! Ratione odit quam officiis ex. Fugit.</p>
        <p>
          <a href="{{ url('/') }}" class="btn btn-primary my-2">HOME PAGE</a>
          <a href="{{ url('contact') }}" class="btn btn-secondary my-2">CONTACT US</a>
        </p>
      </div>
    </section>

   

  </main>
@endsection
    

    

