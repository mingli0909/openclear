@extends('layouts.account')

@section('account-content')

<div class="ui-block">
    <div class="ui-block-title">
        <h6 class="title">Notifications</h6>
        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
    </div>

    
    <!-- Notification List -->
    
    <ul class="notification-list">
        @foreach ($notifications as $notification)
        <li>
            <div class="author-thumb">
                <img src="{{ generateAvatarNotification($notification->data, $notification->type) }}" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">{{ generateNotificationMessage($notification->data, $notification->type) }}</a>
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
            </div>
            <span class="notification-icon">
                <svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
            </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
        @endforeach
    
        {{-- <li class="un-read">
            <div class="author-thumb">
                <img src="img/avatar2-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
            </div>
            <span class="notification-icon">
                                    <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
        <li class="with-comment-photo">
            <div class="author-thumb">
                <img src="img/avatar3-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
            </div>
            <span class="notification-icon">
                                    <svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                </span>
    
            <div class="comment-photo">
                <img src="img/comment-photo.jpg" alt="photo">
                <span>“She looks incredible in that outfit! We should see each...”</span>
            </div>
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
        <li>
            <div class="author-thumb">
                <img src="img/avatar4-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">Chris Greyson</a> liked your <a href="#" class="notification-link">profile status</a>.
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 18th at 8:22pm</time></span>
            </div>
            <span class="notification-icon">
                                <svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
                            </span>
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
        <li>
            <div class="author-thumb">
                <img src="img/avatar5-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
            </div>
            <span class="notification-icon">
                                    <svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
                                </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
        <li>
            <div class="author-thumb">
                <img src="img/avatar6-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
            </div>
            <span class="notification-icon">
                                    <svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
        <li>
            <div class="author-thumb">
                <img src="img/avatar7-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">Marina Valentine</a> commented on your new <a href="#" class="notification-link">profile status</a>.
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 10:07am</time></span>
            </div>
            <span class="notification-icon">
                                    <svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li> --}}
    </ul>
    
    <!-- ... end Notification List -->

</div>


<!-- Pagination -->

{{-- <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#">12</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav> --}}

@endsection

@push('styles')
    <link href="{{ asset('css/account/setting.css') }}" rel="stylesheet">
@endpush

@push('scriptsAfter')
	
@endpush