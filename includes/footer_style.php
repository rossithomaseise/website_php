<!-- Footer -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    /*min-height: 100vh;*/
    display: flex;
    flex-direction: column;
    margin: 0;
    padding: 0;
}
/*footer{
    margin-top: auto;
}*/

a{
  color: #009DCC;
}
a:hover{
  color:#0055A4;
}

</style>
<!--
<footer id="footer" class="text-center text-lg-start bg-light text-muted">
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Bouygues Telecom
          </h6>
          <p> Site réalisé par Thomas Rossi </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p>
          <p><i class="fas fa-phone me-3"></i>01 44 27 73 13</p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Lieu</h6>
          <p><i class="fas fa-home me-3"></i> 13-15 Av. du Maréchal Juin, 92360 Meudon</p>
        </div>
      </div>
    </div>
  </section>

  
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2); position: absolute; left: 0; right: 0;">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://www.bouyguestelecom.fr/choisir-bouygues-telecom/">BouyguesTelecom.fr</a>
  </div>
</footer>

-->


<footer style="background-color: #474545;margin-bottom:-40px;margin-top: auto;">
  <div class="container">
    <div class="row_footer">
      <div class="col-md-12">
        <h4 style="color: white;padding-top:2vh;font-size: 1em;">Contactez-nous</h4>
        <!--<form action="sendemail.php" method="post">-->
        <form action="" method="post">
          <div class="form-group" >
            <input type="text" name="name" placeholder="Nom" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" placeholder="Adresse email" class="form-control" required>
          </div>
          <div class="form-group">
            <textarea name="message" placeholder="Votre message" class="form-control" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Envoyer</button>
        </form>
      </div>
    </div>
    <!--<hr>-->
    <div class="row_footer text-center" style="font-size: 1em;">
      <div class="col-md-12">
      <ul class="icons">
      <li><a href="https://twitter.com/bouyguestelecom" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
      <li><a href="https://www.facebook.com/bouyguestelecom/?locale=fr_FR" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
      <li><a href="https://www.instagram.com/bouyguestelecom/?hl=fr" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
      <li><a href="https://fr.linkedin.com/company/bouygues-telecom?original_referer=https%3A%2F%2Fwww.google.com%2F" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
      <li><a href="https://www.bouyguestelecom.fr/choisir-bouygues-telecom/" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
    </ul>
    </div>
  </div>

    <div class="row text-center" id="large-screen" style="font-size: 1em;display: none;padding-bottom: 0.3vh;">
      <div class="col-md-12">
        <p style="color: white;">&copy; 2023 Bouygues Telecom - Tous droits réservés &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; Site réalisé par <a href="https://www.linkedin.com/in/thomas-rossi-2839791bb">Thomas Rossi</a></p>
      </div>
    </div>
  </div>

  <div class="row_footer text-center" id="small-screen" style="display: none;padding-bottom: 0.3vh;">
      <div class="col-md-12">
        <p style="color: white;">&copy; 2023 Bouygues Telecom - Tous droits réservés</p>
        <p style="color: white;"> Site réalisé par <a href="https://www.linkedin.com/in/thomas-rossi-2839791bb">Thomas Rossi</a></p>
      </div>
    </div>
  </div>

    <script>
    var largeScreenDiv = document.getElementById("large-screen");
    var smallScreenDiv = document.getElementById("small-screen");

    function showHideDiv() {
      if (window.innerWidth > 767) {
        largeScreenDiv.style.display = "block";
        smallScreenDiv.style.display = "none";
      } else {
        largeScreenDiv.style.display = "none";
        smallScreenDiv.style.display = "block";
      }
    }

    showHideDiv(); // appel de la fonction au chargement de la page

    window.addEventListener("resize", showHideDiv); // appel de la fonction lors du redimensionnement de la fenêtre
  </script>
</footer>

<style>

  main input[type=email]:focus,
  main input[type=password]:focus,
  main input[type=text]:focus,
  main input[type=url]:focus,
  main textarea:focus {
    border: 0;
  }

  .embed-responsive-16by9-fix-contact-form::before {
    height: 450px;
  }

  @media (min-width:580px) {

    .modal-contact-form-fix,
    .modal-contact-form-fix * {

      box-sizing: content-box !important;
    }

  }

  @media (min-width: 1400px) {
    #modalPricing .modal-dialog {

      max-width: 80vw;
    }
  }

</style>

<div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="text-center font-weight-bold mb-5">
          <p><a href="https://mdbootstrap.com/support/"></a></p>
          <p><a href="https://mdbootstrap.com/general/license/"></a></p>
        </div>


        <form id="contact-form" name="contact-form"
          action="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/contact-form-setup.php"
          method="POST" onsubmit="return validateForm()">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="name" name="name" class="form-control validate">
            <label data-error="wrong" data-success="right" for="name"></label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="email" name="email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="email"></label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="subject" name="subject" class="form-control validate">
            <label data-error="wrong" data-success="right" for="subject"></label>
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <textarea type="text" id="message" name="message" class="md-textarea form-control" rows="4"></textarea>
            <label data-error="wrong" data-success="right" for="message"></label>
          </div>
        </form>
      </div>
      <p class="text-center" id="status"></p>
      <div class="modal-footer d-flex justify-content-center">

      <button class="btn btn-info"  onclick="validateForm()"><i
            class="fas fa-paper-plane-o ml-1"></i></button>

      </div>
    </div>
  </div>
</div>

<span id="dpl-mdb5-cookies-modal"></span>
<span id="dpl-newmdb-docs-snippets-modal"></span>
<span id="dpl-newmdb-alert-technology-change"></span>

<div id="dom-target-fb" style="display: none;">
</div>
<div id="dom-target-tw" style="display: none;">
</div>
<div id="dom-target-gp" style="display: none;">
</div>


<div
    class="modal fade"
    id="apiRestrictedModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                
                <section>
                    <div class="text-center">
                        <h3 class="font-weight-bold border border-primary p-3 mb-3">Access restricted</h3>

                        <h5><strong>To view this section you must have an active PRO account</strong></h5>

                        <p>
                            <strong>Log in</strong> to your account or
                            <strong>purchase an MDB5 PRO subscription</strong> if you don't have one.
                        </p>

                        <a class="btn btn-primary me-1 auth-modal-toggle" data-auth-modal-tab="sign-in" data-dismiss="modal">Login</a>
                        <a
                          class="btn btn-secondary"
                          target="_blank"
                          
                            href = "https://mdbootstrap.com/docs/standard/pro/"
                          
                          role="button"
                        >Buy MDB Pro</a>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
  const CONFIG = {
    docsApiUrl: "https://mdbootstrap.com/api/docs"
  };

  const supportedLanguages = {
    en: {
      flag: 'united kingdom',
      name: 'English'
    },
    cn: {
      flag: 'china',
      name: '中文'
    }
  };

  function getSiteLanguage() {
    const [, language ] = location.pathname.split('/');
    switch (language) {
      case 'cn': return 'cn';
      case 'es': return 'cn';
      default: return 'en';
    }
  }

  function getCurrentTechnology(url) {
    const currentUrl = url || location.pathname;
    switch (true) {
      case (currentUrl.indexOf('/docs/standard') === 0): return 'standard';
      case (currentUrl.indexOf('/docs/angular') === 0): return 'b5-angular';
      case (currentUrl.indexOf('/docs/b5/angular') === 0): return 'b5-angular';
      case (currentUrl.indexOf('/docs/react') === 0): return 'b5-react';
      case (currentUrl.indexOf('/docs/b5/react') === 0): return 'b5-react';
      case (currentUrl.indexOf('/docs/b5/vue') === 0): return 'b5-vue';
      case (currentUrl.indexOf('/docs/b4/jquery') === 0): return 'jquery';
      case (currentUrl.indexOf('/docs/b4/angular') === 0): return 'angular';
      case (currentUrl.indexOf('/docs/b4/react') === 0): return 'react';
      case (currentUrl.indexOf('/docs/vue') === 0): return 'b5-vue';
      case (currentUrl.indexOf('/docs/b4/vue') === 0): return 'vue';
    }
  }

  function getCookie(name) {
    const decodedCookie = decodeURIComponent(document.cookie);
    const cookies = decodedCookie.split(';');

    for (let i = 0; i < cookies.length; i++) {
      let cookie = cookies[i];
      while (cookie.charAt(0) === ' ') {
        cookie = cookie.substring(1);
      }
      if (cookie.indexOf(name) === 0) {
        return cookie.substring(name.length, cookie.length);
      }
    }

    return null;
  }
