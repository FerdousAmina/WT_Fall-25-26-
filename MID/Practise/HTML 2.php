<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Online Admission Form</title>
</head>
<body>

    <h1>University Online Admission Form</h1>

    <form action="/submit-admission" method="post">
        
        <fieldset>
            <legend><b>Personal Information</b></legend>
            
            <section>
                <label for="Name">Full Name:</label>
                <input type="text" id="Name" name="Name" maxlength="100" required><br><br>
            
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required><br><br>
            
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required><br><br>

                    <input type="radio" id="genderMale" name="gender" value="Male" required>
                    <label for="genderMale">Male</label><br><br>

                    <input type="radio" id="genderFemale" name="gender" value="Female">
                    <label for="genderFemale">Female</label><br><br>

                    <input type="radio" id="genderOther" name="gender" value="Other">
                    <label for="genderOther">Other</label>
                </section>
            
        </fieldset>
<br><br>
        <fieldset>
            <legend><b>Academic Information</b></legend>
            
            <section>
                <label for="lastInstitution">Last Attended Institution:</label>
                <input type="text" id="lastInstitution" name="lastInstitution" required><br><br>
                <label for="gpa">GPA/Result (Last Exam):</label>
                <input type="text" id="gpa" name="gpa" required><br><br>
                <label for="preferredDept">Preferred Department/Program:</label>
                <select id="preferredDept" name="preferredDept" required>
                    <option value="CSE">Computer Science & Engineering (CSE)</option>
                    <option value="EEE">Electrical & Electronic Engineering (EEE)</option>
                    <option value="BBA">Bachelor of Business Administration (BBA)</option>
                    <option value="ENG">English</option>
                    <option value="ARC">Architecture</option>
                </select><br><br>
            </section>

        </fieldset>
<br><br>
        <fieldset>
            <legend><b>Required Documents</b></legend>
            
            <section>
                <label for="transcript">Upload Academic Transcript/Marksheet: </label>
                <input type="file" id="transcript" name="transcript"><br><br>
                <label for="photo">Upload Passport Size Photo: </label>
                <input type="file" id="photo" name="photo" ><br><br>
            </section>

        </fieldset>
<br><br>
        <section>
            <button type="reset">Reset Form</button>
            <button type="submit">Submit Application</button>
        </section>

    </form>

</body>
</html>