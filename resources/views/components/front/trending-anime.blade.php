<div class="trending__product">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="section-title">
                <h4>@lang('Trending Now')</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="btn__all">
                <a href="#" class="primary-btn">@lang('View All') <span class="arrow_right"></span></a>
            </div>
        </div>
    </div>
    <div class="row">
        @for($i=0;$i<4;$i++)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" style="background-image:url('https://api.lorem.space/image/game?w=150&h=220')">
                    <div class="ep">18 / 18</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="product__item__text">
                    <ul>
                        <li>Active</li>
                        <li>Movie</li>
                    </ul>
                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>