</script>
<script>

</script>

<script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/bundles/4.20.0/compiled.min.js"></script>


<script type="text/javascript" src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/search-v4/search.min.js"></script>
<script src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/main.min.js"></script>


<script>
  (function ($) {
  'use strict';

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });

  
  $(function () {
    $("#mdb-lightbox-ui").load("https:\/\/mdbcdn.b-cdn.net\/wp-content\/themes\/mdbootstrap4\/docs-app/b4/mdb-addons/mdb-lightbox-ui.html");
  });

  $(document).ready(function () {
    $('.mdb-select').materialSelect();
    $("#license").addClass("mdb-select price-select");
    
    $("#license").hide();
    new WOW().init();
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(el);
  });


  
  $('body').scrollspy({
    target: '#scrollspy'
  })

  $(function () {
    $(".sticky").sticky({
      topSpacing: 90,
      zIndex: 2,
      stopper: "#footer"
    });
    $('a[href="#docsTabsAPI"]').on('shown.bs.tab', function (e) {
      $(".sticky2").sticky({
        topSpacing: 90,
        zIndex: 2,
        stopper: "#footer"
      });
    });
    $('a[href="#docsTabsExamples"]').on('shown.bs.tab', function (e) {
      $(".sticky3").sticky({
        topSpacing: 90
        , zIndex: 2
        , stopper: "#footer"
      });
    });
  });

  $(function () {
    $(".sticky-long").sticky({
      topSpacing: 90,
      zIndex: 2,
      startScrolling: 'bottom',
      stopper: "#footer"
    });
  });

  $(document).ready(function () {
    var type = window.location.hash.substr(1);
    if (type==="docsTabsAPI") {
      if($("#docsTabsAPI").length) {
        $('[href="#docsTabsAPI"]').tab('show');
      }
      $('html, body').animate({scrollTop:0}, 'slow');
    } else if (type==="docsTabsOverview") {

      $('html, body').animate({scrollTop:0}, 'slow');
    }

    var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

    $('.nav-mtd a').not('#docs-tab-examples').click(function (e) {

      var scrollurl = $('body').scrollTop() || $('html').scrollTop();

      window.location.hash = this.hash;
      $('html, body').scrollTop(scrollurl);
    });
  })

  $(document).ready(function () {
    const searchInput = document.getElementById('mdw_serach');

    const searchDropdown = document.getElementById('mdw_serach_dropdown_wrapper');

    let searchJsonFile = "https://mdbootstrap.com/wp-content/themes/mdbootstrap4/docs-app" + '/js/dist/search-v4/';

    switch ("jquery") {
      case 'angular':
        searchJsonFile += 'search-angular.json'
        break;
      case 'react':
        searchJsonFile += 'search-react.json'
        break;
      case 'vue':
        searchJsonFile += 'search-vue.json'
        break;
      default:
        searchJsonFile += 'search.json'
        break;
    }

    const search = new Search(searchInput, searchDropdown, searchJsonFile);

    search.init();
  })

  $('#contactForm').on('show.bs.modal', function () {
    $('.wpcf7-select').materialSelect('destroy');
    $('.wpcf7-select').materialSelect();
  });

  
  $('#contactForm').on('hide.bs.modal', function () {
    $('.wpcf7-select').materialSelect('destroy');
  });

  $("#dynamicContentWrapper-Homepage").on("click", ".dc-panel-remove", function (e) {
    $("#dynamicContentWrapper-Homepage").remove();
  });

  $("div[class*='woocommerce-MyAccount']").on("click", "#get-invoice-request", function (e) {
    e.preventDefault();

    var self = $(this);

    var desination = $(this).attr("href");

    var orderId = $(this).attr("data-order-id");
    var data = {
      action: "requestInvoice",
      order_id: orderId
    };

    $.ajax({
      url: mdw_search_object.ajaxurl,
      method: "POST",
      data: data
    }).done(function (response) {
      console.log(response);
      response = JSON.parse(response);

      if (response.status == "sent") {
        $("p", self).text(response.message);
      } else {
        window.location.replace(desination);
      }

    }).fail(function (err) {
      console.log(err);
    });
  });

  $("div[class*='woocommerce-MyAccount']").on("click", "table #confirm-invoice", function (e) {
    e.preventDefault();

    var self = $(this);

    self.html("<i class='fa fa-spinner fa-spin'></i> Processing...");

    var orderId = $(this).attr("data-order-id");
    var data = {
      action: "approveInvoiceRequest",
      order_id: orderId
    };

    $.ajax({
      url: mdw_search_object.ajaxurl,
      method: "POST",
      data: data
    }).done(function (response) {
      console.log(response);

      self.html("<i class='fa fa-check'></i> Done").attr("class", "btn btn-success");
    }).fail(function (err) {
      console.log(err);

      try {

        err = JSON.stringify(err);
      } catch (ex) {}

      self.html("<i class='fa fa-times'></i> Error").attr("class", "btn btn-danger");
      self.after("<b>Error:</b> " + err);
    });
  });

  $("#invoice-forms").on("click", function (e) {
    e.preventDefault();

    $("nav[class*='woocommerce-MyAccount'] ul li").each(function () {
      $(this).removeClass("is-active");
    });

    $(this).parent().addClass("is-active");

    $(".woocommerce div[class*='woocommerce-MyAccount']").html("<table></table>");
    var invoiceRequestTable = $(".woocommerce div[class*='woocommerce-MyAccount'] table");

    invoiceRequestTable.attr("class", "shop_table shop_table_responsive");

    var thead = "<thead>" +
      "<tr>" +
      '<th><input placeholder="Order ID" id="toEditOrderIdInput" type="number" value=""></input><a id="confirm-edited-invoice" class="btn btn-primary" href="#">Confirm</a><a id="confirm-new-invoice" class="btn btn-primary" href="#">Blank</a></th>' +
      "</tr>" +
      "</thead>";
    var tbody = "<tbody>";
    tbody += "<tr><td>No new requests.</td><td></td></tr>";
    tbody += "</tbody>";

    invoiceRequestTable.append(thead);
    invoiceRequestTable.append(tbody);

  });

  $("div[class*='woocommerce-MyAccount']").on("click", "table #confirm-edited-invoice", function (e) {
    e.preventDefault();
    var order_id = $('#toEditOrderIdInput').val();
    var data = {
      action: "getInvoiceRequestForm",
      order_id: order_id
    };

    $.ajax({
      url: mdw_search_object.ajaxurl,
      method: "POST",
      data: data
    }).done(function (response) {
      response = JSON.parse(response);
      console.log(response);

      var requests = response.requests;

      var billing_invoice_checkbox = requests.meta_data.filter(function (o) {
        return o.key == '_billing_invoice_checkbox'
      });
      var billing_vat = requests.meta_data.filter(function (o) {
        return o.key == '_billing_vat'
      });
      var invoiceRequestForm = $("table.shop_table.shop_table_responsive tbody");

      var tbody = "<tr><td id='invoiceDataToInsert'><p><label for='invoice_id'>Order ID</label><input value='" + requests.id + "' type='text' name='invoice_id' id='invoice_id' /></p>";
      if (billing_invoice_checkbox[0] !== undefined) {
        tbody += "<p><label for='billing_invoice_checkbox'>billing_invoice_checkbox</label><input value='" + billing_invoice_checkbox[0].value + "' type='text' name='billing_invoice_checkbox' id='billing_invoice_checkbox' /></p>"
      }
      tbody += "<p><label for='payment_method'>payment_method</label><input value='" + requests.payment_method + "' type='text' name='payment_method' id='payment_method' /></p>"

      if (billing_vat[0] !== undefined) {
        tbody += "<p><label for='billing_vat'>billing_vat</label><input value='" + billing_vat[0].value + "' type='text' name='billing_vat' id='billing_vat' /></p>"
      }
      tbody += "<p><label for='billing_company'>billing_company</label><input value='" + requests.billing.company + "' type='text' name='billing_company' id='billing_company' /></p>"
      tbody += "<p><label for='billing_address_1'>billing_address_1</label><input value='" + requests.billing.address_1 + "' type='text' name='billing_address_1' id='billing_address_1' /></p>"
      tbody += "<p><label for='billing_address_2'>billing_address_2</label><input value='" + requests.billing.address_2 + "' type='text' name='billing_address_2' id='billing_address_2' /></p>"
      tbody += "<p><label for='billing_city'>billing_city</label><input value='" + requests.billing.city + "' type='text' name='billing_city' id='billing_city' /></p>"
      tbody += "<p><label for='customer_id'>customer_id</label><input value='" + requests.customer_id + "' type='text' name='customer_id' id='customer_id' /></p>"
      tbody += "<a id='save-edited-invoice' class='btn btn-primary' href='#'>Save</a></td></tr>";

      invoiceRequestForm.empty();
      invoiceRequestForm.append(tbody);
    }).fail(function (err) {
      console.log(err);
    });
  });

  $("div[class*='woocommerce-MyAccount']").on("click", "table #confirm-new-invoice", function (e) {
    e.preventDefault();

    var invoiceRequestForm = $("table.shop_table.shop_table_responsive tbody");

    var tbody = "<tr><td id='invoiceDataToInsert'><p><label for='invoice_id'>Order ID</label><input disabled value='new order' type='text' name='invoice_id' id='invoice_id' /></p>";
    tbody += "<p><label for='billing_invoice_checkbox'>billing_invoice_checkbox</label><input value='' type='text' name='billing_invoice_checkbox' id='billing_invoice_checkbox' /></p>"
    tbody += "<p><label for='payment_method'>payment_method</label><input value='' type='text' name='payment_method' id='payment_method' /></p>"

    tbody += "<p><label for='billing_vat'>billing_vat</label><input value='' type='text' name='billing_vat' id='billing_vat' /></p>"
    tbody += "<p><label for='billing_company'>billing_company</label><input value='' type='text' name='billing_company' id='billing_company' /></p>"
    tbody += "<p><label for='billing_address_1'>billing_address_1</label><input value='' type='text' name='billing_address_1' id='billing_address_1' /></p>"
    tbody += "<p><label for='billing_address_2'>billing_address_2</label><input value='' type='text' name='billing_address_2' id='billing_address_2' /></p>"
    tbody += "<p><label for='billing_city'>billing_city</label><input value='' type='text' name='billing_city' id='billing_city' /></p>"
    tbody += "<p><label for='customer_id'>customer_id</label><input value='' type='text' name='customer_id' id='customer_id' /></p>"
    tbody += "<a id='save-edited-invoice' class='btn btn-primary' href='#'>Save</a></td></tr>";

    invoiceRequestForm.empty();
    invoiceRequestForm.append(tbody);
  });

  $("div[class*='woocommerce-MyAccount']").on("click", "table #save-edited-invoice", function (e) {
    e.preventDefault();

    var new_order_meta_data = {
      _billing_invoice_checkbox: $('#billing_invoice_checkbox').val(),
      _billing_vat: $('#billing_vat').val()
    }
    var order_data = {
      payment_method: $('#payment_method').val(),
      billing_address_1: $('#billing_address_1').val(),
      billing_address_2: $('#billing_address_2').val(),
      billing_city: $('#billing_city').val(),
      billing_company: $('#billing_company').val()
    }
    var order_id = $('#invoice_id').val();
    var data = {
      action: "saveNewOrEditedOrder",
      order_id: order_id,
      new_order_meta_data: new_order_meta_data,
      order_data: order_data
    };

    $.ajax({
      url: mdw_search_object.ajaxurl,
      method: "POST",
      data: data
    }).done(function (response) {
      response = JSON.parse(response);
      console.log(response);
      var invoiceRequestForm = $("table.shop_table.shop_table_responsive tbody");
      invoiceRequestForm.empty();
    }).fail(function (err) {
      console.log(err);
    });

  })


  $("#invoice-requests-list").on("click", function (e) {
    e.preventDefault();

    $("nav[class*='woocommerce-MyAccount'] ul li").each(function () {
      $(this).removeClass("is-active");
    });

    $(this).parent().addClass("is-active");

    var data = {
      action: "getInvoiceRequests"
    };

    $.ajax({
      url: mdw_search_object.ajaxurl,
      method: "POST",
      data: data
    }).done(function (response) {
      response = JSON.parse(response);
      console.log(response);

      var requests = response.requests;

      $(".woocommerce div[class*='woocommerce-MyAccount']").html("<table></table>");
      var invoiceRequestsListTable = $(".woocommerce div[class*='woocommerce-MyAccount'] table");

      invoiceRequestsListTable.attr("class", "shop_table shop_table_responsive");

      var thead = "<thead>" +
        "<tr>" +
        "<th>Order</th>" +
        "<th>Actions</th>" +
        "</tr>" +
        "</thead>";


      var tbody = "<tbody>";

      if (requests.length === 0) {
        tbody += "<tr><td>No new requests.</td><td></td></tr>";
      } else {
        for (var i = 0; i < requests.length; i++) {
          var order = requests[i];

          tbody += "<tr>" +
            "<td>" +
            "<ul style='list-style-type:none;'>" +
            "<li><b>Order ID:</b> " + order.order_id + "</li>" +
            "<li><b>Invoice Date:</b> " + order.invoice_date + "</li>" +
            "<li><b>VAT Number:</b> " + order.vat_number + "</li>" +
            "<li><b>Buyer Name:</b> " + order.buyer_name + "</li>" +
            "<li><b>Country:</b> " + order.country + "</li>" +
            "<li><b>Tax:</b> " + order.tax + "</li>" +
            "<li><b>Netto:</b> " + order.netto + "</li>" +
            "<li><b>Brutto:</b> " + order.brutto + "</li>" +
            "<li><b>EU:</b> " + order.eu_valid + "</li>" +
            "</ul>" +
            "</td>" +
            "<td>" +
            "<a id='confirm-invoice' class='btn btn-primary' data-order-id='" + order.order_id + "' href='#'>Confirm</a>" +
            "</td>" +
            "</tr>";
        }
      }


      tbody += "</tbody>";

      invoiceRequestsListTable.append(thead);
      invoiceRequestsListTable.append(tbody);

    }).fail(function (err) {
      console.log(err);
    });
  });

  var commentsCounter = $('span.counter');
  commentsCounter.each(function () {
    if ($(this).text() === 0 || $(this).text() === '') {
      $(this).css('display', 'none');
    }
  })

  function init_media() {
    var vidDefer = document.getElementsByTagName('iframe');
    for (var i = 0; i < vidDefer.length; i++) {
      if (vidDefer[i].getAttribute('data-src')) {
        vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
      }
    }
  }
  window.onload = init_media;

  function saveUserFirstDownloadFreePackageDate( technology ) {

    var cookieName = 'mdb_free_download_date_' + technology + '=';
    var cookies = decodeURIComponent(document.cookie).split(';');
    var cookieExists = false;
    var cookieValue = '';

    for( var i = 0; i < cookies.length; i++ ) {
      var c = cookies[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(cookieName) == 0) {
        cookieExists = true;
        cookieValue = c.substring(cookieName.length, c.length);
      }
    }

    if( !cookieExists ) {

      var currDate = new Date();
      var day = String(currDate.getDate()).padStart(2, '0');
      var month = String(currDate.getMonth() + 1).padStart(2, '0');
      var year = currDate.getFullYear();

      currDate = year + '-' + month + '-' + day;
      cookieValue = 'mdb_' + currDate;

      var expiresDate = new Date();
      expiresDate.setTime(expiresDate.getTime()+60*60*24*365);
      var expires = '; expires=' + expiresDate.toGMTString();

      document.cookie = 'mdb_free_download_date_' + technology + '=' + cookieValue + expires + '; path=/';
    }
  }

  $("#getStart-content-directDownload-jquery, #getStart-content-gitDownload-jquery").on("click", function () {
    saveUserFirstDownloadFreePackageDate( 'jq' );
  });
  $("#getStart-content-directDownload-angular, #getStart-content-gitDownload-angular").on("click", function () {
    saveUserFirstDownloadFreePackageDate( 'ng' );
  });
  $("#getStart-content-directDownload-react, #getStart-content-gitDownload-react").on("click", function () {
    saveUserFirstDownloadFreePackageDate( 're' );
  });
  $("#getStart-content-directDownload-vue, #getStart-content-gitDownload-vue").on("click", function () {
    saveUserFirstDownloadFreePackageDate( 'vu' );
  });

  document.addEventListener('DOMContentLoaded', function() {
    const lazyImages = [].slice.call(document.querySelectorAll('img[data-lazysrc]'));
    if ('IntersectionObserver' in window) {
      let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            let lazyImage = entry.target;
            lazyImage.src = lazyImage.dataset.lazysrc;
            lazyImage.removeAttribute('data-lazysrc');
            lazyImageObserver.unobserve(lazyImage);
          }
        });
      });

      lazyImages.forEach(function(lazyImage) {
        lazyImageObserver.observe(lazyImage);
      });
    }
  });

})(jQuery);
</script>

