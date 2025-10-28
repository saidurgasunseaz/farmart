@php Theme::layout('full-width'); @endphp

<section class="page-title" style="background-image:url(assets/images/main-slider/banner.png)">
    <div class="auto-container">
        <h2>Register</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Register</li>
        </ul>
    </div>
</section>


{!! Theme::partial('page-header', ['withTitle' => false, 'size' => 'xl']) !!}

{!! $form->renderForm() !!}