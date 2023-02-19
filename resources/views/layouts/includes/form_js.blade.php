
@include('sweetalert::alert')
<!--select2 cdn-->
<script src="{{ asset('assets/libs/select2/select2.min.js')}}"></script>

<script src="{{ asset('assets/js/pages/select2.init.js')}}"></script>
<!-- profile-setting init js -->
<script src="{{ asset('assets/js/pages/profile-setting.init.js')}}"></script>

<!--Internal Fileuploads js-->
<script src="{{ asset('assets/libs/fileuploads/js/fileupload.js')}}"></script>
<script src="{{ asset('assets/libs/fileuploads/js/file-upload.js')}}"></script>

<!--Internal Fancy uploader js-->
<script src="{{ asset('assets/libs/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{ asset('assets/libs/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{ asset('assets/libs/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{ asset('assets/libs/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{ asset('assets/libs/fancyuploder/fancy-uploader.js')}}"></script>
<!-- swiper js -->
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
<!-- profile init js -->
<script src="{{ asset('assets/js/pages/profile-setting.init.js')}}"></script>

   <!-- multi.js -->
   <script src="{{ asset('assets/libs/multi.js/multi.min.js')}}"></script>
   <!-- autocomplete js -->
   <script src="{{ asset('assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js')}}"></script>

   <!-- init js -->
   <script src="{{ asset('assets/js/pages/form-advanced.init.js')}}"></script>
   <!-- input spin init -->
   <script src="{{ asset('assets/js/pages/form-input-spin.init.js')}}"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- dropzone js -->
<script src="{{ asset('assets/libs/dropzone/dropzone-min.js')}}"></script>
<script src="{{ asset('assets/js/pages/ecommerce-product-create.init.js')}}"></script>
<script src="{{ asset('assets/js/pages/form-file-upload.init.js')}}"></script>
    <!-- nouisliderribute js -->
    <script src="{{ asset('assets/libs/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('assets/libs/wnumb/wNumb.min.js')}}"></script>
    <!-- range slider init -->
    <script src="{{ asset('assets/js/pages/range-sliders.init.js')}}"></script>

  <!-- input flag init -->
  <script src="{{ asset('assets/js/pages/flag-input.init.js')}}"></script>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

<!-- prismjs plugin -->
<script src="{{ asset('assets/libs/prismjs/prism.js')}}"></script>

<script src="{{ asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#content' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
