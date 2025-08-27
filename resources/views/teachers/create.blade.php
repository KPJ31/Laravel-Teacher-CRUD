@extends('layouts.app')

@section('main-content')
    <div class="row pt-5">
        <div class="col-8 mx-auto">
            <div class="card p-4 shadow">
                <h1 class="mb-4 text-center">Teacher's Registration Form</h1>
                <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Full Name" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" value="male" id="gender" class="form-check-input" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" value="female" id="gender" class="form-check-input" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender">Female</label>
                            </div>
                        </div>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input id="dob" name="dob" type="date" value="{{ old('dob') }}" class="form-control" required>
                        @error('dob')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control"  placeholder="xxxxx@xxxx.xxx" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea id="address" name="address" rows="3" class="form-control" placeholder="Address" required>{{ old('address') }}</textarea>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pnum" class="form-label">Phone Number</label>
                        <input id="pnum" name="pnum" type="tel" value="{{ old('pnum') }}" pattern="[0-9]{10}" placeholder="07XXXXXXXX" class="form-control" required>
                        @error('pnum')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="grade" class="form-label">What Grade do Your Teach?</label>
                        <select class="form-select  @error('grade') is-invalid @enderror" name="grade">
                            <option value="">Open this select menu</option>
                            <option {{ old('course') == '1 to 5' ? 'selected' : '' }}>1 to 5</option>
                            <option  {{ old('course') == '6 to 11' ? 'selected' : '' }}>6 to 11</option>
                            <option  {{ old('course') == '12 to 13' ? 'selected' : '' }}>12 to 13</option>
                        </select>
                        @error('grade')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <label>Photo:</label><br>
                    <input class="form-control" type="file" name="photo" accept="image/*" value="{{ old('photo') }}">
                    @error('photo')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
                    <br><br>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>                          
                        <a class="btn btn-primary" href="{{ route('teachers.index') }}">Back</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@endsection