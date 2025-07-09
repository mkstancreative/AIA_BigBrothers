@extends('layouts.admin')

@section('Title', 'Home')

@section('content')
    <div class="dash_card_container row justify-content-center align-items-center gap-3 flex-grow-1 flex-wrap">
        <div class="dash_card_block col-md-5 flex-grow-1">
            <div>
                <i class="ri-team-line"></i>
            </div>
            <div>
                <h3>{{ $totalMembers }}</h3>
                <p>Total Members</p>
            </div>
        </div>
        <div class="dash_card_block col-md-5 flex-grow-1">
            <div>
                <i class="ri-graduation-cap-line"></i>
            </div>
            <div>
                <h3>{{ $approved }}</h3>
                <p>Approved Members</p>
            </div>
        </div>
        <div class="dash_card_block col-md-5 flex-grow-1">
            <div>
                <i class="ri-calendar-schedule-line"></i>
            </div>
            <div>
                <h3>{{ $pending }}</h3>
                <p>Pending Members</p>
            </div>
        </div>
        <div class="dash_card_block col-md-5 flex-grow-1">
            <div>
                <i class="ri-book-open-fill"></i>
            </div>
            <div>
                <h3>{{ $blog }}</h3>
                <p>Total Post</p>
            </div>
        </div>
    </div>
@endsection
