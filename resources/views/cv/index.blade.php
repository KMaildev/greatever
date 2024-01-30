@extends('layouts.main')
@section('title', 'CV')
@section('content')
    <section class="contact-details">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-9 col-lg-9">
                    <div class="sec-title">
                        <span class="sub-title">
                            Submit CV
                        </span>
                        <h2>
                            Apply for Your job.
                        </h2>
                        <p style="color: black;" class="py-3">
                            To apply for the desired job, we recommend reading the job requirements carefuly then if you
                            found yourself qualified for it, simply fill in the below form and click APPLY NOW.
                        </p>
                    </div>

                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                        id="create-form" autocomplete="off">
                        @csrf

                        <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Name*</label>
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Phone</label>
                                <input type="text" name="phone" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                            <div class="form-group">
                                <label class="text-black" style="color: black;">Additional Note</label>
                                <textarea name="additional_note" id="" cols="20" rows="5"
                                    placeholder="Your cover letter/message sent to the employer" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 py-3">
                            <div class="form-group">
                                <label for="img" style="color: black;">
                                    Select your CV to upload
                                </label>
                                <br>
                                <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                    class="form-control-file">
                            </div>
                        </div>

                        <div class="col-md-12 py-3">
                            <button type="submit" class="theme-btn btn-style-one">
                                <span class="btn-title">
                                    Apply Now
                                </span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
