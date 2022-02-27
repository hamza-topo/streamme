<x-layout.front>
    <x-slot name="seo">
        <meta name="description" content="{{isset($seo['description']) ? $seo['description'] : ''}}" />
        <title>{{isset($seo['title']) ? $seo['title'] : 'Home'}}</title>
    </x-slot>
    <x-slot name="css">
        <link rel="stylesheet" href="{{mix('/front/css/home.css')}}" type="text/css">
    </x-slot>
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__title">
                        <h2>@lang('CONTACT US')</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            <p>
                            If you have business inquiries or other questions, please fill out the following form to contact us or send email to contact.streamMe.io@gmail.com. Thank you.
                            </p>
                        </div>
                        <x-partial.contact></x-partial.contact>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.front>