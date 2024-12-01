<div class="footer">
  <div class="footer-area">
    <div class="footer-area-content">
      <div class="container">
        <div class="row ">
          @if (count($menu) > 0)
          <div class="col-md-3">
            <div class="menu">
              <h6>Menu</h6>
              <ul>
                @foreach ($menu as $item)
                <li><a href="{{ $item["href"] }}">{{ $item["text"] }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          @endif
          <div class="col-md-6 text-center">
            <img src="{{ asset("uploads/logo/logo.png") }}" alt="{{ config('app.sitesettings') }}" class="logo-white" />
            <p class="text-white text-justify mt-2"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright">
              <p>Copyright @ 2024</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>