@extends('layouts.main')
@section('title', 'CV')
@section('content')
    <section class="contact-details">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-9 col-lg-9">
                    <div class="sec-title">
                        <span class="sub-title">
                            Post a job and hire talent worker.
                        </span>
                        <h2>
                            Employer Application Form
                        </h2>
                        <p style="color: black;" class="py-3">
                            A leading Manpower Recruiting Agency based in Myanmar, licensed and authorized by the Ministry
                            of Labor, Employment and Social Security of Myanmar.
                        </p>
                    </div>


                    <style>
                        input[type=text] {
                            width: 100%;
                            padding: 10px 18px;
                            margin: 0px 0;
                            box-sizing: border-box;
                            border: 1px solid black;
                            -webkit-transition: 0.5s;
                            transition: 0.5s;
                            outline: none;
                        }

                        input[type=text]:focus {
                            border: 1px solid black;
                        }

                        textarea {
                            width: 100%;
                            padding: 10px 18px;
                            margin: 0px 0;
                            box-sizing: border-box;
                            border: 1px solid black;
                            -webkit-transition: 0.5s;
                            transition: 0.5s;
                            outline: none;
                        }
                    </style>


                    <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Company Name</label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('company_name') is-invalid @enderror" placeholder="Company Name"
                                        name="company_name" value="{{ old('company_name') }}">
                                    @error('company_name')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Type of Company</label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('company_type') is-invalid @enderror" placeholder="Type Of Company"
                                        name="company_type" value="{{ old('company_type') }}">
                                    @error('company_type')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Company Email Address</label>
                                    <input type="text" class=" @error('email') is-invalid @enderror"
                                        placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Company Phone Number</label>
                                    <input autocomplete="off" type="text" class=" @error('phone') is-invalid @enderror"
                                        placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Company Website</label>
                                    <input autocomplete="off" type="text" class=" @error('website') is-invalid @enderror"
                                        placeholder="Company Website" name="website" value="{{ old('website') }}">
                                    @error('website')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Company Location</label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('location') is-invalid @enderror" placeholder="Company Location"
                                        name="location" value="{{ old('location') }}">
                                    @error('location')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Job Category</label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('job_category') is-invalid @enderror" placeholder="Job Category"
                                        name="job_category" value="{{ old('job_category') }}">
                                    @error('job_category')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Age Limit: 20-40</label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('age_limit') is-invalid @enderror" placeholder="Age Limit: 20-40"
                                        name="age_limit" value="{{ old('age_limit') }}">
                                    @error('age_limit')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Educational
                                        Requirement</label>
                                    <textarea class=" @error('educational_requirement') is-invalid @enderror" name="educational_requirement">{{ old('educational_requirement') }}</textarea>
                                    @error('educational_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">
                                        Working Experience
                                    </label>
                                    <textarea class=" @error('working_experience_requirement') is-invalid @enderror"
                                        name="working_experience_requirement">{{ old('working_experience_requirement') }}</textarea>
                                    @error('working_experience_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">
                                        Other Additional
                                    </label>
                                    <textarea class=" @error('other_additional_requirement') is-invalid @enderror" name="other_additional_requirement">{{ old('other_additional_requirement') }}</textarea>
                                    @error('other_additional_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Estimate Salary</label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('estimate_salary_offer') is-invalid @enderror"
                                        placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                        value="{{ old('estimate_salary_offer') }}">
                                    @error('estimate_salary_offer')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Other Allowance</label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('other_allowance') is-invalid @enderror"
                                        placeholder="Other Allowance" name="other_allowance"
                                        value="{{ old('other_allowance') }}">
                                    @error('other_allowance')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">
                                        Gender
                                    </label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('gender') is-invalid @enderror" placeholder="Gender"
                                        name="gender" value="{{ old('gender') }}">
                                    @error('gender')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12">
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Interview Type</label>
                                    <input autocomplete="off" type="text"
                                        class=" @error('interview_type') is-invalid @enderror" placeholder="Online"
                                        name="interview_type" value="{{ old('interview_type') }}">
                                    @error('interview_type')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 py-2">
                                <button type="submit" class="theme-btn btn-style-one">
                                    <span class="btn-title">
                                        Apply Now
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection
