@component('mail::message')
  <h1>Email</h1>
  <p>Em anexo Os de manutenção! </p>

  @php
    // O nome do arquivo PDF anexado no e-mail
    $pdfFileName = 'registro_de_os.pdf';
  @endphp




@endcomponent
