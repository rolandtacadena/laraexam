@extends('layouts.app')

@section('page.title')
    Teacher Students
@endsection

@section('content')

    <div class="general-container">
        <div class="row column expanded teacher-dashboard">

            @include('layouts.partials.navs.teacher-nav')

            <div class="small-12 medium-9 large-10 columns">
                <div class="teacher-dashboard-content">
                    <h4>Student List</h4>
                    <hr>
                    <div class="dashboard-ops">
                        <button data-open="NewStudentModal">+ Add New Student</button>
                    </div>
                    <div class="row">
                        <table class="questions-for-exam">
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teacher->students as $student)
                                <tr>
                                    <td><a v-on:click="loadStudentOnForm({{ $student->id }})" data-open="updateStudentModal">{{ $student->name }}</a></td>
                                    <td><a v-on:click="loadStudentOnForm({{ $student->id }})" data-open="updateStudentModal">{{ $student->email }}</a></td>
                                    <td><a v-on:click="loadStudentOnForm({{ $student->id }})" data-open="updateStudentModal">{{ $student->status == true ? 'active' : 'not active' }}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('teacher.forms.add-student-modal')

    @include('teacher.forms.update-student-modal')

@endsection

@section('additional-footer-scripts')

    <script>

        var baseRoute = '{{ route('index') }}'

        new Vue({
            el: 'body',

            data: {
                student: {}
            },

            methods: {
                loadStudentOnForm: function(student){
                    var resource = this.$resource(baseRoute + '/teacher/ajax/student{/student}');
                    resource.get({ student: student })
                    .then(function(response) {
                        this.student = response.data;
                        console.log(response.data)
                        console.log(this.student)
                    });
                }
            }
        });
    </script>

@endsection