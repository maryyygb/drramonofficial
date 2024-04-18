@extends('layouts.front')

@section('seca')

<div class="create_events">
    <div class="c_ev_box">

        <!-- for the success message from the controller when a new event is added -->
        @if (session('status'))
        <div class="c_ev_status">{{session('status')}}</div>
        @endif

        <div class="c_ev_title">
            <h1>Add New Events</h1>
        </div>
        <form method="post" action="{{ url('admin/events/'.$event->id.'/edit') }}">
            @csrf
            @method('PUT')
            <div class="c_ev_list">
                <label>Title</label>
                <input type="text" name="evtitle" id="evtitle" value="{{ $event->evtitle }}">
                @error('evtitle') <span>{{ $message }}</span> @enderror
            </div>
            <div class="c_ev_list">
                <label>Date</label>
                <input type="date" name="evdate" id="evdate" value="{{ $event->evdate }}">
                @error('evdate') <span>{{ $message }}</span> @enderror
            </div>
            <div class="c_ev_list">
                <label>Description</label>
                <input type="text" name="evdescription" id="evdescription" value="{{ $event->evdescription }}">
                @error('evdescription') <span>{{ $message }}</span> @enderror
            </div>
            <input type="submit" value="Update" class="c_ev_submit">
        </form>
    </div>
</div>

@endsection