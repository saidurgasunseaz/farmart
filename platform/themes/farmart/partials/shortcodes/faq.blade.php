 <div class="bg-white">
 <div class="faq-container bg-white">
     <div class="faq-header mb-0">
         <h2>Frequently Asked Questions</h2>
         <p>Find answers to common questions about our Moringa products and services</p>
     </div>
     <?php
     use Illuminate\Support\Str;
     $faq_categories = DB::table('faq_categories')->get();
     ?>
     <div class="faq-tabs">
         @foreach ($faq_categories as $index => $faq_category)
             <button class="tab-btn {{ $index === 0 ? 'active' : '' }}"
                 data-tab="{{ Str::slug($faq_category->name, '-') }}">
                 <i class="fas fa-shipping-fast"></i>
                 <?php echo  $faq_category->name ; ?>
             </button>
         @endforeach
     </div>

     <div class="faq-content">
         @foreach ($faq_categories as $index => $faq_category)
             @php
                 $faqs = DB::table('faqs')->where('category_id', $faq_category->id)->get();
             @endphp

             <div class="tab-content {{ $index === 0 ? 'active' : '' }}" id="{{ Str::slug($faq_category->name, '-') }}-tab">
                 <div class="faq-items">
                     <h2 class="tab-title"><?php echo  $faq_category->name ; ?></h2>

                     @foreach ($faqs as $index => $faq)
                         <div class="faq-item ">
                             <div class="faq-question">
                                 <h3>{{ $faq->question }}</h3>
                                 <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                             </div>
                             <div class="faq-answer {{ $index === 0 ? 'active' : '' }}" >
                                 {{ $faq->answer }}
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
         @endforeach

         <div class="contact-support">
             <h3>Still have questions?</h3>
             <p>
                 Our customer support team is here to help you with any questions about our
                 Moringa products and services.
             </p>
             <div class="support-buttons">
                 <a href="tel:+91 9090-7070-85" class="support-btn">
                     <i class="fas fa-phone"></i>
                     Call Support
                 </a>
                 <a href="mailto:tetraelements@gmail.com" class="support-btn secondary">
                     <i class="fas fa-envelope"></i>
                     Email Us
                 </a>
             </div>
         </div>
     </div>
 </div>
</div>
 {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col">
            @if ($title)
                <h2 class="text-center mb-4">{{ $title }}</h2>
            @endif
            @if (!empty($subtitle))
                <p class="text-center mb-4">{{ $subtitle }}</p>
            @endif
            <div class="row faqs-nav-tab">
                <div class="col-md-3">
                    <ul
                        class="nav nav-tabs mb-4"
                        role="tablist"
                    >
                        @foreach ($categories as $category)
                            <li
                                class="nav-item"
                                role="presentation"
                            >
                                <button
                                    class="nav-link @if ($loop->first) active @endif"
                                    id="faq-tab-{{ $loop->index }}"
                                    data-bs-toggle="tab"
                                    data-bs-target="#faq-content-{{ $loop->index }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="faq-content-{{ $loop->index }}"
                                    aria-selected="true"
                                >{{ $category->name }}</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-9">
                    <div
                        class="tab-content"
                        id="faq-tab-content"
                    >
                        @foreach ($categories as $category)
                            <div
                                class="tab-pane fade @if ($loop->first) show active @endif"
                                id="faq-content-{{ $loop->index }}"
                                role="tabpanel"
                                aria-labelledby="home-tab"
                            >
                                <div class="row row-cols-sm-2 row-cols-1">
                                    @foreach ($category->faqs->chunk(round($category->count() / 2)) as $faqs)
                                        <div class="col">
                                            @foreach ($faqs as $faq)
                                                <div class="faq-tab-wrapper mb-4 pb-4">
                                                    <h4 class="faq-title">{{ $faq->question }}</h4>
                                                    <div class="faq-desc">{!! BaseHelper::clean($faq->answer) !!}</div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
