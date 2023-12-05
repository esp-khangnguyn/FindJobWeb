@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/create-job.css')}}">
<main id="main">
  <div data-aos="fade" class="page-title">
    <div class="heading ps-4 ">
      <h1 class="text-white ">Đăng tin tuyển dụng</h1>
    </div>
  </div>
  <section>
      <div class="container">
        <form action="/submit-form" method="post">
          <div class="form-floating mb-4">
            <h4>Tiêu đề công việc</h4>
            <div class="editor" contenteditable="true"></div>
          </div>
          <div class="form-floating mb-4">
            <h4>Điểm mạnh của công ty</h4>
            <div class="editor"  contenteditable="true"></div>
          </div>
          <div class="form-floating mb-4">
            <h4>Mô tả công việc</h4>
            <div class="editor"  contenteditable="true"></div>
          </div>
          <div class="form-floating mb-4">
            <h4>Yêu cầu công việc</h4>
            <div class="editor"  contenteditable="true"></div>
          </div>
          <div class="form-floating mb-4">
            <h4>Tại sao bạn lại làm việc tại đây</h4>
            <div class="editor"  contenteditable="true"></div>
          </div>
          <div class="form-floating mb-4">
            <h4>Điểm mạnh của công ty</h4>
            <div class="editor"  contenteditable="true"></div>
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" id="luong" name="luong" placeholder="Nhập lương">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Active
            </label>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Unactive
            </label>
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Đăng tin">
          </div>
        </form>
      </div>
  </section>
  <script>
    var elements = document.getElementsByClassName('editor');
    for (var i = 0; i < elements.length; i++) {
    CKEDITOR.replace( elements[i],{
      toolbar: [
        { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
        { name: 'editing', items: [ 'Scayt' ] },
        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
        { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
        { name: 'tools', items: [ 'Maximize' ] },
        { name: 'document', items: [ 'Source' ] },
        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'Subscript', 'Superscript' ] },
        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
        { name: 'styles', items: [ 'Styles', 'Format' ] },
        { name: 'about', items: [ 'About' ] }
    ]
    });
  }
</script>
</main>
@endsection