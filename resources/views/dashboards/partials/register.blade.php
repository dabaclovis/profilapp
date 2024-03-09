<div class=" row justify-content-center">
    <style>
        #mand {
            width: 4.75%;
        }
    </style>
    <div class=" col-8">
        <div class="card">
            <div class="card-header w3-padding-24 w3-teal">
                Registration
            </div>
            <div class="card-header">
                <form action="{{ route('handled') }}" class=" w3-container w3-text-teal" method="post">
                    @csrf
                    <div class="w3-row w3-section">
                        <div class="w3-col w3-xlarge" id="mand">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="text" name="fname" class=" form-control" placeholder="First Name"
                                autocomplete="fname" />
                            @error('fname')
                            <div class=" alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-col w3-xlarge" id="mand">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="text" name="lname" class=" form-control" placeholder="Last Name"
                                autocomplete="lname" />
                            @error('lname')
                            <div class=" alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="">
                        <div class="w3-col w3-xlarge" id="mand">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="email" name="email" placeholder="Email address" autocomplete="email"
                                class=" form-control" />
                            @error('email')
                            <div class=" alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-col w3-xlarge" id="mand">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="password" name="password" placeholder="Password" class=" form-control"
                                autocomplete="new-password" />
                            @error('password')
                            <div class=" alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class=" w3-row w3-section">
                        <div class="w3-col w3-xlarge" id="mand">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="password" name="password_confirmation" placeholder=" Password Confirmation"
                                class=" form-control" required autocomplete="new-password" />
                        </div>
                    </div>
                    <div class=" d-flex justify-content-end w3-section">
                        <button type="submit" class="btn btn-sm w3-teal">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
