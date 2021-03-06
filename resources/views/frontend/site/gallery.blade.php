@extends('frontend.site.layouts.plantilla',['titulo'=>'Galeria'])
@section('container')
<div class="probootstrap-page-wrapper">
  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
          <h1 class="mb0">Galería de la escuela</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-bg-white">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="portfolio-feed three-cols">
          <div class="grid-sizer"></div>
          <div class="gutter-sizer"></div>
          <div class="probootstrap-gallery">
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="{{asset ('img/img-s1-1.jpg')}}" itemprop="contentUrl" data-size="1000x632">
                <img src="{{asset ('img/img-s1-1.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="{{asset ('img/img-s1-2.jpg')}}" itemprop="contentUrl" data-size="1000x632">
              </a>
              <img src="{{asset ('img/img-s1-2.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="{{asset ('img/img-s1-3.jpg')}}" itemprop="contentUrl" data-size="1000x667">
                <img src="{{asset ('img/img-s1-3.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
              </a>
              <figcaption itemprop="caption description">Image caption here</figcaption>
            </figure>
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
              <a href="{{asset ('img/img_sm_3.1.jpg')}}" itemprop="contentUrl" data-size="1000x667">
                <img src="{{asset ('img/img_sm_3.1.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
            </a>
            <figcaption itemprop="caption description">Image caption here</figcaption>
          </figure>
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
            <a href="{{asset ('img/img_sm_5.jpg')}}" itemprop="contentUrl" data-size="1000x632">
              <img src="{{asset ('img/img_sm_5.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
            </a>
            <figcaption itemprop="caption description">Image caption here</figcaption>
          </figure>
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
            <a href="{{asset ('img/img-s1-3.jpg')}}" itemprop="contentUrl" data-size="1000x632">
              <img src="{{asset ('img/img-s1-3.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
            </a>
            <figcaption itemprop="caption description">Image caption here</figcaption>
          </figure>
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
            <a href="{{asset ('img/img-s1-1.jpg')}}" itemprop="contentUrl" data-size="1000x632">
              <img src="{{asset ('img/img-s1-1.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
            </a>
            <figcaption itemprop="caption description">Image caption here</figcaption>
          </figure>
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
            <a href="{{asset ('img/img-s1-1.jpg')}}" itemprop="contentUrl" data-size="1000x632">
              <img src="{{asset ('img/img-s1-1.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
            </a>
            <figcaption itemprop="caption description">Image caption here</figcaption>
          </figure>
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
            <a href="{{asset ('img/img-s1-2.jpg')}}" itemprop="contentUrl" data-size="1000x632">
              <img src="{{asset ('img/img-s1-2.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
            </a>
            <figcaption itemprop="caption description">Image caption here</figcaption>
          </figure>
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
            <a href="{{asset ('img/img-s1-3.jpg')}}" itemprop="contentUrl" data-size="1000x667">
              <img src="{{asset ('img/img-s1-3.jpg')}}" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
            </a>
            <figcaption itemprop="caption description">Image caption here</figcaption>
          </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</div>
<!-- Photoswipe Modal -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">

      <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
      </div>

      <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
              <div class="pswp__counter"></div>
              <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
              <button class="pswp__button pswp__button--share" title="Share"></button>
              <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
              <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
              <div class="pswp__preloader">
                  <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                      <div class="pswp__preloader__donut"></div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
              <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
          </button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
          </button>
          <div class="pswp__caption">
              <div class="pswp__caption__center"></div>
          </div>
      </div>
  </div>
</div>
@endsection
