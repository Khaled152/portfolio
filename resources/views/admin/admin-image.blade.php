<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Preview Image Before Upload | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/image-style.css') }}">
</head>

<body>
    <div class="center">
        <div class="form-input">
          <label for="file-ip-1">Upload Image</label>
          <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
          <div class="preview">
            <img id="file-ip-1-preview">
          </div>
        </div>
      </div>

    <script src="{{ asset('js/image.js') }}"></script>
</body>

</html>
