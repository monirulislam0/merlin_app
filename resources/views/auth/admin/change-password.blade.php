@section('title')
    Marlintech | Change Password
@endsection
<x-admin-auth-layout>
    <section id="auth-login" class="row flexbox-container">
        <div class="col-xl-8 col-11">
            <div class="card bg-authentication mb-0">
                <div class="row m-0">
                    <!-- left section-login -->
                    <div class="col-md-6 col-12 px-0">
                        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="text-center mb-2">Change Password</h4>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="d-flex flex-md-row flex-column justify-content-around">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="divider">
                                        <div class="divider-text text-uppercase text-muted"><small>Update your
                                                password</small>
                                        </div>
                                    </div>
                                    <form method="POST" action="{{ route('admin.password.update') }}">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label for="current_password" class="form-label">Current Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                                </div>
                                                <input type="password" id="current_password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" placeholder="Enter current password" required>
                                            </div>
                                            @error('current_password')
                                                <div class="invalid-feedback d-block">
                                                    <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="new_password" class="form-label">New Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" placeholder="Enter new password" required>
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('new_password')" style="border-left: none;">
                                                        <i class="fas fa-eye" id="new_password_toggle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            @error('new_password')
                                                <div class="invalid-feedback d-block">
                                                    <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                            <small class="text-muted">Password must be at least 8 characters long.</small>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-check"></i></span>
                                                </div>
                                                <input type="password" id="new_password_confirmation" class="form-control @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation" placeholder="Confirm new password" required>
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('new_password_confirmation')" style="border-left: none;">
                                                        <i class="fas fa-eye" id="new_password_confirmation_toggle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            @error('new_password_confirmation')
                                                <div class="invalid-feedback d-block">
                                                    <span>{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="show_passwords" onchange="toggleAllPasswords()">
                                                <label class="custom-control-label" for="show_passwords">Show all passwords</label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                                <i class="fa fa-save mr-1"></i> Change Password
                                            </button>
                                        </div>

                                        <div class="form-group text-center">
                                            <a href="{{ route('admin.dashboard') }}" class="btn btn-light-secondary">
                                                <i class="fa fa-arrow-left mr-1"></i> Back to Dashboard
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right section -->
                    <div class="col-md-6 d-md-block d-none text-center align-self-center">
                        <div class="border-primary border-opacity-1 h-100 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/images/logo/favicon.png') }}" class="img-fluid" alt="branding logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const toggleIcon = document.getElementById(fieldId + '_toggle');
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fas', 'fa-eye');
                toggleIcon.classList.add('fas', 'fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fas', 'fa-eye-slash');
                toggleIcon.classList.add('fas', 'fa-eye');
            }
        }

        function toggleAllPasswords() {
            const showPasswords = document.getElementById('show_passwords').checked;
            const passwordFields = ['current_password', 'new_password', 'new_password_confirmation'];
            
            passwordFields.forEach(fieldId => {
                const passwordField = document.getElementById(fieldId);
                const toggleIcon = document.getElementById(fieldId + '_toggle');
                
                if (showPasswords) {
                    passwordField.type = 'text';
                    toggleIcon.classList.remove('fas', 'fa-eye');
                    toggleIcon.classList.add('fas', 'fa-eye-slash');
                } else {
                    passwordField.type = 'password';
                    toggleIcon.classList.remove('fas', 'fa-eye-slash');
                    toggleIcon.classList.add('fas', 'fa-eye');
                }
            });
        }

        // Password strength indicator
        document.getElementById('new_password').addEventListener('input', function() {
            const password = this.value;
            const strengthIndicator = document.getElementById('password_strength') || createStrengthIndicator();
            
            let strength = 0;
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;
            
            const strengthText = ['Very Weak', 'Weak', 'Medium', 'Strong'][strength];
            const strengthColor = ['danger', 'warning', 'info', 'success'][strength];
            
            strengthIndicator.className = `form-text text-${strengthColor}`;
            strengthIndicator.textContent = `Password strength: ${strengthText}`;
        });

        function createStrengthIndicator() {
            const indicator = document.createElement('small');
            indicator.id = 'password_strength';
            indicator.className = 'form-text';
            const passwordField = document.getElementById('new_password');
            passwordField.parentNode.appendChild(indicator);
            return indicator;
        }
    </script>
</x-admin-auth-layout>
