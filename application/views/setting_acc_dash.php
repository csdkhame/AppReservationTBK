
<style>
.form-control {
  height: 36px;
  padding: 7px 0;
  font-size: 14px;
  line-height: 1.42857;
}
.sweet-alert button {
    width: 100px;
    background-color: #0d6b6a ;
    color: white;
    border: none;
    box-shadow: none;
    font-size: 17px;
    font-weight: 500;
    -webkit-border-radius: 4px;
    border-radius: 25px;
    padding: 10px 32px;
    margin: 26px 5px 0 5px;
    cursor: pointer;
}
.card{
  box-shadow:none !important;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 36px;
  }
  input[type="date"].input-sm, .input-group-sm input[type="date"],
  input[type="time"].input-sm, .input-group-sm
  input[type="time"],
  input[type="datetime-local"].input-sm, .input-group-sm
  input[type="datetime-local"],
  input[type="month"].input-sm, .input-group-sm
  input[type="month"] {
    line-height: 24px;
  }
  input[type="date"].input-lg, .input-group-lg input[type="date"],
  input[type="time"].input-lg, .input-group-lg
  input[type="time"],
  input[type="datetime-local"].input-lg, .input-group-lg
  input[type="datetime-local"],
  input[type="month"].input-lg, .input-group-lg
  input[type="month"] {
    line-height: 44px;
  }
}
.radio label,
.checkbox label {
  min-height: 20px;
}

.form-control-static {
  padding-top: 8px;
  padding-bottom: 8px;
  min-height: 34px;
}

.input-sm .input-sm {
  height: 24px;
  padding: 3px 0;
  font-size: 11px;
  line-height: 1.5;
  border-radius: 0;
}
.input-sm select.input-sm {
  height: 24px;
  line-height: 24px;
}
.input-sm textarea.input-sm,
.input-sm select[multiple].input-sm {
  height: auto;
}

.form-group-sm .form-control {
  height: 24px;
  padding: 3px 0;
  font-size: 11px;
  line-height: 1.5;
}
.form-group-sm select.form-control {
  height: 24px;
  line-height: 24px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 24px;
  min-height: 31px;
  padding: 4px 0;
  font-size: 11px;
  line-height: 1.5;
}

.input-lg .input-lg {
  height: 44px;
  padding: 9px 0;
  font-size: 18px;
  line-height: 1.33333;
  border-radius: 0;
}
.input-lg select.input-lg {
  height: 44px;
  line-height: 44px;
}
.input-lg textarea.input-lg,
.input-lg select[multiple].input-lg {
  height: auto;
}

.form-group-lg .form-control {
  height: 44px;
  padding: 9px 0;
  font-size: 18px;
  line-height: 1.33333;
}
.form-group-lg select.form-control {
  height: 44px;
  line-height: 44px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 44px;
  min-height: 38px;
  padding: 10px 0;
  font-size: 18px;
  line-height: 1.33333;
}

.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 8px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 28px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 8px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 13.0px;
    font-size: 18px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 4px;
    font-size: 11px;
  }
}

.label {
  border-radius: 2px;
}
.label, .label.label-default {
  background-color: #FFFFFF;
}
.label.label-inverse {
  background-color: #212121;
}
.label.label-primary {
  background-color: #9c27b0;
}
.label.label-success {
  background-color: #4caf50;
}
.label.label-info {
  background-color: #00bcd4;
}
.label.label-warning {
  background-color: #ff9800;
}
.label.label-danger {
  background-color: #f44336;
}
.label.label-rose {
  background-color: #e91e63;
}

.form-control,
.form-group .form-control {
  border: 0;
  background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
  background-size: 0 2px, 100% 1px;
  background-repeat: no-repeat;
  background-position: center bottom, center calc(100% - 1px);
  background-color: transparent;
  transition: background 0s ease-out;
  float: none;
  box-shadow: none;
  border-radius: 0;
  font-weight: 400;
}
.form-control::-moz-placeholder,
.form-group .form-control::-moz-placeholder {
  color: #AAAAAA;
  font-weight: 400;
}
.form-control:-ms-input-placeholder,
.form-group .form-control:-ms-input-placeholder {
  color: #AAAAAA;
  font-weight: 400;
}
.form-control::-webkit-input-placeholder,
.form-group .form-control::-webkit-input-placeholder {
  color: #AAAAAA;
  font-weight: 400;
}
.form-control[readonly], .form-control[disabled], fieldset[disabled] .form-control,
.form-group .form-control[readonly],
.form-group .form-control[disabled], fieldset[disabled]
.form-group .form-control {
  background-color: transparent;
}
.form-control[disabled], fieldset[disabled] .form-control,
.form-group .form-control[disabled], fieldset[disabled]
.form-group .form-control {
  background-image: none;
  border-bottom: 1px dotted #D2D2D2;
}

