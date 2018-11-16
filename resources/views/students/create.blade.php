@extends('layout')

@section('content')

<h1 class="title" style="margin-top: 1em;">Add a Student</h1>
<form method="POST" action="{{ route ('students.store') }}">
  {{ csrf_field() }}

<div class="field">
    <lable class="label" for="group_id">Group ID</lable>
    <div class="control">
      <input type="number" class="input" name="group_id" placeholder="Add Group ID">
    </div>
  </div>

  <div class="field">
    <label class="label" for="last_name">Last Name</label>

    <div class="control">
      <input type="text" class="input" name="last_name" placeholder="Add Last Name">
    </div>
  </div>

  <div class="field">
    <lable class="label" for="given_name">Given Name</lable>
    <div class="control">
      <input type="text" class="input" name="given_name" placeholder="Add Given Name">
    </div>
  </div>

  <div class=field>
    <label class="label" for="date_of_birth">Date of Birth</label>
    <div class="control">
      <input type="date" class="input" name="date_of_birth">
    </div>
  </div>

  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link">Add Student</button>
    </div>
  </div>
</form>
@endsection