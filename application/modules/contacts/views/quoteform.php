<div class="quote-form-wrapper">
    <form id="seoquoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultseoquotefrom" onsubmit="return false;">
        <div class="row g-3 quote-form align-items-end">

            <div class="col-lg-2 col-md-6">
                <div class="form-group">
                    <span class="form-icon"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control quote-input" name="name" placeholder="Full Name">
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <span class="form-icon"><i class="bi bi-telephone-fill"></i></span>
                    <input type="tel" class="form-control quote-input" name="phone" placeholder="Phone No.">
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="form-group">
                    <span class="form-icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <input type="text" class="form-control quote-input" name="mfrom" placeholder="Moving From">
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="form-group">
                    <span class="form-icon"><i class="bi bi-pin-map-fill"></i></span>
                    <input type="text" class="form-control quote-input" name="mto" placeholder="Moving To">
                </div>
            </div>

            <div class="col-lg-3">
                <button class="btn submit-btn w-100" type="submit">
                    <i class="bi bi-send-fill"></i> Submit
                </button>
            </div>
            <div class="col-12 mt-3" id="resultseoquotefrom"></div>
        </div>
    </form>
</div>
