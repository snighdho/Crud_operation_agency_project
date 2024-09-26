@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border border-info-subtle">
                    {{-- Content --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4">{{ __('The SkilledZone Agency') }}</h1>
                <!-- Preview Text with "See More" -->
                <p id="short-text">
                    SkilledZone Agency is a leading provider of comprehensive digital solutions, specializing <br>
                    <b>Web Design:</b> Crafting visually stunning, user-friendly websites that combine aesthetic appeal with
                    seamless functionality.
                    <button id="see-more" class="btn btn-link p-0" onclick="toggleText()">See More</button>
                </p>

                <!-- Full Text (Initially Hidden) -->
                <div id="full-text" style="display: none;">
                    <ul><b>Web Development:</b> Delivering robust, scalable, and dynamic websites and web applications using
                        the latest technologies tailored to meet your business goals.</ul>
                    <ul><b>UI/UX Design:</b> Creating intuitive and engaging user interfaces that enhance user experiences,
                        ensuring your audience connects effortlessly with your platform.</ul>
                    <ul><b>Graphics Design:</b> Offering innovative graphic design services, including branding, logos, and
                        marketing materials, to visually communicate your message and captivate your audience.</ul>
                    At SkilledZone Agency, we focus on delivering high-quality, customized digital solutions that help
                    elevate your brand’s online presence.
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/suvro-01.png') }}" alt="Description of Image" class=" "
                    style="width:400px" />
            </div>
        </div>

        <div class="paragraph mt-5 mb-5">
            <h5 class="product text-center mb-4 pt-3">Our Services</h5>
            <h2 class="h2 text-center">We Can Help You With!</h2>

            <div class="row m-0">
                <!-- Web Development Card -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Web Development</h5>
                            <p class="card-text">Delivering robust and scalable websites.</p>
                            <a href="#" class="btn btn-primary">Discover More &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Graphics Design Card -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Graphics Design</h5>
                            <p class="card-text">Innovative designs for your branding needs.</p>
                            <a href="#" class="btn btn-primary">Discover More &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- UI/UX Design Card -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">UI/UX Design</h5>
                            <p class="card-text">Creating intuitive user experiences.</p>
                            <a href="#" class="btn btn-primary">Discover More &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Email Marketing Card -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Email Marketing</h5>
                            <p class="card-text">Effective campaigns to reach your audience.</p>
                            <a href="#" class="btn btn-primary">Discover More &rarr;</a>
                        </div>
                    </div>
                </div>


                <div class="contact-us mt-2 mb-3 p-4">
                    <button class="btn btn-primary" onclick="toggleContactForm()">Contact Us</button>
                    <div id="contact-form" style="display: none;"
                        class="col-lg-6 col-md-12 mt-3 px-5 justify-content-center">
                        <!-- Contact Form -->
                        <form class="contact-forms" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label mx-2">Your Name</label>
                                <input type="text" class="form-control mx-2" id="name" name="name"
                                    placeholder="Enter your name" required>
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label mx-2">Your Email</label>
                                <input type="email" class="form-control mx-2" id="email" name="email"
                                    placeholder="Enter your email" required>
                            </div>

                            <!-- Message Field -->
                            <div class="mb-3">
                                <label for="message" class="form-label mx-2">Your Message</label>
                                <textarea class="form-control mx-2" id="message" name="message" rows="4" placeholder="Enter your message"
                                    required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>

                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Display Success Message -->
                        @if (session('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>

        <div>
            <!-- Team Experts Section -->
            <div class="paragraphs mt-5 mb-5">
                <h5 class="product text-center mb-4 pt-3">Meet Our Team</h5>
                <h2 class="h2 text-center">Our Experts</h2>

                <div class="row m-0">
                    <!-- Web Development Expert Card -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="{{ asset('images/shuvro1.jpg') }}" alt="Web Development Expert"
                                    class="img-fluid mb-3 rounded-circle">
                                <h5 class="card-title text-uppercase">Shuvro Biswas</h5>
                                <p class="card-text">Senior Web Developer with 10+ years of experience in building scalable
                                    web solutions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Graphics Design Expert Card -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="{{ asset('images/shuvro2.png') }}" alt="Graphics Design Expert"
                                    class="img-fluid mb-3 rounded-circle">
                                <h5 class="card-title text-uppercase">Zakir Islam</h5>
                                <p class="card-text">Creative Director specialized in branding and innovative graphic
                                    designs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- UI/UX Design Expert Card -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="{{ asset('images/shuvro3.png') }}" alt="UI/UX Expert"
                                    class="img-fluid mb-3 rounded-circle">
                                <h5 class="card-title text-uppercase">Naymur Rahman</h5>
                                <p class="card-text">UI/UX Designer focusing on creating seamless user experiences.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Email Marketing Expert Card -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="{{ asset('images/shuvro4.png') }}" alt="Email Marketing Expert"
                                    class="img-fluid mb-3 rounded-circle">
                                <h5 class="card-title text-uppercase">Nabil Rahman</h5>
                                <p class="card-text">Digital Marketing Expert specializing in effective email campaigns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
