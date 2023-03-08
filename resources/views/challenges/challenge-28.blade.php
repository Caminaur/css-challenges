@extends('layouts.main')

@section('title', 'Challenge 28')
@section('css', 'challenge-28')

@section('main')
    <div class="body">
        <div class="task-manager">
            {{-- Left bar --}}
            <div class="left-bar">
                <div class="upper-part">
                    <div class="left-side"></div>
                    <div class="right-side"></div>
                </div>
                <div class="left-content">
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/inbox.svg') }}">
                        <span>Inbox</span>
                    </div>
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/star.svg') }}">
                        <span>Today</span>
                    </div>
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/calender.svg') }}">
                        <span>Upcoming</span>
                    </div>
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/hash.svg') }}">
                        <span>Important</span>
                    </div>
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/users.svg') }}">
                        <span>Meeting</span>
                    </div>
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/trash.svg') }}">
                        <span>Trash</span>
                    </div>
                </div>
                <div class="category-selector">
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/users.svg') }}">
                        <span>Family</span>
                    </div>
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/sun.svg') }}">
                        <span>Vacation</span>
                    </div>
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/trending.svg') }}">
                        <span>Festival</span>
                    </div>
                    <div class="line">
                        <img src="{{ url('/images/challenge-28/svg/zap.svg') }}">
                        <span>Concerts</span>
                    </div>
                </div>
            </div>
            {{-- Left bar --}}

            {{-- central bar --}}
            <div class="page-content">
                <div class="page-header">Today Tasks</div>
                <div class="content-categories">
                    <div class="label-wrapper">
                        <input type="radio" name="nav" id="opt-1" class="nav-item">
                        <label class="category" for="opt-1">All</label>
                    </div>
                    <div class="label-wrapper">
                        <input type="radio" name="nav" id="opt-2" class="nav-item">
                        <label class="category" for="opt-2">Important</label>
                    </div>
                    <div class="label-wrapper">
                        <input type="radio" name="nav" id="opt-3" class="nav-item">
                        <label class="category" for="opt-3">Notes</label>
                    </div>
                    <div class="label-wrapper">
                        <input type="radio" name="nav" id="opt-4" class="nav-item">
                        <label class="category" for="opt-4">Links</label>
                    </div>
                </div>
                <div class="task-wrapper">
                    <div class="task">
                        <input type="checkbox" name="task" id="item-1" class="task-item" checked>
                        <label for="item-1">
                            <span>Dashboard Design Implementation</span>
                        </label>
                        <span class="tag approved">Approved</span>
                    </div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-2" class="task-item" checked>
                        <label for="item-2">
                            <span>Create a userflow</span>
                        </label>
                        <span class="tag progress">In Progress</span>
                    </div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-3" class="task-item">
                        <label for="item-3">
                            <span>Application Implementation</span>
                        </label>
                        <span class="tag review">In Review</span>
                    </div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-4" class="task-item">
                        <label for="item-4">
                            <span>Create a Dashboard Design</span>
                        </label>
                        <span class="tag progress">In Progress</span>
                    </div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-5" class="task-item">
                        <label for="item-5">
                            <span>Create a Web Application Design</span>
                        </label>
                        <span class="tag approved">Approved</span>
                    </div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-6" class="task-item">
                        <label for="item-6">
                            <span>Interactive Design</span>
                        </label>
                        <span class="tag review">In Review</span>
                    </div>
                    <div class="header upcoming">Upcoming Tasks</div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-7" class="task-item">
                        <label for="item-7">
                            <span>Dashboard Design Implementation</span>
                        </label>
                        <span class="tag waiting">Waiting</span>
                    </div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-8" class="task-item">
                        <label for="item-8">
                            <span>Create a userflow</span>
                        </label>
                        <span class="tag waiting">Waiting</span>
                    </div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-9" class="task-item">
                        <label for="item-9">
                            <span>Application Implementation</span>
                        </label>
                        <span class="tag waiting">Waiting</span>
                    </div>
                    <div class="task">
                        <input type="checkbox" name="task" id="item-10" class="task-item">
                        <label for="item-10">
                            <span>Create a Dashboard Design</span>
                        </label>
                        <span class="tag waiting">Waiting</span>
                    </div>
                </div>
            </div>
            {{-- central bar --}}

            {{-- Right bar --}}
            <div class="right-bar">
                <div class="top-right">
                    <img class="users-icon" src="{{ url('/images/challenge-28/svg/users.svg') }}">
                    <div class="round">6</div>
                </div>
                <div class="right-bar-title">Schedule</div>
                <div class="sticknotes-list">
                    <div class="sticknote">
                        <span for="" class="time">08.00 - 09.00 AM</span>
                        <span for="" class="title">Product Review</span>
                        <div class="invites">
                            <img src="{{ url('/images/challenge-28/img1.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img2.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img3.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="sticknote">
                        <span for="" class="time">10.00 - 11.00 AM</span>
                        <span for="" class="title">Design Meeting</span>
                        <div class="invites">
                            <img src="{{ url('/images/challenge-28/img5.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img6.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img7.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="sticknote">
                        <span for="" class="time">01.00 - 02.00 PM</span>
                        <span for="" class="title">Team Meeting</span>
                        <div class="invites">
                            <img src="{{ url('/images/challenge-28/img1.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img2.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img3.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="sticknote">
                        <span for="" class="time">03.00 - 04.00 PM</span>
                        <span for="" class="title">Release Event</span>
                        <div class="invites">
                            <img src="{{ url('/images/challenge-28/img5.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img6.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img7.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img8.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="sticknote">
                        <span for="" class="time">11.00 - 12.00 PM</span>
                        <span for="" class="title">Practise</span>
                        <div class="invites">
                            <img src="{{ url('/images/challenge-28/img5.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img6.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img7.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img8.jpg') }}" alt="">
                            <img src="{{ url('/images/challenge-28/img1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right bar --}}
        </div>
    </div>
@endsection
