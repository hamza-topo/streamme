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
                        <h2>@lang('Legal Disclaimer')</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            <p>
                                The author is not responsible for any contents linked or referred to from his pages
                                , If any damage occurs by the use of information presented there, only the author
                                of the respective pages might be liable, not the one who has linked to these pages.
                                <span style="color: #ff0000;"><strong>{{ config('app.name') }} doesn't host any content</strong></span>
                            </p>
                            <p>
                                All {{ config('app.name') }} does is link or embed content that was uploaded to popular Online
                                Video hosting sites like Veoh.com / Megavideo.com / Youtube.com / Google Video.
                                All youtube/veoh/megavideo/googlevideo users signed a contract with the sites when
                                they set up their accounts which forces them not to upload illegal content. By clicking
                                on any Links to videos while surfing on {{ config('app.name') }} you watch content hosted
                                on third parties and {{ config('app.name') }} cant take the responsibility for any content
                                hosted on other sites.
                            </p>
                            <p>
                                We do not upload any videos nor do we know who and where videos are coming from.
                                We do not promote any illegal conduct of any kind. Links to the videos are submitted
                                by users and managed by users.
                            </p>
                            <h2>
                                <span><span style="color: #ff6600;">DMCA Notice of Copyright Infringement</span></span>
                            </h2>
                            <p>
                                <strong>KissAnime is an online service provider as defined in the Digital Millennium
                                    Copyright Act.<br>
                                </strong>
                                <br>
                                We provide legal copyright owners with the ability to self-publish on the Internet
                                by uploading, storing and displaying various types of media. We do not actively
                                monitor, screen or otherwise review the media which is uploaded to our servers by
                                users of the service.<br>
                                <strong>We take copyright violation very seriously and will vigorously protect the rights
                                    of legal copyright owners.</strong><br>
                                If you are the copyright owner of content which appears on the KissAnime website
                                and you did not authorize the use of the content you must notify us in writing in
                                order for us to identify the allegedly infringing content and take action.
                            </p>
                            <p>
                                <span style="color: #ff0000;"><strong>We will be unable to take any action if you do
                                        not provide us with the required information</strong></span>, <strong>so please fill
                                    out all fields accurately and completely</strong>. You may make a written
                                notice via e-mail, facsimile or postal mail to our DMCA Agent as listed below. Your
                                written notice must include the following:
                            </p>
                        </div>
                        <x-partial.contact></x-partial.contact>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.front>