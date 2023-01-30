
<div id="topbar" class="topbar-noborder">
    <div class="container d-flex">
        <div class="col-2">
            <div class="topbar-left sm-hide">
                <span class="topbar-widget tb-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </span>
            </div>
        </div>
        {{-- <div class="col-7  d-flex align-items-center">
            <marquee direction="left" class="w-100 text-light" height="25" style="background: #111">Pemerintah Tetapkan
                Ketentuan Terbaru Mengenai Pembebasan dan Tidak Dipungutnya PPN dan/atau PPnBM terhadap Barang dan/atau
                Jasa Kena Pajak Tertentu dari Luar Daerah Pabean</marquee>
        </div> --}}
        <div class="col-10">
            <div class="topbar-right">
                <div class="topbar-right align-items-center">
                    <span class="topbar-widget"><a href="#">{{ __('general.privacy_policy') }}</a></span>
                    {{-- <span class="topbar-widget"><a href="#">{{ __('general.request_quote') }}</a></span>
                    <span class="topbar-widget"><a href="#">FAQ</a></span> --}}
                    <span class="topbar-widget"><a href="{{ route('login') }}">{{ translate::translate('Admin Area') }}</a></span>
                    <span class="topbar-widget"><a href="javascript" class="text-capitalize">{{ translate::translate('language') }} :</a></span>
                    <div class="lang-div d-flex">
                        <select class="form-select d-flex py-0" id="lang" aria-label="Default select example" style="background: black; color: white;">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>Eng</option>
                            <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Ind</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@push('script')
    <script>
        var url = "{{ route('change.lang') }}";
        $('#lang').change(function(event){
            window.location.href = url+"?lang="+$(this).val();
        })
    </script>
@endpush
