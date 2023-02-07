<style>
  div.whatsapp{
    background-size: cover;
    position: fixed;
    border: 10px;
    bottom: 20px;
    left: 20px;
    height: 45px;
    z-index: 10;
    padding: 0;
    background-color: #32bc3c;
    border-radius: 40px;
    transition: .3s;
    overflow: hidden;
  }
  div.whatsapp:hover{
    background-color: #fff;
  }
  div.whatsapp .btn-wa{
    transition: .3s;
  }
  div:hover.whatsapp .btn-wa{
    color: #32bc3c;
  }
</style>
<div class="whatsapp pt40 pb40 bg-color text-light">
  <div class="whatsapp-child d-flex align-items-center h-100">
      <a href="https://wa.me/+62{{ (int)$web_config['wa'] }}?text=saya%20ingin%20konsultasi%20tentang%20"
        class="btn-wa light px-3 d-flex justify-content-center align-items-center" target="_blank">
        <img src="{{ asset('assets/images/wa.png') }}" height="35px" class="me-2" alt="">
        {{ translate::translate('Contact Us') }}</a>
  </div>
</div>