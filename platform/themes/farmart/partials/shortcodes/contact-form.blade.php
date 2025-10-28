<!-- <div class="{{ $cssClass ?? 'ms-md-5 ps-md-5' }}"> -->
    <!-- <div class="{{ $cssClass ?? 'ms-md-5 ps-md-5' }}"> -->
    <!-- <h2>{{ __('Drop Us A Line') }}</h2> -->

    <!-- <form method="POST" action="{{ route('public.send.contact') }}" id="contact-form" class="mt-5 contact-form">
    @csrf
    <div class="row clearfix">

        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <input type="text" name="name" class="form-control" id="name" placeholder="First Name" required>
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <input type="email" name="email" class="form-control" id ="email" placeholder="Email address" required>
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <input type="text" name="address" class="form-control" id="address"  placeholder="Address" required>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required>
        </div>

        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <textarea name="message" class="form-control" placeholder="Your Message" required></textarea>
        </div>

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary theme-btn btn-style-one">
                <span class="btn-wrap">
                    <span class="text-one">Send Message</span>
                    <span class="text-two">Send Message</span>
                </span>
            </button>
        </div>

    </div>
</form> -->
<style>
    .form-control{
        margin-bottom:10px;
        line-height:2.5;

    }
    input[type="checkbox"]{
        padding: 0px !important;
    }
</style>

    {!!
        $form
            ->setFormOption('class', 'mt-5 contact-form')
            ->setFormInputClass('form-control')
            ->setFormLabelClass('d-none sr-only')
            ->modify(
                'submit',
                'submit',
                Botble\Base\Forms\FieldOptions\ButtonFieldOption::make()
                    ->cssClass('btn btn-primary')
                    ->label(__('Send message'))
                    ->wrapperAttributes(['class' => 'mt-4'])
                    ->toArray(),
                true
            )
            ->renderForm()
    !!}
<!-- </div> -->
