@extends('front.master')
@section('title')
    Contact Us
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Contact Us</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="min-height: 500px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Contact Form</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Phone</label>
                                    <div class="col-md-8">
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Your Message</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-success" value="Send Your Message.">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d228.29230984556202!2d90.39143625796451!3d23.723227459995712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1677821606704!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
