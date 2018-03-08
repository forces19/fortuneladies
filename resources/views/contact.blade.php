@extends('template')
@section('content')

<div class="contact">
        <div class="container text-center" data-aos="fade-up">
            <div class="col-xs-12 col-md-12">
                <h2 class="garis">Contact Us</h2>
            </div>
            <form>
                <div style="margin-bottom:2vh;" class="row">
                    <div class="col">
                    <input style="background-color: rgb(242,242,242);" type="text" class="form-control" placeholder="Your name">
                    </div>
                    <div class="col">
                    <input style="background-color: rgb(242,242,242);" type="email" class="form-control" placeholder="Your email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <textarea style="background-color: rgb(242,242,242);" required="" name="comments" id="comments" cols="" rows="4" class="form-control" placeholder="Your message..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <input type="submit" id="submit" class="button" value="&nbsp Send &nbsp"></input>
                    </div>
                </div>
            </form>
        </div>
        
    </div>

@endsection