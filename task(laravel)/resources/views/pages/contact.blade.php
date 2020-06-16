@extends('layouts.app')

@section('content')


<section class="mb-4">

    <br><br>
    <hr>
    @include('includes.msg')

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form action="{{route('msg.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Message</label>
                            <textarea type="text" name="msg" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <br>
                <!--Grid row-->
                <button type="submit" class="btn btn-outline-dark">Send..</button>


            </form>
    
            
        </div>
        <!--Grid column-->

  

    </div>

</section>
<!--Section: Contact v.2-->
@endsection