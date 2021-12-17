<h1> Create Student</h1>

<form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname" placeholder="First Name" value="{{ old('fname') }}">
    @error('fname')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror
    <br><br>

    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname" placeholder="Last Name">
    @error('lname')
    <span style="color:red;">{{ $message }}</span>
    @enderror
    <br><br>

    <p>Gender :</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>
    @error('gender')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror

    <p>Select  Grade :</p>
    <select id="grade" name="grade">
        <option value="Six">Grade 6</option>
        <option value="Seven">Grade 7</option>
        <option value="Eight">Grade 8</option>
        <option value="Nine">Grade 9</option>
        <option value="Ten">Grade 10</option>
        <option value="O level">O Level</option>
        <option value="A level">A Level</option>
    </select>

    @error('grade')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror<br><br>

    <label for="address">Address :</label><br>
    <textarea name="address" id="address" placeholder="Enter Address"></textarea>
    @error('address')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror<br>

    {{-- <p>Subject :</p>

    <input type="checkbox" name="subject[]" value="tamil" id="tamil">
    <label for="tamil">Tamil</label><br>

    <input type="checkbox" name="subject[]" value="science" id="science">
    <label for="science">Science</label><br>

    <input type="checkbox" name="subject[]" value="maths" id="maths">
    <label for="maths">Maths</label><br>

    <input type="checkbox" name="subject[]" value="english" id="english">
    <label for="english">English</label><br>

    <input type="checkbox" name="subject[]" value="history" id="history">
    <label for="history">History</label><br><br> --}}

    <label for="dob">Date Of Birth :</label>
    <input type="date" id="dob" name="date_of_birth">
    @error('dob')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror<br><br>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" placeholder="Enter Email">
    @error('email')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror<br><br>

    <label for="tel">Mobile No :</label>
    <input type="text" id="tel" name="tel" placeholder="Enter Tel No">
    @error('tel')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror   @error('tel')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror<br><br>

    <label for="image">Upload Image:</label>
    <input type="file" id="image" name="image" >
    @error('image')
    <span class="alert alert-danger">{{ $message }}</span>
    @enderror<br><br>

    <input type="submit" value="save">
</form>

