<!DOCTYPE html>
<html>

<head>
  <title>ORDER - VIA WHATSAPP</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .container {
      margin-top: 10px;
      height: 100vh;
    }

    .form {
      display: flex;
      flex-direction: column;
      box-shadow: 10px 13px 27px -5px rgba(0, 0, 0, 0.6);
      -webkit-box-shadow: 10px 13px 27px -5px rgba(0, 0, 0, 0.6);
      -moz-box-shadow: 10px 13px 27px -5px rgba(0, 0, 0, 0.6);
    }

    .title {
      text-align: center;
      font-size: 25px;
      margin-top: 20px;
    }

    .panel {
      border: 1px solid #ffb03b;
    }

    .panel-heading {
      text-align: center;
      letter-spacing: 1px;
      font-weight: 600;
      background-color: #ffb03b;
    }

    .btn {
      width: 100%;
      background-color: #ffb03b;
      color: #000;
      letter-spacing: 1px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="form col-lg-6 col-lg-offset-3">
      <h4 class="title">Create Form Order Checkout To WhatsApp</h4>
      <div class="panel">
        <div class="panel-heading">
          Checkout To WhatsApp
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" id="name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" id="email">
          </div>
          <div class="form-group">
            <label>WhatsApp</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number / WhatsApp" id="phone">
          </div>
          <div class="form-group">
            <label>Porsi</label>
            <input type="text" name="porsi" class="form-control" placeholder="Porsi" id="porsi">
          </div>
          <div class="form-group">
            <label>Select Product</label>
            <select name="product" class="form-control" id="product">
              <option value="">-- Select Product --</option>
              <option value="TOFUCHI">TOFUCHI</option>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="description" class="form-control" rows="3" id="description"></textarea>
          </div>
          <div class="form-group">
            <button class="btn send">Order via WhatsApp</button>
          </div>

          <div id="text-info"></div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).on('click', '.send', function() {
      /* Inputan Formulir */
      var input_name = $("#name").val(),
        input_email = $("#email").val(),
        input_phone = $("#phone").val(),
        input_product = $("#product").val(),
        input_porsi = $("#porsi").val(),
        input_description = $("#description").val();

      /* Pengaturan Whatsapp */
      var walink = 'https://web.whatsapp.com/send',
        phone = '6285920030248',
        text = 'Halo saya ingin memesan ',
        text_yes = 'Your order has been sent successfully.',
        text_no = 'fill out the form first.';

      /* Smartphone Support */
      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var walink = 'whatsapp://send';
      }

      if (input_name != "" && input_phone != "" && input_product != "") {
        /* Whatsapp URL */
        var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
          '*Nama* : ' + input_name + '%0A' +
          '*Alamat Email* : ' + input_email + '%0A' +
          '*Nomor Kontak / Whatsapp* : ' + input_phone + '%0A' +
          '*Produk* : ' + input_product + '%0A' +
          '*Porsi* : ' + input_porsi + '%0A' +
          '*Alamat* : ' + input_description + '%0A';

        /* Whatsapp Window Open */
        window.open(checkout_whatsapp, '_blank');
        document.getElementById("text-info").innerHTML = '<div class="alert alert-success">' + text_yes + '</div>';
      } else {
        document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">' + text_no + '</div>';
      }
    });
  </script>
</body>

</html>