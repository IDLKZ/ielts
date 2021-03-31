<!-- Teacher Id Field -->
<div class="col-sm-12">
    {!! Form::label('teacher_id', __("admin.teachers")) !!}
    <p>{{ $teacherLink->teacher_id }}</p>
</div>

<!-- Icon Field -->
<div class="col-sm-12">
    {!! Form::label('icon', 'Icon:') !!}
    <i class="{{ $teacherLink->icon }}"></i>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', __("admin.teacher_links")) !!}
    <a href="{{ $teacherLink->link }}">{{$teacherLink->link}}</a>
</div>

