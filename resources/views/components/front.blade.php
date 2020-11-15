<x-master2>

  <x-preloader></x-preloader>

  @include('front._header')


  {{ $slot }}

  @include('front._footer')
  <a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>

</x-master2>
