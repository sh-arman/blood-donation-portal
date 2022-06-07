<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ route('home') }}">Blood Donation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
      <div class="navbar-nav">

      </div>

      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{ route('donor_register') }}">Donor Registration</a>
        <a class="nav-item nav-link" href="{{ route('blood_bank') }}">Blood Bank</a>
        <a class="nav-item nav-link" href="{{ route('campaign') }}"">Campaign</a>
        <a class="nav-item nav-link" href="{{ route('blog') }}"">Blog</a>
        <a class="nav-item nav-link" href="{{ route('about') }}"">About Us</a>
      </div>

    </div>
</nav>
