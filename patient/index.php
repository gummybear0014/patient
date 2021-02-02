<?php  include('server.php'); ?>
<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.22923" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.22923" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.22923" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.22923" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/file-uploader/fileuploader.js?v=3.3.22923"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.22923" type="text/javascript"></script>

<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.22923" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.22923" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.22923" />
<form class="jotform-form" action="https://submit.jotform.com/submit/210321723810441/" method="post" enctype="multipart/form-data" name="form_210321723810441" id="210321723810441" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="210321723810441" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
          <legend> 
        <img src="image/logo.png" alt="Magcoop" width="100"
       height="80"></legend><br>
            <h1 id="header_1" class="form-header" data-component="header">
              Patient Information Form
            </h1>
          </div>
        </div>
      </li>
      <li id="cid_33" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_33" class="form-header" data-component="header">
              Personal Information
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3"> Name </label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="q3_name[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
        
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="q3_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
            </br>
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
            <select name="company" class ="form-textbox form-address-state"required class="form-control selectpicker">
                        <option value="0">Select Company</option>
                        <option value="1">Company 1</option>
                        <option value="2">Company 2</option>
                        <option value="3">Company 3</option>
                    </select>
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Company </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="q3_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Vessel </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_34">
        <label class="form-label form-label-top form-label-auto" id="label_34" for="input_34_addr_line1"> Address </label>
        <div id="cid_34" class="form-input-wide" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_addr_line1" name="q34_address[addr_line1]" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_34 sublabel_34_addr_line1" required="" />
                  <label class="form-sub-label" for="input_34_addr_line1" id="sublabel_34_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_addr_line2" name="q34_address[addr_line2]" class="form-textbox form-address-line" value="" data-component="address_line_2" aria-labelledby="label_34 sublabel_34_addr_line2" />
                  <label class="form-sub-label" for="input_34_addr_line2" id="sublabel_34_addr_line2" style="min-height:13px" aria-hidden="false"> Barangay </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_city" name="q34_address[city]" class="form-textbox form-address-city" value="" data-component="city" aria-labelledby="label_34 sublabel_34_city" required="" />
                  <label class="form-sub-label" for="input_34_city" id="sublabel_34_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_state" name="q34_address[state]" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_34 sublabel_34_state" required="" />
                  <label class="form-sub-label" for="input_34_state" id="sublabel_34_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_state" name="q34_address[state]" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_34 sublabel_34_state" required="" />
                  <label class="form-sub-label" for="input_34_state" id="sublabel_34_state" style="min-height:13px" aria-hidden="false"> Nationality </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_city" name="q34_address[city]" class="form-textbox form-address-city" value="" data-component="city" aria-labelledby="label_34 sublabel_34_city" required="" />
                  <label class="form-sub-label" for="input_34_city" id="passport" style="min-height:13px" aria-hidden="false"> Passport No. </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">

                            
                    <select name="gender" class ="form-textbox form-address-state"required class="form-control selectpicker">
                        <option value="">Select your Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>

                  <label class="form-sub-label" for="input_34_state" id="sublabel_34_state" style="min-height:13px" aria-hidden="false"> Gender </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="date" id="input_34_state" name="q34_address[state]" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_34 sublabel_34_state" required="" />
                  <label class="form-sub-label" for="input_34_state" id="sublabel_34_state" style="min-height:13px" aria-hidden="false"> Birth Date </label>
                </span>
              </span>
            </div>

            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" onkeypress='validate(event)' id="input_34_city" name="q34_address[city]" class="form-textbox form-address-city" value="" data-component="city" aria-labelledby="label_34 sublabel_34_city" required="" />
                  <label class="form-sub-label" for="input_34_city" id="passport" style="min-height:13px" aria-hidden="false"> Contact No. </label>



                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_state" name="q34_address[state]" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_34 sublabel_34_state" required="" />
                  <label class="form-sub-label" for="input_34_state" id="sublabel_34_state" style="min-height:13px" aria-hidden="false"> Send Result to </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_state" name="q34_address[state]" class="form-textbox form-address-state" value="" data-component="state" aria-labelledby="label_34 sublabel_34_state" required="" />
                  <label class="form-sub-label" for="input_34_state" id="sublabel_34_state" style="min-height:13px" aria-hidden="false"> OR No. </label>
                </span>
              </span>
            </div>



            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                <select name="gender" class ="form-textbox form-address-state"required class="form-control selectpicker">
                        <option value="">Swab No</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>other</option>
                    </select>
                  <label class="form-sub-label" for="input_34_city" id="passport" style="min-height:13px" aria-hidden="false"> Swab No </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">

                            
                    <select name="gender" class ="form-textbox form-address-state"required class="form-control selectpicker">
                        <option value="">Select Payment</option>
                        <option>Cash</option>
                        <option>Charge</option>
                        <option>Crew on Loan</option>
                    </select>

                  <label class="form-sub-label" for="input_34_state" id="sublabel_34_state" style="min-height:13px" aria-hidden="false"> Payment </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                <select name="gender" class ="form-textbox form-address-state"required class="form-control selectpicker">
                        <option value="0">Laboratory</option>
                        <option value="1">Detoxicare</option>
                        <option value="2">Manila Doctors</option>
                        <option value="3">Stat on Detoxicare</option>
                        <option value="3">Stat on Manila Doctor</option>
                    </select>
                  <label class="form-sub-label" for="input_34_state" id="sublabel_34_state" style="min-height:13px" aria-hidden="false"> Laboratory </label>
                </span>
              </span>
            </div>



            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_34_postal" name="q34_address[postal]" class="form-textbox form-address-postal" value="" data-component="zip" aria-labelledby="label_34 sublabel_34_postal" required="" />
                  <label class="form-sub-label" for="input_34_postal" id="sublabel_34_postal" style="min-height:13px" aria-hidden="false">Remarks </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
     
      
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
<script>

function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.22923"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.22923"></script>