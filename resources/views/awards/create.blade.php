@extends('layouts.front')

@section('seca')

<div class="create_awards_sec">
    <h1>Add New Awards</h1>
    <div class="create_awards_box">
        <div class="create_awards_list">
            <form action="{{ route('award.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <label for="">Upload an Image</label>
                <input type="file" name="award_photo" id="award_photo">
                <label for="">What Award?</label>
                <input type="text" name="award_name" id="award_name">
                <label for="">Achieved On:</label>
                <input type="date" name="award_date" id="award_date">
                <label for="">Caption or Highlights</label>
                <input type="text" name="award_des" id="award_des">

                <input type="submit" value="Add" class="submit_award">
            </form>
        </div>
    </div>
</div>

@endsection