@component('mail::message')
  <h1>Email</h1>

  @php
    // O nome do arquivo PDF anexado no e-mail
    $pdfFileName = 'registro_de_os.pdf';
  @endphp

  @component('mail::button', ['url' => route('exibePdf')])
    Download PDF
  @endcomponent


@endcomponent
