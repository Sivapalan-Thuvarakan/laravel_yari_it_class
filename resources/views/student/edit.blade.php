<h1> Edit Student</h1>

<form action="{{route('students.update',$student->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname" value="{{$student->first_name}}">
    <br><br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname" value="{{$student->last_name}}">
    <br><br>
    <p>Gender :</p>
    <input type="radio" id="male" name="gender" value="male"
                    <?php if($student->gender == "male") echo "checked" ?>>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female"
                    <?php if($student->gender == "female" ) echo "checked"?>>
    <label for="female">Female</label><br><br>

    <p>Select  Grade :</p>
    <select id="grade" name="grade">
        <option value="Six" <?php if($student->grade == "Six") echo "selected" ?>>Grade 6</option>
        <option value="Seven" <?php if($student->grade == "Seven") echo "selected" ?>>Grade 7</option>
        <option value="Eight" <?php if($student->grade == "Eight") echo "selected" ?>>Grade 8</option>
        <option value="Nine" <?php if($student->grade == "Nine") echo "selected" ?>>Grade 9</option>
        <option value="Ten" <?php if($student->grade == "Ten") echo "selected" ?>>Grade 10</option>
        <option value="O level" <?php if($student->grade == "O level") echo "selected" ?>>O Level</option>
        <option value="A level"<?php if($student->grade == "A level") echo "selected" ?>>A Level</option>
    </select><br><br>
    <label for="address">Address :</label>
    <textarea name="address" id="address" placeholder="Enter Address" value="{{$student->address}}"></textarea><br>

    <p>Subject :</p>
    <?php $sub = explode(',',$student->subject) ?>
    <input type="checkbox" name="subject[]" value="tamil" id="tamil"
                <?php if(in_Array('tamil',$sub)){ echo "checked";}?>>
    <label for="tamil">Tamil</label><br>

    <input type="checkbox" name="subject[]" value="science" id="science"
                <?php if(in_Array('science',$sub)){ echo "checked";}?>>
    <label for="science">Science</label><br>

    <input type="checkbox" name="subject[]" value="maths" id="maths"
                <?php if(in_Array('maths',$sub)){ echo "checked";}?>>
    <label for="maths">Maths</label><br>

    <input type="checkbox" name="subject[]" value="english" id="english"
                <?php if(in_Array('english',$sub)){ echo "checked";}?>>
    <label for="english">English</label><br>

    <input type="checkbox" name="subject[]" value="history" id="history"
                <?php if(in_Array('history',$sub)){ echo "checked";}?>>
    <label for="history">History</label><br><br>

    <label for="dob">Date Of Birth :</label>
    <input type="date" id="dob" name="date_of_birth" value="{{$student->date_of_birth}}"><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" placeholder="Enter Email" value="{{$student->email}}"><br><br>

    <label for="tel">Mobile No :</label>
    <input type="text" id="tel" name="tel" placeholder="Enter Tel No" value="{{$student->mobile_no}}"><br><br>

    <label for="image">Upload Image:</label>
    <input type="file" id="image" name="image" accept="image/*"><br><br>
    <input type="submit" value="save">
</form>

