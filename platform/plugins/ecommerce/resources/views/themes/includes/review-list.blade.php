<div class="comments-area">
    @foreach ($reviews as $review)
    @continue(! $review->is_approved && auth('customer')->id() != $review->customer_id)

    @php
    $isCurrentCustomerReview = auth('customer')->check() && auth('customer')->id() == $review->customer_id;
    @endphp

    <!--Comment Box-->
    <div class="comment-box @if(! $review->is_approved) opacity-50 @endif">
        <div class="comment">
            <div class="author-thumb">
                <img src="{{ $review->customer_avatar_url }}" alt="{{ $review->display_name }}">
            </div>

            <div class="comment-inner">
                <div class="comment-info clearfix">
                    {{ $review->display_name }}
                    – {{ $review->created_at->format('M d, Y') }}:
                    @if ($isCurrentCustomerReview)
                    <span class="badge bg-primary">{{ __('Your Review') }}</span>
                    @endif
                    @if (! $review->is_approved)
                    <span class="text-warning small">{{ __('(Waiting for approval)') }}</span>
                    @endif
                </div>
                <div class="rating">
                    @if ($review->star)
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <=$review->star)
                            <span class="fa">★</span>
                            @else
                            <span class="fa">☆</span>
                            @endif
                        @endfor
                    @endif
                </div>

                <div class="text">
                    {{ $review->comment }}
                </div>

                @if ($review->images)
                <div class="review-item__images mt-3">
                    <div class="row g-1 review-images">
                        @foreach ($review->images as $image)
                        <a href="{{ RvMedia::getImageUrl($image) }}" class="col-3 col-md-2 col-xl-1 position-relative">
                            <img src="{{ RvMedia::getImageUrl($image, 'thumb') }}" alt="{{ $review->comment }}" class="img-thumbnail">
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                @if ($isCurrentCustomerReview)
                <div class="review-item__actions mt-2">
                    <a href="javascript:void(0)"
                        class="text-danger delete-review-btn"
                        data-review-id="{{ $review->id }}"
                        data-confirm-message="{{ __('Are you sure you want to delete your review?') }}"
                        title="{{ __('Delete your review') }}">
                        <i class="fa fa-trash"></i> {{ __('Delete') }}
                    </a>
                </div>
                @endif
            </div>
        </div>

        @if ($review->reply)
        <div class="review-item__reply mt-4 ms-5">
            <div class="comment">
                <div class="author-thumb">
                    <img src="{{ $review->reply->user->avatar_url }}" alt="{{ $review->reply->user->name }}">
                </div>
                <div class="comment-inner">
                    <div class="comment-info clearfix">
                        {{ $review->reply->user->name }}
                        <span class="badge bg-primary">{{ __('Admin') }}</span>
                        – {{ $review->reply->created_at->format('M d, Y') }}
                    </div>
                    <div class="text">
                        {{ $review->reply->message }}
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    @endforeach

    <div class="tp-pagination mt-3">
        {{ $reviews->links() }}
    </div>
</div>
