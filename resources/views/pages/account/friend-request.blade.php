@extends('layouts.account')

@section('account-content')

<div class="ui-block">
    <div class="ui-block-title">
        <h6 class="title">Friend Requests</h6>
        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
    </div>
    
    <!-- Notification List Frien Requests -->
    
    <ul class="notification-list friend-requests">
        <li>
            <div class="author-thumb">
                <img src="img/avatar15-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
            </div>
            <span class="notification-icon">
                <a href="#" class="accept-request">
                    <span class="icon-add">
                        <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>
                    Accept Friend Request
                </a>

                <a href="#" class="accept-request request-del">
                    <span class="icon-minus">
                        <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>
                </a>

            </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
        <li>
            <div class="author-thumb">
                <img src="img/avatar16-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">Tony Stevens</a>
                <span class="chat-message-item">4 Friends in Common</span>
            </div>
            <span class="notification-icon">
                <a href="#" class="accept-request">
                    <span class="icon-add">
                        <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>
                    Accept Friend Request
                </a>

                <a href="#" class="accept-request request-del">
                    <span class="icon-minus">
                        <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>
                </a>

            </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
        <li class="accepted">
            <div class="author-thumb">
                <img src="img/avatar17-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.
            </div>
            <span class="notification-icon">
                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                            </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
        <li>
            <div class="author-thumb">
                <img src="img/avatar18-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
                <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                <span class="chat-message-item">9 Friends in Common</span>
            </div>
            <span class="notification-icon">
                <a href="#" class="accept-request">
                    <span class="icon-add">
                        <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>
                    Accept Friend Request
                </a>

                <a href="#" class="accept-request request-del">
                    <span class="icon-minus">
                        <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>
                </a>

            </span>
    
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </li>
    
    </ul>
    
    <!-- ... end Notification List Frien Requests -->
</div>

@endsection

@push('styles')
	
@endpush

@push('scriptsAfter')
	
@endpush