.form-group {
  position: relative;
}
.form-group.label-static label.control-label, .form-group.label-placeholder label.control-label, .form-group.label-floating label.control-label {
  position: absolute;
  pointer-events: none;
  transition: 0.3s ease all;
}
.form-group.label-floating label.control-label {
  will-change: left, top, contents;
}
.form-group.label-placeholder:not(.is-empty) label.control-label {
  display: none;
}
.form-group .help-block {
  position: absolute;
  display: none;
}
.form-group .form-control.valid:focus {
  background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused .form-control {
  outline: none;
  background-image: linear-gradient(#4BB1C1, #4BB1C1), linear-gradient(#D2D2D2, #D2D2D2);
  background-size: 100% 2px, 100% 1px;
  box-shadow: none;
  transition-duration: 0.3s;
}
.form-group.is-focused .form-control .material-input:after {
  background-color: #9c27b0;
}
.form-group.is-focused.form-info .form-control {
  background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-success .form-control {
  background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-warning .form-control {
  background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-danger .form-control {
  background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.form-white .form-control {
  background-image: linear-gradient(#FFFFFF, #FFFFFF), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.is-focused.label-placeholder label,
.form-group.is-focused.label-placeholder label.control-label {
  color: #AAAAAA;
}
.form-group.is-focused .help-block {
  display: block;
}
.form-group.has-warning .form-control {
  box-shadow: none;
}
.form-group.has-warning.is-focused .form-control {
  background-image: linear-gradient(#ff9800, #ff9800), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.has-warning label.control-label,
.form-group.has-warning .help-block {
  color: #ff9800;
}
.form-group.has-error .form-control {
  box-shadow: none;
}
.form-group.has-error.is-focused .form-control {
  background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.has-error .form-control {
  background-image: linear-gradient(#f44336, #f44336), linear-gradient(#D2D2D2, #D2D2D2);
  background-size: 100% 2px, 100% 1px;
  transition-duration: 0.3s;
}
.form-group.has-error label.control-label,
.form-group.has-error .help-block {
  color: #f44336;
}
.form-group.has-success .form-control {
  box-shadow: none;
}
.form-group.has-success.is-focused .form-control {
  background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.has-success label.control-label,
.form-group.has-success .help-block {
  color: #4caf50;
}
.form-group.has-info .form-control {
  box-shadow: none;
}
.form-group.has-info.is-focused .form-control {
  background-image: linear-gradient(#00bcd4, #00bcd4), linear-gradient(#D2D2D2, #D2D2D2);
}
.form-group.has-info label.control-label,
.form-group.has-info .help-block {
  color: #00bcd4;
}
.form-group textarea {
  resize: none;
}
.form-group textarea ~ .form-control-highlight {
  margin-top: -11px;
}
.form-group select {
  appearance: none;
}
.form-group select ~ .material-input:after {
  display: none;
}

.form-control::-moz-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-control:-ms-input-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-control::-webkit-input-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}

.checkbox label,
.radio label,
label,
.label-on-left,
.label-on-right {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}

label.control-label {
  font-size: 11px;
  line-height: 1.07143;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0;
}

.help-block {
  margin-top: 0;
  font-size: 11px;
}

.form-group {
  padding-bottom: 10px;
  margin: 20px 0 0 0;
}
.form-group .form-control::-moz-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group .form-control:-ms-input-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group .form-control::-webkit-input-placeholder {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group .checkbox label,
.form-group .radio label,
.form-group label,
.form-group .label-on-left,
.form-group .label-on-right {
  font-size: 14px;
  line-height: 1.42857;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group label.control-label {
  font-size: 11px;
  line-height: 1.07143;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0;
}
.form-group .help-block {
  margin-top: 0;
  font-size: 11px;
}
.form-group.label-floating label.control-label, .form-group.label-placeholder label.control-label {
  top: -7px;
  font-size: 14px;
  line-height: 1.42857;
}
.form-group.label-static label.control-label, .form-group.label-floating.is-focused label.control-label, .form-group.label-floating:not(.is-empty) label.control-label {
  top: -28px;
  left: 0;
  font-size: 11px;
  line-height: 1.07143;
}
.form-group.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
  top: -28px;
  left: 0;
  font-size: 11px;
  line-height: 1.07143;
}

.form-group.form-group-sm {
  padding-bottom: 10px;
  margin: 20px 0 0 0;
}
.form-group.form-group-sm .form-control::-moz-placeholder {
  font-size: 11px;
  line-height: 1.5;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-sm .form-control:-ms-input-placeholder {
  font-size: 11px;
  line-height: 1.5;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-sm .form-control::-webkit-input-placeholder {
  font-size: 11px;
  line-height: 1.5;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-sm .checkbox label,
.form-group.form-group-sm .radio label,
.form-group.form-group-sm label,
.form-group.form-group-sm .label-on-left,
.form-group.form-group-sm .label-on-right {
  font-size: 11px;
  line-height: 1.5;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-sm label.control-label {
  font-size: 9px;
  line-height: 1.125;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0;
}
.form-group.form-group-sm .help-block {
  margin-top: 0;
  font-size: 9px;
}
.form-group.form-group-sm.label-floating label.control-label, .form-group.form-group-sm.label-placeholder label.control-label {
  top: -11px;
  font-size: 11px;
  line-height: 1.5;
}
.form-group.form-group-sm.label-static label.control-label, .form-group.form-group-sm.label-floating.is-focused label.control-label, .form-group.form-group-sm.label-floating:not(.is-empty) label.control-label {
  top: -25px;
  left: 0;
  font-size: 9px;
  line-height: 1.125;
}
.form-group.form-group-sm.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
  top: -25px;
  left: 0;
  font-size: 9px;
  line-height: 1.125;
}

.form-group.form-group-lg {
  padding-bottom: 10px;
  margin: 20px 0 0 0;
}
.form-group.form-group-lg .form-control::-moz-placeholder {
  font-size: 18px;
  line-height: 1.33333;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-lg .form-control:-ms-input-placeholder {
  font-size: 18px;
  line-height: 1.33333;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-lg .form-control::-webkit-input-placeholder {
  font-size: 18px;
  line-height: 1.33333;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-lg .checkbox label,
.form-group.form-group-lg .radio label,
.form-group.form-group-lg label,
.form-group.form-group-lg .label-on-left,
.form-group.form-group-lg .label-on-right {
  font-size: 18px;
  line-height: 1.33333;
  color: #AAAAAA;
  font-weight: 400;
}
.form-group.form-group-lg label.control-label {
  font-size: 14px;
  line-height: 1.0;
  color: #AAAAAA;
  font-weight: 400;
  margin: 16px 0 0 0;
}
.form-group.form-group-lg .help-block {
  margin-top: 0;
  font-size: 14px;
}
.form-group.form-group-lg.label-floating label.control-label, .form-group.form-group-lg.label-placeholder label.control-label {
  top: -5px;
  font-size: 18px;
  line-height: 1.33333;
}
.form-group.form-group-lg.label-static label.control-label, .form-group.form-group-lg.label-floating.is-focused label.control-label, .form-group.form-group-lg.label-floating:not(.is-empty) label.control-label {
  top: -32px;
  left: 0;
  font-size: 14px;
  line-height: 1.0;
}
.form-group.form-group-lg.label-floating input.form-control:-webkit-autofill ~ label.control-label label.control-label {
  top: -32px;
  left: 0;
  font-size: 14px;
  line-height: 1.0;
}

select.form-control {
  border: 0;
  box-shadow: none;
  border-radius: 0;
}
.form-group.is-focused select.form-control {
  box-shadow: none;
  border-color: #D2D2D2;
}
select.form-control[multiple], .form-group.is-focused select.form-control[multiple] {
  height: 85px;
}

.input-group-btn .btn {
  margin: 0 0 7px 0;
}

.form-group.form-group-sm .input-group-btn .btn {
  margin: 0 0 3px 0;
}
.form-group.form-group-lg .input-group-btn .btn {
  margin: 0 0 9px 0;
}

.input-group .input-group-btn {
  padding: 0 12px;
}
.input-group .input-group-addon {
  border: 0;
  background: transparent;
  padding: 6px 15px 0px;
}

.form-group input[type=file] {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 100;
}

.form-control-feedback {
  opacity: 0;
}
.has-success .form-control-feedback {
  color: #4caf50;
  opacity: 1;
}
.has-error .form-control-feedback {
  color: #f44336;
  opacity: 1;
}

.btn-file {
  position: relative;
  overflow: hidden;
  vertical-align: middle;
}

.btn-file > input {
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  margin: 0;
  font-size: 23px;
  cursor: pointer;
  filter: alpha(opacity=0);
  opacity: 0;
  direction: ltr;
}

.fileinput {
  display: inline-block;
  margin-bottom: 9px;
}

.fileinput .form-control {
  display: inline-block;
  padding-top: 7px;
  padding-bottom: 5px;
  margin-bottom: 0;
  vertical-align: middle;
  cursor: text;
}

.fileinput .thumbnail {
  display: inline-block;
  margin-bottom: 10px;
  overflow: hidden;
  text-align: center;
  vertical-align: middle;
  max-width: 250px;
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.fileinput .thumbnail.img-circle {
  border-radius: 50%;
  max-width: 100px;
}

.fileinput .thumbnail > img {
  max-height: 100%;
}

.fileinput .btn {
  vertical-align: middle;
}

.fileinput-exists .fileinput-new,
.fileinput-new .fileinput-exists {
  display: none;
}

.fileinput-inline .fileinput-controls {
  display: inline;
}

.fileinput-filename {
  display: inline-block;
  overflow: hidden;
  vertical-align: middle;
}

.form-control .fileinput-filename {
  vertical-align: bottom;
}

.fileinput.input-group {
  display: table;
}

.fileinput.input-group > * {
  position: relative;
  z-index: 2;
}

.fileinput.input-group > .btn-file {
  z-index: 1;
}

.fileinput-new.input-group .btn-file,
.fileinput-new .input-group .btn-file {
  border-radius: 0 4px 4px 0;
}

.fileinput-new.input-group .btn-file.btn-xs,
.fileinput-new .input-group .btn-file.btn-xs,
.fileinput-new.input-group .btn-file.btn-sm,
.fileinput-new .input-group .btn-file.btn-sm {
  border-radius: 0 3px 3px 0;
}

.fileinput-new.input-group .btn-file.btn-lg,
.fileinput-new .input-group .btn-file.btn-lg {
  border-radius: 0 6px 6px 0;
}

.form-group.has-warning .fileinput .fileinput-preview {
  color: #ff9800;
}

.form-group.has-warning .fileinput .thumbnail {
  border-color: #ff9800;
}

.form-group.has-error .fileinput .fileinput-preview {
  color: #f44336;
}

.form-group.has-error .fileinput .thumbnail {
  border-color: #f44336;
}

.form-group.has-success .fileinput .fileinput-preview {
  color: #4caf50;
}

.form-group.has-success .fileinput .thumbnail {
  border-color: #4caf50;
}

.input-group-addon:not(:first-child) {
  border-left: 0;
}
</style>
<style>
	.oninput {
    padding-top: 32px;
    border: 0;
    -webkit-appearance: none;
    cursor: pointer;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus, .nav-pills>li>a:hover, .nav-pills>li>a:focus {
    background-color: #fff;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
   /* background-color: #9c27b0;
    color: #FFF;*/
    box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px #555;
}
.wizard-card[data-color="blue"] .moving-tab {
    background-color: #16B3B1;
    box-shadow: 0 16px 26px -10px rgba(118, 202, 213, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 188, 212, 0.2);
}
.btn-tem{
	background-color: #16B3B1;
}.btn-sil{
	    background-color: #999;
}
.wizard-card {
    min-height: 410px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0), 0 6px 30px 5px rgba(0, 0, 0, 0), 0 8px 10px -5px rgba(0, 0, 0, 0.13);;
}
#sectionsNav {
    /* position: absolute; */
    /* background: rgba(255, 255, 255, 0) !important; */
    /* margin: auto; */
    z-index: 20;
    /* width: 100%; */
    padding-bottom: 0;
    padding-top: 0;
    box-shadow: none;
    margin-bottom: 0;
    /* background: #07c284; */
    border-radius: 0 !important;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}
.picture-container {
    position: relative;
    cursor: pointer;
    text-align: center;
}
 .picture {
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 5px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
</style>
<script>
	var base_url = '<?php echo base_url(); ?>';
</script>
<section style="margin-top: 55px;    margin-bottom: 60px;">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="">
                    <div style="font-size: 15px; padding: 10px 4px;font-weight: 500;"> 
                        <div class="" style="display:inline-block"><span class="lng-acc">Account</span></div>
                    </div>
                     <form action="" method="post" novalidate="novalidate" id="update_profile">
                    <div class="card">  
                        <div class="picture-container">
                            <div class="picture">
                                <img src="https://dotdotdottrip.com/pic/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="">
                                <input type="file" id="wizard-picture" name="avatar">
                                <input type="hidden" id="txt_avatar" name="txt_avatar" value="">
                                                            
                            </div>
                            <h6><span class="lng-choose_pic">Choose Picture</span></h6>
                        </div>
                        <div class="col-sm-12" style="background-color: #fff;">
                                                
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-name">
                                                            <label class="control-label"><span class="lng-first-name">First Name</span>
                                                              
                                                            </label>
                                                            <input name="firstname" type="text" class="form-control error" aria-required="true" aria-invalid="true" id="firstname">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                                                                      
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-lastname">
                                                            <label class="control-label"><span class="lng-last-name">Last Name</span>
                                                               
                                                            </label>
                                                            <input name="lastname" type="text" class="form-control error" aria-required="true" aria-invalid="true" id="lastname">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                  
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">email</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-email">
                                                            <label class="control-label"><span class="lng-email_d">Email</span>
                                                               
                                                            </label>
                                                            <input name="email" type="email" class="form-control error" aria-required="true" aria-invalid="true" id="email" >
                                                        <span class="material-input"></span></div>
                                                    </div> 
                                                   
                                                     <div class="input-group">
                                                        <span class="input-group-addon">
                                                           <i class="material-icons">phone</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-phone">
                                                            <label class="control-label"><span class="lng-phone">Phone</span> 
                                                                
                                                            </label>
                                                           
                                                            <input name="phone" type="tel" class="form-control error" aria-required="true" aria-invalid="true" id="phone" >
                                                            <input name="code_phone" type="hidden" id="code_phone"/>
                                                            
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">room</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-address">
                                                            <label class="control-label"><span class="lng-address">Address</span></label>
                                                            <textarea class="form-control" name="txt_address" id="txt_address"></textarea>
                                                            <span class="material-input"></span></div>
                                                        </div>
                                                        
                                                        <div class="form-group label-floating " id="div-country">
                                                        <label class="control-label"><span class="lng-country"></span></label>
                                                        <select name="country" class="form-control" name="country" id="country_sekect">
                                                            <option disabled="" selected="">---</option>
                                                          <!--  <option value="Thailand" selected="selected"> Thailand </option>
                                                            <option value="Afghanistan"> Afghanistan </option>
                                                            <option value="Albania"> Albania </option>
                                                            <option value="Algeria"> Algeria </option>
                                                            <option value="American Samoa"> American Samoa </option>
                                                            <option value="Andorra"> Andorra </option>
                                                            <option value="Angola"> Angola </option>
                                                            <option value="Anguilla"> Anguilla </option>
                                                            <option value="Antarctica"> Antarctica </option>
                                                            <option value="...">...</option>-->
                                                        </select>
                                                    <span class="material-input" ></span></div>
                                               
                                                    </div>
                                                    <div style="margin-top: 30px;    padding: 0 12px;">
                                                    <div class=" btn-change " id="change_password" style="display: block;
                                                    padding: 12px;
                                                    text-decoration: none;
                                                    cursor: pointer;
                                                    min-width: 120px;
                                                    border-radius: 25px;
                                                    text-align: center;
                                                    color: #ffffff;
                                                    background-color: #333;" >
                                                        <span class="lng-change-password">Change password</span>
                                                    </div>
                            </div>

													 <div style="margin-top: 12px;    padding: 0 12px;">
                                                    <div class="btn-change " id="submit" style="display: block;
                                                    padding: 12px;
                                                    text-decoration: none;
                                                    cursor: pointer;
                                                    min-width: 120px;
                                                    border-radius: 25px;
                                                    text-align: center;
                                                    color: #ffffff;
                                                    background-color: #16B3B1;" >
                                                        <span class="lng-send">Send</span>
                                                    </div>
                            </div>
                                                  </div>
  <style>
  	   #change-password{
	   	     z-index: 20;
    position: fixed;
    left: 0px;
    top: 0px;
    /* background: rgba(0, 0, 0, 0.59); */
    display: none;
	   }
	   .box-in-foget {
    height: 100vh;
    /* border-radius: 4px; */
    background: #fff;
    min-width: 100%;
    /* height: auto; */
    left: 50vw;
    top: 50vh;
    transform: translate(-50%,-50%);
    position: fixed;
    z-index: 3;
}
.btn-login-forget {
    text-transform: uppercase;
    text-align: center;
    color: #ffffff;
    border: 1px solid #4BB1C1;
    right: 15px;
    padding: 12px 20px;
    bottom: 15px;
    background: #16B3B1;
    display: none;
}
.btn-close {
    /* width: 200px; */
    background: #4BB1C1;
    /* text-transform: uppercase; */
    text-align: center;
    color: #ffffff;
    border: 1px solid #4BB1C1;
    /* position: absolute; */
    right: 15px;
    padding: 12px 20px;
    bottom: 15px;
}
.btn-send {
    padding: 12px 20px;
    background: #16B3B1;
    color: #fff;
    width: 140px;
    position: absolute;
    text-align: center;
    right: 0px;
    margin-top: 15px;
}
.closepop{
  position: absolute;
    right: 15px;
}
  </style>           
  				                                  
                 <div id="change-password" style="display: none;">
            <div class="box-in-foget">
            <div style="background: rgb(22, 179, 177);
    color: #fff;
    padding: 18px;
    text-align: center;
    font-size: 19px;
    margin-bottom: 10px;">
                     <span style="    text-align: center;" class="lng-change_pass lng-change-password"></span>
                       <i class="material-icons closepop">close</i>
                       </div> 
                <div style="padding: 12px;">
                   <div class="col-md-12" id="forget">
                     
                       
                       <!-- <div style="margin-top: 50px; font-size: 15px; color: #333333;margin-bottom: 10px;">
                            <span class="lng-please-input-email">Please input your email</span>
                        </div>-->
                     <!--  <div class="col-lg-10 col-lg-offset-1" style="    top: 20px;">-->
                       <div class="" style="     padding-top: 15px;">
                                                
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">account_circle</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-username">
                                                            <label class="control-label lng-username_d">
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="username" type="text" class="form-control error" aria-required="true" aria-invalid="true" id="username">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                                                      
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                           <i class="material-icons">lock_outline</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-old_password">
                                                            <label class="control-label lng-old-password">
                                                                <small>(required)</small></label>
                                                            <input name="old_password" type="password" class="form-control error" aria-required="true" aria-invalid="true" id="old_password">   				
                                                        <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                           <i class="material-icons">lock_outline</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-new_password">
                                                            <label class="control-label lng-new-password">
                                                                <small>(required)</small>
                                                               </label>
                                                            <input name="new_password" type="password" class="form-control error" aria-required="true" aria-invalid="true" id="new_password">   																
                                                        <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group" style="display: nones;" id="check_equal_password">
                                                        <span class="input-group-addon">
                                                           <i class="material-icons">lock_outline</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty has-error" id="div-confirm_password">
                                                            <label class="control-label lng-confirm-password" >
                                                                <small>(required)</small></label>
                                                            <input name="confirm_password" type="password" class="form-control error" aria-required="true" aria-invalid="true" id="confirm_password">   				<span id="icon_status"></span>
                                                        <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                  <div class="btn-send lng-send" style="padding: 12px 20px;display: none;" id="send_pass">Send</div>
                                                </div>
                    </div>
                    
                </div>
               <!-- <div id="status"></div>-->
                <!-- <div style="position: fixed; padding: 0 12px; width: 100%;bottom: 12px;">  -->
                <!-- <div class="btn-close lng-close">Close</div> -->
                  <!--  <div class="btn-login-forget lng-login">Login</div>-->
                <!-- </div> -->
            </div>
        </div>
                  
                 
					</form>                          
                 </div>
                                               
                                                	
                                               
                                     
                                            
                                                 
                                                </div>
                                                 
                                            
                                            
                    </div>
                </div>
      
</section>


<script>
var choosepic;
var acc;

if($.cookie("lng")=="en"){
choosepic = "Choose Picture";
acc = "Account";
var title = "Are you sure?";
var text = "You want to change profile?";
var yes = "Yes";
var no = "Cancel";
var success = 'Success';
var success_txt = 'Update successfuly.';

var error = 'Error';
var error_txt = 'Something went wrong';
}
else if($.cookie("lng")=="cn"){
choosepic = "帐户";
acc = "帐户";
	var title = "你确定吗?";
var text = "你想改变个人资料?";
var yes = "同意";
var no = "取消";
var success = '成功';
var success_txt = "成功更新";

var error = '错误';
var error_txt = '出了些问题';
}
else if($.cookie("lng")=="th"){
choosepic = "เลือกภาพ";
acc = "บัญชี";
var title = "คุณแน่ใจหรือไม่?";
var text = "คุณต้องการเปลี่ยนโปรไฟล์หรือไม่?";
var yes = "ตกลง";
var no = "ยกเลิก";
var success = 'สำเร็จ';
var success_txt = 'อัพเดท สำเร็จ.';

var error = 'ผิดพลาด';
var error_txt = 'มีบางอย่างผิดพลาด';
}
else if($.cookie("lng")==undefined){
choosepic = "Choose Picture";
acc = "Account";
var title = "Are you sure?";
var text = "You want to change profile?";
var yes = "Yes";
var no = "Cancel";
var success = 'Success';
var success_txt = 'Update successfuly.';

var error = 'Error';
var error_txt = 'Something went wrong';
}

$('.lng-choose_pic').text(choosepic);
$('.lng-acc').text(acc);
</script>

<script>
	$( "#submit" ).click(function(e) {
		 e.preventDefault();
		swal({
				  title: title,
				  text: text,
				  type: "warning",
				  showCancelButton: true,
				  confirmButtonClass: "btn-danger",
          confirmButtonText: yes,
          confirmButtonColor: '#0d6b6a',
          cancelButtonColor: '#d33',
				  cancelButtonText: no,
				  closeOnConfirm: false
				},
				function(){
				  		
					var url = base_url+"dashboard/update_profile";
					data_form = $('#update_profile').serialize();    
					data = new FormData($('#update_profile')[0]);
					
    				data.append('file', $('#wizard-picture')[0].files[0]);

					                   
					   $.ajax({
					                url: base_url+'dashboard/update_profile', // point to server-side PHP script 
					                dataType: 'text',  // what to expect back from the PHP script, if anything
					                cache: false,
					                contentType: false,
					                processData: false,
					                data: data,                         
					                type: 'post',
					                success: function(php_script_response){
					                    //alert(php_script_response); // display response from the PHP script, if any
					                    console.log(php_script_response);
					                    if(php_script_response==1){
											swal(""+success+"", ""+success_txt+"", "success");
											setTimeout(function(){ window.location.href = '<?php echo base_url(); ?>dashboard/account_settings'; }, 1500);
											
										}else{
											swal(""+error+"", ""+error_txt+"", "error");
										}
					                }
					     });
 
				});

	
	});
	
$( "#country_sekect" ).change(function() {
  var code = $('#country_sekect :selected').attr('class');
//  console.log(code);
 $('#code_phone').val(code);

});
	
	
</script>

<script>

$(document).ready(function(){

 $.post( "<?php echo base_url(); ?>dashboard/get_user", function( data ) {
 var obj = JSON.parse(data);
 
 console.log(obj);
		$.each(obj, function (index, value) {
			$('#name').html(obj[index].s_name);
	if(obj[index].s_first_name!="")	{
		$("#div-name").removeClass("is-empty has-error");	
    	$('#firstname').val(obj[index].s_first_name);
	}	
	if(obj[index].s_last_name!="")	{
		$("#div-lastname").removeClass("is-empty has-error");	
    	$('#lastname').val(obj[index].s_last_name);
	}	
    if(obj[index].s_email!="")	{
		 $("#div-email").removeClass("is-empty has-error");	
   		 $('#email').val(obj[index].s_email);
	}	
	if(obj[index].s_phone!="")	{
		 $("#div-phone").removeClass("is-empty has-error");	
    	 $('#phone').val(obj[index].s_phone);
	}
    if(obj[index].s_username!="")	{
		$("#div-username").removeClass("is-empty has-error");	
    	$('#username').val(obj[index].s_username);
	}
	if(obj[index].t_address!="")	{
		$("#div-address").removeClass("is-empty has-error");	
    	$('#txt_address').val(obj[index].t_address);
	}
    
    
    $('#txt_avatar').val(obj[index].s_image);
    if(obj[index].s_image!=""){
		$('#wizardPicturePreview').attr('src','<?php echo base_url();?>pic/'+obj[index].s_image);
	}
	var country_id = obj[index].i_country;
    var selected = "";
    
    $.post( "<?php echo base_url(); ?>getcountry_control/process", function( data_c ) {	
  	 var obj_c = JSON.parse(data_c);  	 
  	 console.log(obj_c);
  	 $.each(obj_c, function (index, value) {
if(value.id == country_id ){
	selected = "selected";
}else{
	selected = "";
}
if($.cookie("lng")=="en"){
$('#country_sekect').append('<option value="'+value.id+'" '+selected+' class="'+value.phonecode+'" > '+value.name_en+' </option>');
}else if($.cookie("lng")=="cn"){
$('#country_sekect').append('<option value="'+value.id+'" '+selected+' class="'+value.phonecode+'"> '+value.name_cn+' </option>');
}else if($.cookie("lng")=="th"){
$('#country_sekect').append('<option value="'+value.id+'" '+selected+' class="'+value.phonecode+'"> '+value.name_th+' </option>');
}else if($.cookie("lng")==undefined){
$('#country_sekect').append('<option value="'+value.id+'" '+selected+' class="'+value.phonecode+'"> '+value.name_en+' </option>');
}	 

  	 });
  	   $("#div-country").removeClass("is-empty has-error");
  });  

		});
});  

   $('#change_password').click(function(){
		$('#change-password').show(700);
   });
	
	$('#send_pass').click(function(){
		var old_pass = $('#old_password').val();
		var new_pass = $('#new_password').val();
		$.post( base_url+"dashboard/update_password",{new_pass:new_pass,old_pass:old_pass}, function( data ) {
		  console.log(data);
		  if(data==2){
if($.cookie("lng")=="en"){
swal("Error!", 'Your old password invalid', "error");
}else if($.cookie("lng")=="cn"){
	swal("错误!", '您的旧密码无效', "error");
}else if($.cookie("lng")=="th"){
	swal("ผิดพลาด!", 'รหัสผ่านเดิมไม่ถูกต้อง', "error");
}else if($.cookie("lng")==undefined){
swal("Error!", 'Your old password invalid', "error");
}

		  }
		  if(data==0){
	  	
if($.cookie("lng")=="en"){
swal("Error!", "Something went wrong!", "error");	
}else if($.cookie("lng")=="cn"){
	swal("错误!", '出了些问题', "error");
}else if($.cookie("lng")=="th"){
	swal("ผิดพลาด!", 'บางอย่างผิดพลาด', "error");
}else if($.cookie("lng")==undefined){
swal("Error!", "Something went wrong!", "error");	
}
		  }
		  if(data==1){

if($.cookie("lng")=="en"){
swal("Success!", "" , "success");	
}else if($.cookie("lng")=="cn"){
swal("成功!", "" , "success");	
}else if($.cookie("lng")=="th"){
swal("สำเร็จ!", "" , "success");	
}else if($.cookie("lng")==undefined){
swal("Success!", "" , "success");	
}	 	
$('#change-password').hide(700);

		 }
		});
		
		
  });
  
	$('.closepop').click(function(){
		$('#change-password').hide(700);
		
	});
	
    
}); 
</script>

<script>
	$(document).ready(function(){
		
		
		$("#confirm_password").keyup(function(){
			$('#icon_status').addClass('material-icons form-control-feedback');
        	var old_p = $('#new_password').val();
        	if($(this).val()===old_p){
        	
				$('#div-confirm_password').removeClass();
				$('#div-confirm_password').addClass('form-group label-floating has-success');
				$('#icon_status').html('done');
				$('#send_pass').show(500);
				
			}else{
				
				$('#div-confirm_password').removeClass();
				$('#div-confirm_password').addClass(' label-floating is-empty has-error');
				$('#icon_status').html('clear');
//				$('#check_equal_password').hide();
			}	
			
			
   		 });
	}); 
</script>