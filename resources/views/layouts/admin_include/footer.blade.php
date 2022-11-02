{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="{{ asset('dashboard-assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/assets/js/app.js') }}"></script>
<script src="{{ asset('dashboard-assets/assets/js/custom.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/assets/js/dashboard/dash_1.js') }}"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('dashboard-assets/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/highlight/highlight.pack.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/select2/custom-select2.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/tagInput/tags-input.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/input-mask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/nfd45xwyplrjfw195pwfkplzpn4e5e01j7oj6bszbpryfv7t/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


 {{-- Jquery Validator --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!-- sweet alert -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 {{-- Select 2 Option CDN --}}
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<style>
   .is-invalid{
       color: red;
   }
   #password-error{
       color: red;

   }
   #email-error{
       color: red;

   }
   .swal2-container{
       z-index: 1000000;
   }
</style>
@stack('scripts')
