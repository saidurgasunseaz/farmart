@php
    $icon = Arr::get($formOptions, 'icon');
    $heading = Arr::get($formOptions, 'heading');
    $description = Arr::get($formOptions, 'description');
    $bannerDirection = Arr::get($formOptions, 'bannerDirection', 'vertical');

    $banner = Arr::get($formOptions, 'banner');

    if (! $banner) {
        $bannerDirection = 'vertical';
    }
@endphp
<style>
    .form-label{
        float:left;
    }
    .form-check-label{
        float: left;
    }
</style>
@if (Arr::get($formOptions, 'has_wrapper', 'yes') === 'yes')
    <!-- <div class="container">
        <div @class(['row justify-content-center py-5'])>
            <div @class(['col-xl-6 col-lg-8' => $bannerDirection === 'vertical', 'col-lg-10' => $bannerDirection === 'horizontal'])>
                @endif
                <div @class(['auth-card', 'card' => $bannerDirection === 'vertical', 'auth-card__horizontal row' => $bannerDirection === 'horizontal'])>
                    @if ($banner)
                        @if ($bannerDirection === 'horizontal')
                            <div class="col-md-6 auth-card__left">
                        @endif
                            {{ RvMedia::image($banner, $heading ?: '', attributes: ['class' => 'auth-card__banner']) }}
                        @if ($bannerDirection === 'horizontal')
                        </div>
                        @endif
                    @endif

                    @if ($bannerDirection === 'horizontal')
                    <div class="col-md-6 auth-card__right">
                    @endif -->
                    <section class="login-section">
			<div class="auto-container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="login-form-container">
							<div class="login-header text-center">
                        @if ($icon || $heading || $description)
                            @if ($heading)
                                <h2>{{ $heading }}</h2>
                            @endif
                            @if ($description)
                                <p>{{ $description }}</p>
                            @endif
                        @endif
                        <div class="login-form">
                            @if ($showStart)
                                {!! Form::open(Arr::except($formOptions, ['template'])) !!}
                            @endif

                            @if (session()->has('status'))
                                <div role="alert" class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @elseif (session()->has('auth_error_message'))
                                <div role="alert" class="alert alert-danger">
                                    {{ session('auth_error_message') }}
                                </div>
                            @elseif (session()->has('auth_success_message'))
                                <div role="alert" class="alert alert-success">
                                    {{ session('auth_success_message') }}
                                </div>
                            @elseif (session()->has('auth_warning_message'))
                                <div role="alert" class="alert alert-warning">
                                    {{ session('auth_warning_message') }}
                                </div>
                            @endif

                            @if ($showFields)
                                {{ $form->getOpenWrapperFormColumns() }}

                                @foreach ($fields as $field)
                                    @continue(in_array($field->getName(), $exclude))

                                    {!! $field->render() !!}
                                @endforeach

                                {{ $form->getCloseWrapperFormColumns() }}
                            @endif

                            @if ($showEnd)
                                {!! Form::close() !!}
                            @endif

                            @if ($form->getValidatorClass())
                                @push('footer')
                                    {!! $form->renderValidatorJs() !!}
                                @endpush
                            @endif
                        </div>

                    @if ($bannerDirection === 'horizontal')
                    </div>
                    @endif
                </div>
                <!-- @if (Arr::get($formOptions, 'has_wrapper', 'yes') === 'yes') -->
            </div>
        </div>
    </div>
    </div>
</section>
@endif