<script>
  document.addEventListener('DOMContentLoaded', (e) => {
    document.querySelectorAll('#slide-out #side-menu li').forEach((menu)=>{
      menu.querySelectorAll('ul.sub-menu li').forEach((link)=>{
        var is_active = link.querySelector('a.collapsible-header').classList.contains('current-page');
        var collapseIcon = menu.querySelector('.rotate-icon');

        if (is_active && collapseIcon) {
          $(link).addClass('current-menu-item')
          $(link).parents('.collapsible-body').siblings().addClass('active')
          return false;
        }
      });
    });

    const setTransitionProperties = () => {
      const sidenav = document.getElementById('slide-out');
      const rotateIcons = sidenav.querySelectorAll('.rotate-icon');
      const collapse = sidenav.querySelectorAll('.collapsible-body');

      rotateIcons.forEach(icon => {
        icon.style.transitionProperty = 'transform'
      });

      collapse.forEach(collapse => {
        collapse.style.transitionProperty = 'height'
      });
    }

    setTimeout(setTransitionProperties, 1);
  });
</script>
 
<!-- <script src="https://maps.google.com/maps/api/js"></script> -->
<script>
</script>
<!-- Structured data: Breadcrumbs -->
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://mdbootstrap.com/",
        "name": "MDBootstrap",
        "image": "https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.webp"
      }
    },{
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https://mdbootstrap.com/docs/b4/jquery/",
        "name": "MDBootstrap jQuery",
        "image": "https://mdbootstrap.com/wp-content/uploads/2018/11/mdb-jquery-free.webp"
      }
    },{
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https://mdbootstrap.com/docs/b4/jquery/utilities/",
        "name": "Utilities",
        "image": "https://mdbootstrap.com/wp-content/uploads/2017/11/3-1.webp"
      }
    },{
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "https://mdbootstrap.com/docs/b4/jquery/utilities/embeds/",
        "name": "Bootstrap embeds",
        "image": "https://mdbootstrap.com/wp-content/uploads/2017/06/embeds-fb.webp"
      }
    }]
  }
  </script>
