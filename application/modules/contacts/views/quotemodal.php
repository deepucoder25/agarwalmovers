<!-- Quote Modal -->
<div class="modal fade" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg">

      <!-- Header -->
      <div class="modal-header text-white">
        <h5 class="modal-title fw-semibold"><i class="fa-solid fa-clipboard-list me-2"></i> Get a Free Quote</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Form -->
      <form method="post" id="quotemodal" onsubmit="return false;">
        <div class="modal-body bg-light">

          <!-- Row 1 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input type="tel" class="form-control shadow-sm" name="phone" id="phone"
                  placeholder="Enter your mobile number">
              </div>

            </div>
          </div>

          <!-- Row 2 -->
          <div class="row g-3 mb-3">
            <div class="col-12">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control shadow-sm" name="email" id="email" placeholder="Enter your email">
              </div>
              
            </div>

          </div>
          <!-- Row 3 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                <input type="text" class="form-control shadow-sm" name="mfrom" id="mfrom" placeholder="Moving From">
              </div>

            </div>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-geo-fill"></i></span>
                <input type="text" class="form-control shadow-sm" name="mto" id="mto" placeholder="Moving To">
              </div>

            </div>
            <div class="row g-3 mb-3">
              <div class="col-12">
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                  <textarea name="message" id="message" class="form-control shadow-sm" rows="3"
                    placeholder="Write your message"></textarea>
                </div>

              </div>
            </div>
          </div>
          <div id="resultquotemodal" class="mt-3"></div>
        </div>
        <div class="modal-footer d-flex  bg-white">
          <button type="reset" class="btn btn-outline-secondary px-4" onclick="$('#resultquotemodal').html('');">
            <i class="fa-solid fa-rotate-left me-1"></i> Clear
          </button>
          <button type="submit" id="submitbquotemodal" class="btn btn-danger px-4">
            <i class="fa-solid fa-paper-plane me-1"></i> Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<style>
  .modal-header {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
  }

  .modal-content {
    border-radius: 16px;
    overflow: hidden;
  }

  .form-control {
    border-radius: 10px;
    border: 1px solid #ddd;
    transition: 0.25s ease;
  }

  .form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
  }

  .form-control:hover {
    border-color: var(--primary-color);
  }

  .modal-footer {
    justify-content: center;
    gap: 10px;
  }

  .modal-footer .btn {
    border-radius: 30px;
    padding: 8px 20px;
  }

  .input-group-text {
    background: #fff;
    border-radius: 10px 0 0 10px;
    border: 1px solid #ddd;
    color: var(--primary-color);
  }

  .input-group .form-control {
    border-left: 0;
    border-radius: 0 10px 10px 0;
  }
</style>
<!-- Script (unchanged logic) -->
<script type="text/javascript">
  $(function () {
    $('#submitbquotemodal').click(function () {
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('contacts/booking') ?>",
        data: $("#quotemodal").serialize(),
        beforeSend: function () {
          $('#resultquotemodal').html('<p class="text-center text-muted">Please wait...</p>');
        },
        success: function (data) {
          $('#resultquotemodal').empty();
          if (data == '1') {
            data = "<div class='alert alert-success'>Thank you! Your quote request has been successfully submitted. We'll respond soon.</div>";
            $("#quotemodal").trigger('reset');
            gtag('event', 'conversion', { 'send_to': 'AW-16778879117/JlJPCPjgvOwZEI3B5cA-' });
          }
          $('#resultquotemodal').html(data);
        }
      });
    });
  });
</script>