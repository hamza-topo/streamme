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
                        <h2>@lang('PRIVACY')</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            <p>
                                Cookies & 3rd Party Advertisements
                                Google, as a third party vendor, uses cookies to serve ads on your site. 
                                Google's use of the DART cookie enables it to serve ads to your users based on their visit to your sites and other sites on the Internet. 
                                Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.
                                We allow third-party companies to serve ads and/or collect certain anonymous information when you visit our web site. These companies may use non-personally identifiable information (e.g., click stream information, browser type, time and date, subject of advertisements clicked or scrolled over) during your visits to this and other Web sites in order to provide advertisements about goods and services likely to be of greater interest to you. These companies typically use a cookie or third party web beacon to collect this information. To learn more about this behavioral advertising practice or to opt-out of this type of advertising,
                                you can visit //TODO:come back to set the advistors here link
                            </p>
                        </div>
                        <x-partial.contact></x-partial.contact>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.front>