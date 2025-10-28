@php
$version = EcommerceHelper::getAssetVersion();
Theme::asset()->add('front-review-css', 'vendor/core/plugins/ecommerce/css/front-review.css', version: $version);
Theme::asset()->add('ecommerce-review-css', 'vendor/core/plugins/ecommerce/css/review.css', version: $version);
Theme::asset()->container('footer')->add('ecommerce-review-js', 'vendor/core/plugins/ecommerce/js/review.js', ['jquery'], version: $version);
@endphp

<x-core::form :url="route('public.reviews.create')" method="post" class="ecommerce-form-review-product product-review-container" :files="true">
    <input name="product_id" type="hidden" value="{{ $product ? $product->id : '' }}">
    <!-- <div class="rating_modal">
        <div class="" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fal fa-times"></i>
                        </button>
                    <div class="modal-body">
                        <div class="single_review_input_area">
                            <h3>Review this product</h3>
                            <form action="#">
                                <div class="select_rating">
                                    <span>Your Rating:</span>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single_input">
                                            <label>Your Comment</label>
                                            <textarea rows="6" placeholder="Write your eview here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="img_upload">
                                            <div class="gallery">
                                                <a class="cam" href="javascript:void(0)"><span><i
                                                            class="fas fa-image"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="common_btn">Submit Review <i
                                                class="fas fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <h2 class="fs-5 fw-semibold ecommerce-product-name mb-3" id="product-review-modal-label">
        {!! BaseHelper::clean($product ? $product->name : '') !!}
    </h2>
    <div class="">
        <div class="" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="">
                <div class="modal-content1">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fal fa-times"></i>
                            </button> -->
                    <div class="modal-body">
                        <div class="single_review_input_area">
                            <h3>Review this product</h3>
                            <form action="#">
                                <div class="select_rating">
                                    <span>Your Rating:</span>
                                   <div class="rating-stars">
    @for ($i = 5; $i >= 1; $i--)
        <input type="radio" id="rating-star-{{ $i }}" name="star" value="{{ $i }}">
        <label for="rating-star-{{ $i }}" title="{{ $i }} stars">
            <i class="fas fa-star"></i>
        </label>
    @endfor
</div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single_input">
                                            <label>Your Comment</label>
                                            <textarea
                                                id="txt-comment"
                                                name="comment"
                                                :required="true"
                                                rows="5"
                                                :placeholder="__('Write your review')"
                                                aria-describedby="review-help"></textarea>
                                        </div>
                                        <!-- <textarea rows="6" placeholder="Write your eview here"></textarea> -->
                                    </div>
                                    <div class="col-12">
                                        <div class="img_upload">
                                            <div class="gallery position-relative text-center">
                                                <a class="cam d-inline-block" href="javascript:void(0)">
                                                    <span><i class="fas fa-image fa-2x text-muted"></i></span>
                                                </a>

                                                <!-- Hidden file input -->
                                                <input
                                                    type="file"
                                                    name="images[]"
                                                    accept="image/png,image/jpeg,image/jpg"
                                                    multiple
                                                    class="position-absolute top-0 start-0 w-100 h-100 opacity-0"
                                                    style="cursor: pointer;"
                                                    data-max-files="{{ EcommerceHelper::reviewMaxFileNumber() }}"
                                                    data-max-size="{{ EcommerceHelper::reviewMaxFileSize(true) }}"
                                                    aria-label="{{ __('Upload review photos') }}">
                                            </div>
                                            <div id="preview-images" class="d-flex flex-wrap gap-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="alert alert-warning alert-message d-none" role="alert"></div>
                                </div>
                                <div class="col-12">
                                    <button
                                        class="common_btn"
                                        type="submit">
                                        <i
                                            class="fas fa-long-arrow-right"></i>
                                        <span>{{ __('Submit Review') }}</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="mb-4">
        <h2 class="fs-5 fw-semibold ecommerce-product-name mb-3" id="product-review-modal-label">
            {!! BaseHelper::clean($product ? $product->name : '') !!}
        </h2>

        <div class="d-flex align-items-center mb-3">
            <label class="form-label mb-0 required" for="rating">{{ __('Your rating:') }} 1</label>
            <div class="form-rating-stars ms-2">
                @for ($i = 5; $i >= 1; $i--)
                    <input
                        class="btn-check"
                        id="rating-star-{{ $i }}"
                        name="star"
                        type="radio"
                        value="{{ $i }}"
                        @checked($i === 5)
                    >
                    <label for="rating-star-{{ $i }}" title="{{ $i }} stars">
                        <x-core::icon name="ti ti-star-filled" />
                    </label>
                @endfor
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-3">
            <x-core::form.label for="txt-comment" class="required">
                {{ __('Review') }}
            </x-core::form.label>
            <x-core::form.textarea
                id="txt-comment"
                name="comment"
                :required="true"
                rows="5"
                :placeholder="__('Write your review')"
                aria-describedby="review-help"
            />
            <x-core::form.helper-text id="review-help">
                {{ __('Share your experience with this product to help other customers.') }}
            </x-core::form.helper-text>
        </div>
        <div class="col-12 mb-3">
            <x-core::form.label class="mb-2">
                {{ __('Photos') }} <span class="text-muted">({{ __('Optional') }})</span>
            </x-core::form.label>

            <x-core::custom-template id="ecommerce-review-image-template">
                <span class="ecommerce-image-viewer__item" data-id="__id__">
                    <img src="{{ RvMedia::getDefaultImage() }}" alt="{{ __('Preview') }}" class="img-responsive d-block">
                    <span class="ecommerce-image-viewer__icon-remove image-viewer__icon-remove" title="{{ __('Remove image') }}">
                        <x-core::icon name="ti ti-x" class="ecommerce-icon" />
                    </span>
                </span>
            </x-core::custom-template>

            <div class="ecommerce-image-upload__viewer d-flex">
                <div class="ecommerce-image-viewer__list position-relative">
                    <div class="ecommerce-image-upload__uploader-container">
                        <div class="d-table">
                            <div class="ecommerce-image-upload__uploader border border-2 border-dashed rounded p-4 text-center">
                                <x-core::icon name="ti ti-photo-plus" class="ecommerce-icon ecommerce-image-upload__icon mb-2 text-muted" style="font-size: 2rem;" />
                                <div class="ecommerce-image-upload__text fw-medium mb-1">{{ __('Upload photos') }}</div>
                                <input
                                    class="ecommerce-image-upload__file-input"
                                    name="images[]"
                                    data-max-files="{{ EcommerceHelper::reviewMaxFileNumber() }}"
                                    data-max-size="{{ EcommerceHelper::reviewMaxFileSize(true) }}"
                                    data-max-size-message="{{ trans('validation.max.file', ['attribute' => '__attribute__', 'max' => '__max__']) }}"
                                    type="file"
                                    accept="image/png,image/jpeg,image/jpg"
                                    multiple="multiple"
                                    aria-label="{{ __('Upload review photos') }}"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-core::form.helper-text class="mt-2">
                {{ __('You can upload up to :total photos, each photo maximum size is :max kilobytes', [
                    'total' => EcommerceHelper::reviewMaxFileNumber(),
                    'max' => EcommerceHelper::reviewMaxFileSize(true),
                ]) }}
            </x-core::form.helper-text>
        </div>
        <div class="col-12 mb-3">
            <div class="alert alert-warning alert-message d-none" role="alert"></div>
        </div>

        <div class="col-12">
            <button
                class="btn btn-primary px-4 py-2 d-flex align-items-center gap-2 mb-3"
                type="submit"
            >
                <x-core::icon name="ti ti-send" />
                <span>{{ __('Submit Review') }}</span>
            </button>

            <div class="text-muted small mt-2 mt-sm-0">
                <x-core::icon name="ti ti-info-circle" class="me-1" />
                {{ __('Your email address will not be published. Required fields are marked *') }}
            </div>
        </div>
    </div> -->
