<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>فرم اطلاعات کاربر</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .form-group {
            text-align: right;
        }
        .form-group label {
            font-weight: bold;
            display: block; /* Display the label as block element */
        }
        .form-group .skill-input {
            display: inline-block; /* Display skill inputs inline */
        }
        .form-group input, .form-group select {
            text-align: right;
        }
        .card-header {
            text-align: right;
            background-color: #f8f9fa; /* Add a light background color for better contrast */
            direction: rtl; /* Force right-to-left alignment */
            text-align: right; /* Align text to the right */
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">فرم اطلاعات کاربر</div>

                <div class="card-body">
                    <form method="POST" action="{{ url( '/api/v1/forms' ) }}">
                        @csrf
                        <div class="form-group">
                            <label for="filler_name">نام اپراتور</label>
                            <input type="text" class="form-control" id="filler_name" name="filler_name" placeholder="نام اپراتور را وارد کنید" required>
                        </div>
                        <div class="form-group">
                            <label for="first_name">نام کاربر</label>
                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="نام کاربر را وارد کنید" required>
                        </div>
                        <div class="form-group">
                            <label for="age">سن</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="سن را وارد کنید" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">جنسیت</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="male">مرد</option>
                                <option value="female">زن</option>
                                <option value="other">سایر</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="educations">تحصیلات</label>
                            <div id="educationContainer">
                                <div class="education-input">
                                    <input type="text" name="educations[][degree]" class="education-degree" placeholder="مقطع تحصیلی">
                                    <input type="text" name="educations[][field]" class="education-field" placeholder="رشته تحصیلی">
                                    <button type="button" class="add-education-btn">اضافه کردن تحصیلات</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job">شغل</label>
                            <input type="text" class="form-control" id="job" name="job" placeholder="شغل را وارد کنید" required>
                        </div>
                        <div class="form-group">
                            <label for="preferred_learning_format">نوع آموزش ترجیحی</label>
                            <input type="text" class="form-control" id="preferred_learning_format" name="preferred_learning_format" placeholder="فرمت یادگیری ترجیحی را وارد کنید" required>
                        </div>
                        <div class="form-group">
                            <label for="learning_goal">هدف آموزش</label>
                            <input type="text" class="form-control" id="learning_goal" name="learning_goal" placeholder="هدف کاربر از آموزش را وارد کنید" required>
                        </div>
                        <div class="form-group">
                            <label for="skills">مهارت‌ها</label>
                            <div id="skillsContainer">
                                <!-- Initial skill input -->
                                <div class="skill-input">
                                    <input type="text" name="skills[][title]" class="skill-field" placeholder="عنوان مهارت">
                                    <input type="text" name="skills[][level]" class="skill-level" placeholder="سطح">
                                    <button type="button" class="add-skill-btn">اضافه کردن مهارت</button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ثبت</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#skillsContainer').on('click', '.add-skill-btn', function() {
            var $btn = $(this);

            // Change the button text to "Remove Skill"
            $btn.text('حذف مهارت').addClass('remove-skill-btn').removeClass('add-skill-btn');

            // Append a new skill input field with "Add Skill" button
            var newSkillInput = '<div class="skill-input">' +
                '<input type="text" name="skills[][title]" class="skill-field" placeholder="عنوان مهارت">' +
                '<input type="text" name="skills[][level]" class="skill-level" placeholder="سطح">' +
                '<button type="button" class="add-skill-btn">اضافه کردن مهارت</button>' +
                '</div>';
            $('#skillsContainer').append(newSkillInput);
        });

        $('#skillsContainer').on('click', '.remove-skill-btn', function() {
            $(this).closest('.skill-input').remove();
        });
    });

    $(document).ready(function() {
        $('#educationContainer').on('click', '.add-education-btn', function() {
            var $btn = $(this);

            // Change the button text to "Remove Skill"
            $btn.text('حذف تحصیلات').addClass('remove-education-btn').removeClass('add-education-btn');

            // Append a new skill input field with "Add Skill" button
            var newSkillInput = '<div class="education-input">' +
                '<input type="text" name="educations[][degree]" class="education-degree" placeholder="مقطع تحصیلی">' +
                '<input type="text" name="educations[][skill-field]" class="educations-field" placeholder="رشته تحصیلی">' +
                '<button type="button" class="add-education-btn">اضافه کردن تحصیلات</button>' +
                '</div>';
            $('#educationContainer').append(newSkillInput);
        });

        $('#educationContainer').on('click', '.remove-education-btn', function() {
            $(this).closest('.education-input').remove();
        });
    });
</script>

</body>
</html>