<!-- Structured data: Article -->
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://mdbootstrap.com/docs/b4/jquery/utilities/embeds/"
      },
      "headline": "Bootstrap Embeds - examples & tutorial. Basic & advanced usage",
      "image": [
        "https://mdbootstrap.com/wp-content/uploads/2017/06/embeds-fb.webp"
      ],
      "datePublished": "2018-06-25T08:00:00+08:00",
      "dateModified": "2018-06-25T09:20:00+08:00",
      "author": {
        "@type": "Organization",
        "name": "MDBootstrap"
      },
      "publisher": {
        "@type": "Organization",
        "name": "MDBootstrap",
        "logo": {
          "@type": "ImageObject",
          "url": "https://mdbootstrap.com/wp-content/uploads/2018/06/logo-mdb-jquery-small.webp"
        }
      },
      "description": "Bootstrap embeds is a utility which helps you insert video or slideshow in the page keeping width of the parent and scales on any device."
    }
    </script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<style>
.row_footer {
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box;
    align-items: stretch;
  }

    .row_footer > * {
      box-sizing: border-box;
    }

    .row_footer.gtr-uniform > * > :last-child {
      margin-bottom: 0;
    }

    .row_footer.aln-left {
      justify-content: flex-start;
    }

    .row_footer.aln-center {
      justify-content: center;
    }

    .row_footer.aln-right {
      justify-content: flex-end;
    }

    .row_footer.aln-top {
      align-items: flex-start;
    }

    .row_footer.aln-middle {
      align-items: center;
    }

    .row_footer.aln-bottom {
      align-items: flex-end;
    }

    .row_footer > .imp {
      order: -1;
    }

    .row_footer > .col-1 {
      width: 8.33333%;
    }

    .row_footer > .off-1 {
      margin-left: 8.33333%;
    }

    .row_footer > .col-2 {
      width: 16.66667%;
    }

    .row_footer > .off-2 {
      margin-left: 16.66667%;
    }

    .row_footer > .col-3 {
      width: 25%;
    }

    .row_footer > .off-3 {
      margin-left: 25%;
    }

    .row_footer > .col-4 {
      width: 33.33333%;
    }

    .row_footer > .off-4 {
      margin-left: 33.33333%;
    }

    .row_footer > .col-5 {
      width: 41.66667%;
    }

    .row_footer > .off-5 {
      margin-left: 41.66667%;
    }

    .row_footer > .col-6 {
      width: 50%;
    }

    .row_footer > .off-6 {
      margin-left: 50%;
    }

    .row_footer > .col-7 {
      width: 58.33333%;
    }

    .row_footer > .off-7 {
      margin-left: 58.33333%;
    }

    .row_footer > .col-8 {
      width: 66.66667%;
    }

    .row_footer > .off-8 {
      margin-left: 66.66667%;
    }

    .row_footer > .col-9 {
      width: 75%;
    }

    .row_footer > .off-9 {
      margin-left: 75%;
    }

    .row_footer > .col-10 {
      width: 83.33333%;
    }

    .row_footer > .off-10 {
      margin-left: 83.33333%;
    }

    .row_footer > .col-11 {
      width: 91.66667%;
    }

    .row_footer > .off-11 {
      margin-left: 91.66667%;
    }

    .row_footer > .col-12 {
      width: 100%;
    }

    .row_footer > .off-12 {
      margin-left: 100%;
    }

    .row_footer.gtr-0 {
      margin-top: 0px;
      margin-left: 0px;
    }

      .row_footer.gtr-0 > * {
        padding: 0px 0 0 0px;
      }

      .row_footer.gtr-0.gtr-uniform {
        margin-top: 0px;
      }

        .row_footer.gtr-0.gtr-uniform > * {
          padding-top: 0px;
        }

    .row_footer.gtr-25 {
      margin-top: -12.5px;
      margin-left: -12.5px;
    }

      .row_footer.gtr-25 > * {
        padding: 12.5px 0 0 12.5px;
      }

      .row_footer.gtr-25.gtr-uniform {
        margin-top: -12.5px;
      }

        .row_footer.gtr-25.gtr-uniform > * {
          padding-top: 12.5px;
        }

    .row_footer.gtr-50 {
      margin-top: -25px;
      margin-left: -25px;
    }

      .row_footer.gtr-50 > * {
        padding: 25px 0 0 25px;
      }

      .row_footer.gtr-50.gtr-uniform {
        margin-top: -25px;
      }

        .row_footer.gtr-50.gtr-uniform > * {
          padding-top: 25px;
        }

    .row_footer {
      margin-top: -50px;
      margin-left: -50px;
    }

      .row_footer > * {
        padding: 50px 0 0 50px;
      }

      .row_footer.gtr-uniform {
        margin-top: -50px;
      }

        .row_footer.gtr-uniform > * {
          padding-top: 50px;
        }

    .row_footer.gtr-150 {
      margin-top: -75px;
      margin-left: -75px;
    }

      .row_footer.gtr-150 > * {
        padding: 75px 0 0 75px;
      }

      .row_footer.gtr-150.gtr-uniform {
        margin-top: -75px;
      }

        .row_footer.gtr-150.gtr-uniform > * {
          padding-top: 75px;
        }

    .row_footer.gtr-200 {
      margin-top: -100px;
      margin-left: -100px;
    }

      .row_footer.gtr-200 > * {
        padding: 100px 0 0 100px;
      }

      .row_footer.gtr-200.gtr-uniform {
        margin-top: -100px;
      }

        .row_footer.gtr-200.gtr-uniform > * {
          padding-top: 100px;
        }

    @media screen and (max-width: 1680px) {

      .row_footer {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        align-items: stretch;
      }

        .row_footer > * {
          box-sizing: border-box;
        }

        .row_footer.gtr-uniform > * > :last-child {
          margin-bottom: 0;
        }

        .row_footer.aln-left {
          justify-content: flex-start;
        }

        .row_footer.aln-center {
          justify-content: center;
        }

        .row_footer.aln-right {
          justify-content: flex-end;
        }

        .row_footer.aln-top {
          align-items: flex-start;
        }

        .row_footer.aln-middle {
          align-items: center;
        }

        .row_footer.aln-bottom {
          align-items: flex-end;
        }

        .row_footer > .imp-wide {
          order: -1;
        }

        .row_footer > .col-1-wide {
          width: 8.33333%;
        }

        .row_footer > .off-1-wide {
          margin-left: 8.33333%;
        }

        .row_footer > .col-2-wide {
          width: 16.66667%;
        }

        .row_footer > .off-2-wide {
          margin-left: 16.66667%;
        }

        .row_footer > .col-3-wide {
          width: 25%;
        }

        .row_footer > .off-3-wide {
          margin-left: 25%;
        }

        .row_footer > .col-4-wide {
          width: 33.33333%;
        }

        .row_footer > .off-4-wide {
          margin-left: 33.33333%;
        }

        .row_footer > .col-5-wide {
          width: 41.66667%;
        }

        .row_footer > .off-5-wide {
          margin-left: 41.66667%;
        }

        .row_footer > .col-6-wide {
          width: 50%;
        }

        .row_footer > .off-6-wide {
          margin-left: 50%;
        }

        .row_footer > .col-7-wide {
          width: 58.33333%;
        }

        .row_footer > .off-7-wide {
          margin-left: 58.33333%;
        }

        .row_footer > .col-8-wide {
          width: 66.66667%;
        }

        .row_footer > .off-8-wide {
          margin-left: 66.66667%;
        }

        .row_footer > .col-9-wide {
          width: 75%;
        }

        .row_footer > .off-9-wide {
          margin-left: 75%;
        }

        .row_footer > .col-10-wide {
          width: 83.33333%;
        }

        .row_footer > .off-10-wide {
          margin-left: 83.33333%;
        }

        .row_footer > .col-11-wide {
          width: 91.66667%;
        }

        .row_footer > .off-11-wide {
          margin-left: 91.66667%;
        }

        .row_footer > .col-12-wide {
          width: 100%;
        }

        .row_footer > .off-12-wide {
          margin-left: 100%;
        }

        .row_footer.gtr-0 {
          margin-top: 0px;
          margin-left: 0px;
        }

          .row_footer.gtr-0 > * {
            padding: 0px 0 0 0px;
          }

          .row_footer.gtr-0.gtr-uniform {
            margin-top: 0px;
          }

            .row_footer.gtr-0.gtr-uniform > * {
              padding-top: 0px;
            }

        .row_footer.gtr-25 {
          margin-top: -10px;
          margin-left: -10px;
        }

          .row_footer.gtr-25 > * {
            padding: 10px 0 0 10px;
          }

          .row_footer.gtr-25.gtr-uniform {
            margin-top: -10px;
          }

            .row_footer.gtr-25.gtr-uniform > * {
              padding-top: 10px;
            }

        .row_footer.gtr-50 {
          margin-top: -20px;
          margin-left: -20px;
        }

          .row_footer.gtr-50 > * {
            padding: 20px 0 0 20px;
          }

          .row_footer.gtr-50.gtr-uniform {
            margin-top: -20px;
          }

            .row_footer.gtr-50.gtr-uniform > * {
              padding-top: 20px;
            }

        .row_footer {
          margin-top: -40px;
          margin-left: -40px;
        }

          .row_footer > * {
            padding: 40px 0 0 40px;
          }

          .row_footer.gtr-uniform {
            margin-top: -40px;
          }

            .row_footer.gtr-uniform > * {
              padding-top: 40px;
            }

        .row_footer.gtr-150 {
          margin-top: -60px;
          margin-left: -60px;
        }

          .row_footer.gtr-150 > * {
            padding: 60px 0 0 60px;
          }

          .row_footer.gtr-150.gtr-uniform {
            margin-top: -60px;
          }

            .row_footer.gtr-150.gtr-uniform > * {
              padding-top: 60px;
            }

        .row_footer.gtr-200 {
          margin-top: -80px;
          margin-left: -80px;
        }

          .row_footer.gtr-200 > * {
            padding: 80px 0 0 80px;
          }

          .row_footer.gtr-200.gtr-uniform {
            margin-top: -80px;
          }

            .row_footer.gtr-200.gtr-uniform > * {
              padding-top: 80px;
            }

    }

    @media screen and (max-width: 1280px) {

      .row_footer {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        align-items: stretch;
      }

        .row_footer > * {
          box-sizing: border-box;
        }

        .row_footer.gtr-uniform > * > :last-child {
          margin-bottom: 0;
        }

        .row_footer.aln-left {
          justify-content: flex-start;
        }

        .row_footer.aln-center {
          justify-content: center;
        }

        .row_footer.aln-right {
          justify-content: flex-end;
        }

        .row_footer.aln-top {
          align-items: flex-start;
        }

        .row_footer.aln-middle {
          align-items: center;
        }

        .row_footer.aln-bottom {
          align-items: flex-end;
        }

        .row_footer > .imp-normal {
          order: -1;
        }

        .row_footer > .col-1-normal {
          width: 8.33333%;
        }

        .row_footer > .off-1-normal {
          margin-left: 8.33333%;
        }

        .row_footer > .col-2-normal {
          width: 16.66667%;
        }

        .row_footer > .off-2-normal {
          margin-left: 16.66667%;
        }

        .row_footer > .col-3-normal {
          width: 25%;
        }

        .row_footer > .off-3-normal {
          margin-left: 25%;
        }

        .row_footer > .col-4-normal {
          width: 33.33333%;
        }

        .row_footer > .off-4-normal {
          margin-left: 33.33333%;
        }

        .row_footer > .col-5-normal {
          width: 41.66667%;
        }

        .row_footer > .off-5-normal {
          margin-left: 41.66667%;
        }

        .row_footer > .col-6-normal {
          width: 50%;
        }

        .row_footer > .off-6-normal {
          margin-left: 50%;
        }

        .row_footer > .col-7-normal {
          width: 58.33333%;
        }

        .row_footer > .off-7-normal {
          margin-left: 58.33333%;
        }

        .row_footer > .col-8-normal {
          width: 66.66667%;
        }

        .row_footer > .off-8-normal {
          margin-left: 66.66667%;
        }

        .row_footer > .col-9-normal {
          width: 75%;
        }

        .row_footer > .off-9-normal {
          margin-left: 75%;
        }

        .row_footer > .col-10-normal {
          width: 83.33333%;
        }

        .row_footer > .off-10-normal {
          margin-left: 83.33333%;
        }

        .row_footer > .col-11-normal {
          width: 91.66667%;
        }

        .row_footer > .off-11-normal {
          margin-left: 91.66667%;
        }

        .row_footer > .col-12-normal {
          width: 100%;
        }

        .row_footer > .off-12-normal {
          margin-left: 100%;
        }

        .row_footer.gtr-0 {
          margin-top: 0px;
          margin-left: 0px;
        }

          .row_footer.gtr-0 > * {
            padding: 0px 0 0 0px;
          }

          .row_footer.gtr-0.gtr-uniform {
            margin-top: 0px;
          }

            .row_footer.gtr-0.gtr-uniform > * {
              padding-top: 0px;
            }

        .row_footer.gtr-25 {
          margin-top: -7.5px;
          margin-left: -7.5px;
        }

          .row_footer.gtr-25 > * {
            padding: 7.5px 0 0 7.5px;
          }

          .row_footer.gtr-25.gtr-uniform {
            margin-top: -7.5px;
          }

            .row_footer.gtr-25.gtr-uniform > * {
              padding-top: 7.5px;
            }

        .row_footer.gtr-50 {
          margin-top: -15px;
          margin-left: -15px;
        }

          .row_footer.gtr-50 > * {
            padding: 15px 0 0 15px;
          }

          .row_footer.gtr-50.gtr-uniform {
            margin-top: -15px;
          }

            .row_footer.gtr-50.gtr-uniform > * {
              padding-top: 15px;
            }

        .row_footer {
          margin-top: -30px;
          margin-left: -30px;
        }

          .row_footer > * {
            padding: 30px 0 0 30px;
          }

          .row_footer.gtr-uniform {
            margin-top: -30px;
          }

            .row_footer.gtr-uniform > * {
              padding-top: 30px;
            }

        .row_footer.gtr-150 {
          margin-top: -45px;
          margin-left: -45px;
        }

          .row_footer.gtr-150 > * {
            padding: 45px 0 0 45px;
          }

          .row_footer.gtr-150.gtr-uniform {
            margin-top: -45px;
          }

            .row_footer.gtr-150.gtr-uniform > * {
              padding-top: 45px;
            }

        .row_footer.gtr-200 {
          margin-top: -60px;
          margin-left: -60px;
        }

          .row_footer.gtr-200 > * {
            padding: 60px 0 0 60px;
          }

          .row_footer.gtr-200.gtr-uniform {
            margin-top: -60px;
          }

            .row_footer.gtr-200.gtr-uniform > * {
              padding-top: 60px;
            }

    }

    @media screen and (max-width: 980px) {

      .row_footer {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        align-items: stretch;
      }

        .row_footer > * {
          box-sizing: border-box;
        }

        .row_footer.gtr-uniform > * > :last-child {
          margin-bottom: 0;
        }

        .row_footer.aln-left {
          justify-content: flex-start;
        }

        .row_footer.aln-center {
          justify-content: center;
        }

        .row_footer.aln-right {
          justify-content: flex-end;
        }

        .row_footer.aln-top {
          align-items: flex-start;
        }

        .row_footer.aln-middle {
          align-items: center;
        }

        .row_footer.aln-bottom {
          align-items: flex-end;
        }

        .row_footer > .imp-narrow_footer {
          order: -1;
        }

        .row_footer > .col-1-narrow_footer {
          width: 8.33333%;
        }

        .row_footer > .off-1-narrow_footer {
          margin-left: 8.33333%;
        }

        .row_footer > .col-2-narrow_footer {
          width: 16.66667%;
        }

        .row_footer > .off-2-narrow_footer {
          margin-left: 16.66667%;
        }

        .row_footer > .col-3-narrow_footer {
          width: 25%;
        }

        .row_footer > .off-3-narrow_footer {
          margin-left: 25%;
        }

        .row_footer > .col-4-narrow_footer {
          width: 33.33333%;
        }

        .row_footer > .off-4-narrow_footer {
          margin-left: 33.33333%;
        }

        .row_footer > .col-5-narrow_footer {
          width: 41.66667%;
        }

        .row_footer > .off-5-narrow_footer {
          margin-left: 41.66667%;
        }

        .row_footer > .col-6-narrow_footer {
          width: 50%;
        }

        .row_footer > .off-6-narrow_footer {
          margin-left: 50%;
        }

        .row_footer > .col-7-narrow_footer {
          width: 58.33333%;
        }

        .row_footer > .off-7-narrow_footer {
          margin-left: 58.33333%;
        }

        .row_footer > .col-8-narrow_footer {
          width: 66.66667%;
        }

        .row_footer > .off-8-narrow_footer {
          margin-left: 66.66667%;
        }

        .row_footer > .col-9-narrow_footer {
          width: 75%;
        }

        .row_footer > .off-9-narrow_footer {
          margin-left: 75%;
        }

        .row_footer > .col-10-narrow_footer {
          width: 83.33333%;
        }

        .row_footer > .off-10-narrow_footer {
          margin-left: 83.33333%;
        }

        .row_footer > .col-11-narrow_footer {
          width: 91.66667%;
        }

        .row_footer > .off-11-narrow_footer {
          margin-left: 91.66667%;
        }

        .row_footer > .col-12-narrow_footer {
          width: 100%;
        }

        .row_footer > .off-12-narrow_footer {
          margin-left: 100%;
        }

        .row_footer.gtr-0 {
          margin-top: 0px;
          margin-left: 0px;
        }

          .row_footer.gtr-0 > * {
            padding: 0px 0 0 0px;
          }

          .row_footer.gtr-0.gtr-uniform {
            margin-top: 0px;
          }

            .row_footer.gtr-0.gtr-uniform > * {
              padding-top: 0px;
            }

        .row_footer.gtr-25 {
          margin-top: -7.5px;
          margin-left: -7.5px;
        }

          .row_footer.gtr-25 > * {
            padding: 7.5px 0 0 7.5px;
          }

          .row_footer.gtr-25.gtr-uniform {
            margin-top: -7.5px;
          }

            .row_footer.gtr-25.gtr-uniform > * {
              padding-top: 7.5px;
            }

        .row_footer.gtr-50 {
          margin-top: -15px;
          margin-left: -15px;
        }

          .row_footer.gtr-50 > * {
            padding: 15px 0 0 15px;
          }

          .row_footer.gtr-50.gtr-uniform {
            margin-top: -15px;
          }

            .row_footer.gtr-50.gtr-uniform > * {
              padding-top: 15px;
            }

        .row_footer {
          margin-top: -30px;
          margin-left: -30px;
        }

          .row_footer > * {
            padding: 30px 0 0 30px;
          }

          .row_footer.gtr-uniform {
            margin-top: -30px;
          }

            .row_footer.gtr-uniform > * {
              padding-top: 30px;
            }

        .row_footer.gtr-150 {
          margin-top: -45px;
          margin-left: -45px;
        }

          .row_footer.gtr-150 > * {
            padding: 45px 0 0 45px;
          }

          .row_footer.gtr-150.gtr-uniform {
            margin-top: -45px;
          }

            .row_footer.gtr-150.gtr-uniform > * {
              padding-top: 45px;
            }

        .row_footer.gtr-200 {
          margin-top: -60px;
          margin-left: -60px;
        }

          .row_footer.gtr-200 > * {
            padding: 60px 0 0 60px;
          }

          .row_footer.gtr-200.gtr-uniform {
            margin-top: -60px;
          }

            .row_footer.gtr-200.gtr-uniform > * {
              padding-top: 60px;
            }

    }

    @media screen and (max-width: 840px) {

      .row_footer {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        align-items: stretch;
      }

        .row_footer > * {
          box-sizing: border-box;
        }

        .row_footer.gtr-uniform > * > :last-child {
          margin-bottom: 0;
        }

        .row_footer.aln-left {
          justify-content: flex-start;
        }

        .row_footer.aln-center {
          justify-content: center;
        }

        .row_footer.aln-right {
          justify-content: flex-end;
        }

        .row_footer.aln-top {
          align-items: flex-start;
        }

        .row_footer.aln-middle {
          align-items: center;
        }

        .row_footer.aln-bottom {
          align-items: flex-end;
        }

        .row_footer > .imp-narrow_footerer {
          order: -1;
        }

        .row_footer > .col-1-narrow_footerer {
          width: 8.33333%;
        }

        .row_footer > .off-1-narrow_footerer {
          margin-left: 8.33333%;
        }

        .row_footer > .col-2-narrow_footerer {
          width: 16.66667%;
        }

        .row_footer > .off-2-narrow_footerer {
          margin-left: 16.66667%;
        }

        .row_footer > .col-3-narrow_footerer {
          width: 25%;
        }

        .row_footer > .off-3-narrow_footerer {
          margin-left: 25%;
        }

        .row_footer > .col-4-narrow_footerer {
          width: 33.33333%;
        }

        .row_footer > .off-4-narrow_footerer {
          margin-left: 33.33333%;
        }

        .row_footer > .col-5-narrow_footerer {
          width: 41.66667%;
        }

        .row_footer > .off-5-narrow_footerer {
          margin-left: 41.66667%;
        }

        .row_footer > .col-6-narrow_footerer {
          width: 50%;
        }

        .row_footer > .off-6-narrow_footerer {
          margin-left: 50%;
        }

        .row_footer > .col-7-narrow_footerer {
          width: 58.33333%;
        }

        .row_footer > .off-7-narrow_footerer {
          margin-left: 58.33333%;
        }

        .row_footer > .col-8-narrow_footerer {
          width: 66.66667%;
        }

        .row_footer > .off-8-narrow_footerer {
          margin-left: 66.66667%;
        }

        .row_footer > .col-9-narrow_footerer {
          width: 75%;
        }

        .row_footer > .off-9-narrow_footerer {
          margin-left: 75%;
        }

        .row_footer > .col-10-narrow_footerer {
          width: 83.33333%;
        }

        .row_footer > .off-10-narrow_footerer {
          margin-left: 83.33333%;
        }

        .row_footer > .col-11-narrow_footerer {
          width: 91.66667%;
        }

        .row_footer > .off-11-narrow_footerer {
          margin-left: 91.66667%;
        }

        .row_footer > .col-12-narrow_footerer {
          width: 100%;
        }

        .row_footer > .off-12-narrow_footerer {
          margin-left: 100%;
        }

        .row_footer.gtr-0 {
          margin-top: 0px;
          margin-left: 0px;
        }

          .row_footer.gtr-0 > * {
            padding: 0px 0 0 0px;
          }

          .row_footer.gtr-0.gtr-uniform {
            margin-top: 0px;
          }

            .row_footer.gtr-0.gtr-uniform > * {
              padding-top: 0px;
            }

        .row_footer.gtr-25 {
          margin-top: -7.5px;
          margin-left: -7.5px;
        }

          .row_footer.gtr-25 > * {
            padding: 7.5px 0 0 7.5px;
          }

          .row_footer.gtr-25.gtr-uniform {
            margin-top: -7.5px;
          }

            .row_footer.gtr-25.gtr-uniform > * {
              padding-top: 7.5px;
            }

        .row_footer.gtr-50 {
          margin-top: -15px;
          margin-left: -15px;
        }

          .row_footer.gtr-50 > * {
            padding: 15px 0 0 15px;
          }

          .row_footer.gtr-50.gtr-uniform {
            margin-top: -15px;
          }

            .row_footer.gtr-50.gtr-uniform > * {
              padding-top: 15px;
            }

        .row_footer {
          margin-top: -30px;
          margin-left: -30px;
        }

          .row_footer > * {
            padding: 30px 0 0 30px;
          }

          .row_footer.gtr-uniform {
            margin-top: -30px;
          }

            .row_footer.gtr-uniform > * {
              padding-top: 30px;
            }

        .row_footer.gtr-150 {
          margin-top: -45px;
          margin-left: -45px;
        }

          .row_footer.gtr-150 > * {
            padding: 45px 0 0 45px;
          }

          .row_footer.gtr-150.gtr-uniform {
            margin-top: -45px;
          }

            .row_footer.gtr-150.gtr-uniform > * {
              padding-top: 45px;
            }

        .row_footer.gtr-200 {
          margin-top: -60px;
          margin-left: -60px;
        }

          .row_footer.gtr-200 > * {
            padding: 60px 0 0 60px;
          }

          .row_footer.gtr-200.gtr-uniform {
            margin-top: -60px;
          }

            .row_footer.gtr-200.gtr-uniform > * {
              padding-top: 60px;
            }

    }

    @media screen and (max-width: 736px) {

      .row_footer {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        align-items: stretch;
      }

        .row_footer > * {
          box-sizing: border-box;
        }

        .row_footer.gtr-uniform > * > :last-child {
          margin-bottom: 0;
        }

        .row_footer.aln-left {
          justify-content: flex-start;
        }

        .row_footer.aln-center {
          justify-content: center;
        }

        .row_footer.aln-right {
          justify-content: flex-end;
        }

        .row_footer.aln-top {
          align-items: flex-start;
        }

        .row_footer.aln-middle {
          align-items: center;
        }

        .row_footer.aln-bottom {
          align-items: flex-end;
        }

        .row_footer > .imp-mobile {
          order: -1;
        }

        .row_footer > .col-1-mobile {
          width: 8.33333%;
        }

        .row_footer > .off-1-mobile {
          margin-left: 8.33333%;
        }

        .row_footer > .col-2-mobile {
          width: 16.66667%;
        }

        .row_footer > .off-2-mobile {
          margin-left: 16.66667%;
        }

        .row_footer > .col-3-mobile {
          width: 25%;
        }

        .row_footer > .off-3-mobile {
          margin-left: 25%;
        }

        .row_footer > .col-4-mobile {
          width: 33.33333%;
        }

        .row_footer > .off-4-mobile {
          margin-left: 33.33333%;
        }

        .row_footer > .col-5-mobile {
          width: 41.66667%;
        }

        .row_footer > .off-5-mobile {
          margin-left: 41.66667%;
        }

        .row_footer > .col-6-mobile {
          width: 50%;
        }

        .row_footer > .off-6-mobile {
          margin-left: 50%;
        }

        .row_footer > .col-7-mobile {
          width: 58.33333%;
        }

        .row_footer > .off-7-mobile {
          margin-left: 58.33333%;
        }

        .row_footer > .col-8-mobile {
          width: 66.66667%;
        }

        .row_footer > .off-8-mobile {
          margin-left: 66.66667%;
        }

        .row_footer > .col-9-mobile {
          width: 75%;
        }

        .row_footer > .off-9-mobile {
          margin-left: 75%;
        }

        .row_footer > .col-10-mobile {
          width: 83.33333%;
        }

        .row_footer > .off-10-mobile {
          margin-left: 83.33333%;
        }

        .row_footer > .col-11-mobile {
          width: 91.66667%;
        }

        .row_footer > .off-11-mobile {
          margin-left: 91.66667%;
        }

        .row_footer > .col-12-mobile {
          width: 100%;
        }

        .row_footer > .off-12-mobile {
          margin-left: 100%;
        }

        .row_footer.gtr-0 {
          margin-top: 0px;
          margin-left: 0px;
        }

          .row_footer.gtr-0 > * {
            padding: 0px 0 0 0px;
          }

          .row_footer.gtr-0.gtr-uniform {
            margin-top: 0px;
          }

            .row_footer.gtr-0.gtr-uniform > * {
              padding-top: 0px;
            }

        .row_footer.gtr-25 {
          margin-top: -5px;
          margin-left: -5px;
        }

          .row_footer.gtr-25 > * {
            padding: 5px 0 0 5px;
          }

          .row_footer.gtr-25.gtr-uniform {
            margin-top: -5px;
          }

            .row_footer.gtr-25.gtr-uniform > * {
              padding-top: 5px;
            }

        .row_footer.gtr-50 {
          margin-top: -10px;
          margin-left: -10px;
        }

          .row_footer.gtr-50 > * {
            padding: 10px 0 0 10px;
          }

          .row_footer.gtr-50.gtr-uniform {
            margin-top: -10px;
          }

            .row_footer.gtr-50.gtr-uniform > * {
              padding-top: 10px;
            }

        .row_footer {
          margin-top: -20px;
          margin-left: -20px;
        }

          .row_footer > * {
            padding: 20px 0 0 20px;
          }

          .row_footer.gtr-uniform {
            margin-top: -20px;
          }

            .row_footer.gtr-uniform > * {
              padding-top: 20px;
            }

        .row_footer.gtr-150 {
          margin-top: -30px;
          margin-left: -30px;
        }

          .row_footer.gtr-150 > * {
            padding: 30px 0 0 30px;
          }

          .row_footer.gtr-150.gtr-uniform {
            margin-top: -30px;
          }

            .row_footer.gtr-150.gtr-uniform > * {
              padding-top: 30px;
            }

        .row_footer.gtr-200 {
          margin-top: -40px;
          margin-left: -40px;
        }

          .row_footer.gtr-200 > * {
            padding: 40px 0 0 40px;
          }

          .row_footer.gtr-200.gtr-uniform {
            margin-top: -40px;
          }

            .row_footer.gtr-200.gtr-uniform > * {
              padding-top: 40px;
            }

    }

    @media screen and (max-width: 480px) {

      .row_footer {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        align-items: stretch;
      }

        .row_footer > * {
          box-sizing: border-box;
        }

        .row_footer.gtr-uniform > * > :last-child {
          margin-bottom: 0;
        }

        .row_footer.aln-left {
          justify-content: flex-start;
        }

        .row_footer.aln-center {
          justify-content: center;
        }

        .row_footer.aln-right {
          justify-content: flex-end;
        }

        .row_footer.aln-top {
          align-items: flex-start;
        }

        .row_footer.aln-middle {
          align-items: center;
        }

        .row_footer.aln-bottom {
          align-items: flex-end;
        }

        .row_footer > .imp-mobilep {
          order: -1;
        }

        .row_footer > .col-1-mobilep {
          width: 8.33333%;
        }

        .row_footer > .off-1-mobilep {
          margin-left: 8.33333%;
        }

        .row_footer > .col-2-mobilep {
          width: 16.66667%;
        }

        .row_footer > .off-2-mobilep {
          margin-left: 16.66667%;
        }

        .row_footer > .col-3-mobilep {
          width: 25%;
        }

        .row_footer > .off-3-mobilep {
          margin-left: 25%;
        }

        .row_footer > .col-4-mobilep {
          width: 33.33333%;
        }

        .row_footer > .off-4-mobilep {
          margin-left: 33.33333%;
        }

        .row_footer > .col-5-mobilep {
          width: 41.66667%;
        }

        .row_footer > .off-5-mobilep {
          margin-left: 41.66667%;
        }

        .row_footer > .col-6-mobilep {
          width: 50%;
        }

        .row_footer > .off-6-mobilep {
          margin-left: 50%;
        }

        .row_footer > .col-7-mobilep {
          width: 58.33333%;
        }

        .row_footer > .off-7-mobilep {
          margin-left: 58.33333%;
        }

        .row_footer > .col-8-mobilep {
          width: 66.66667%;
        }

        .row_footer > .off-8-mobilep {
          margin-left: 66.66667%;
        }

        .row_footer > .col-9-mobilep {
          width: 75%;
        }

        .row_footer > .off-9-mobilep {
          margin-left: 75%;
        }

        .row_footer > .col-10-mobilep {
          width: 83.33333%;
        }

        .row_footer > .off-10-mobilep {
          margin-left: 83.33333%;
        }

        .row_footer > .col-11-mobilep {
          width: 91.66667%;
        }

        .row_footer > .off-11-mobilep {
          margin-left: 91.66667%;
        }

        .row_footer > .col-12-mobilep {
          width: 100%;
        }

        .row_footer > .off-12-mobilep {
          margin-left: 100%;
        }

        .row_footer.gtr-0 {
          margin-top: 0px;
          margin-left: 0px;
        }

          .row_footer.gtr-0 > * {
            padding: 0px 0 0 0px;
          }

          .row_footer.gtr-0.gtr-uniform {
            margin-top: 0px;
          }

            .row_footer.gtr-0.gtr-uniform > * {
              padding-top: 0px;
            }

        .row_footer.gtr-25 {
          margin-top: -5px;
          margin-left: -5px;
        }

          .row_footer.gtr-25 > * {
            padding: 5px 0 0 5px;
          }

          .row_footer.gtr-25.gtr-uniform {
            margin-top: -5px;
          }

            .row_footer.gtr-25.gtr-uniform > * {
              padding-top: 5px;
            }

        .row_footer.gtr-50 {
          margin-top: -10px;
          margin-left: -10px;
        }

          .row_footer.gtr-50 > * {
            padding: 10px 0 0 10px;
          }

          .row_footer.gtr-50.gtr-uniform {
            margin-top: -10px;
          }

            .row_footer.gtr-50.gtr-uniform > * {
              padding-top: 10px;
            }

        .row_footer {
          margin-top: -20px;
          margin-left: -20px;
        }

          .row_footer > * {
            padding: 20px 0 0 20px;
          }

          .row_footer.gtr-uniform {
            margin-top: -20px;
          }

            .row_footer.gtr-uniform > * {
              padding-top: 20px;
            }

        .row_footer.gtr-150 {
          margin-top: -30px;
          margin-left: -30px;
        }

          .row_footer.gtr-150 > * {
            padding: 30px 0 0 30px;
          }

          .row_footer.gtr-150.gtr-uniform {
            margin-top: -30px;
          }

            .row_footer.gtr-150.gtr-uniform > * {
              padding-top: 30px;
            }

        .row_footer.gtr-200 {
          margin-top: -40px;
          margin-left: -40px;
        }

          .row_footer.gtr-200 > * {
            padding: 40px 0 0 40px;
          }

          .row_footer.gtr-200.gtr-uniform {
            margin-top: -40px;
          }

            .row_footer.gtr-200.gtr-uniform > * {
              padding-top: 40px;
            }

    }

</style>