</x-core::form>
<style>
    #preview-images img {
        width: 100px !important;
        /* height: 100px; */
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #ddd;
    }

    #preview-images .preview-wrapper {
        position: relative;
        display: inline-block;
    }

    #preview-images .remove-btn {
        position: absolute;
        top: -6px;
        right: -6px;
        width: 20px;
        height: 20px;
        background: red;
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 18px;
        font-size: 14px;
        cursor: pointer;
    }

      .rating-stars {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
        gap: 5px;
    }

    .rating-stars input {
        display: none;
    }

    .rating-stars label {
        font-size: 30px;
        color: #ccc; /* default gray */
        cursor: pointer;
        transition: color 0.2s;
    }

    .rating-stars label.hovered,
    .rating-stars label.selected {
        color: gold;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const input = document.querySelector('.img_upload input[type="file"]');
        const preview = document.getElementById('preview-images');

        input.addEventListener('change', function(event) {
            const files = event.target.files;

            // Loop through selected files and add them to the preview list
            Array.from(files).forEach(file => {
                if (!file.type.startsWith('image/')) return;

                const reader = new FileReader();
                reader.onload = e => {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'position-relative d-inline-flex';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'rounded border';
                    img.style.width = '100px !important';
                    img.style.height = '100px';
                    img.style.objectFit = 'cover';

                    // Create delete icon
                    const delBtn = document.createElement('span');
                    delBtn.innerHTML = '&times;';
                    delBtn.className = 'position-absolute top-0 end-0 translate-middle bg-danger text-white rounded-circle d-flex justify-content-center align-items-center';
                    delBtn.style.width = '20px';
                    delBtn.style.height = '20px';
                    delBtn.style.cursor = 'pointer';
                    delBtn.style.fontSize = '14px';
                    delBtn.title = 'Remove image';

                    delBtn.addEventListener('click', () => wrapper.remove());

                    wrapper.appendChild(img);
                    wrapper.appendChild(delBtn);
                    preview.appendChild(wrapper);
                };
                reader.readAsDataURL(file);
            });

            // Clear input value so same file can be re-selected later
            input.value = '';
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const labels = Array.from(document.querySelectorAll('.rating-stars label'));
    const inputs = Array.from(document.querySelectorAll('.rating-stars input'));
    let selectedIndex = -1;

    labels.forEach((label, index) => {
        // Hover effect
        label.addEventListener('mouseover', () => {
            labels.forEach((l, i) => l.classList.toggle('hovered', i <= index));
        });

        label.addEventListener('mouseout', () => {
            labels.forEach((l, i) => {
                l.classList.remove('hovered');
                l.classList.toggle('selected', i <= selectedIndex);
            });
        });

        // On click
        label.addEventListener('click', () => {
            selectedIndex = index;
            const value = inputs[index].value;

            labels.forEach((l, i) => {
                l.classList.toggle('selected', i <= index);
            });

            console.log('Selected Rating:', value); // optional
        });
    });
});
</script>