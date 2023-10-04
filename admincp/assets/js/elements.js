/**
 * forms/element.js
 *
 * Copyright 2014-2015 John Pozy
 * Licensed: http://themeforest.net/licenses
 */
(function(factory) {

  'use strict';

  if (typeof define === 'function' && define.amd) {
    /** AMD. Register as an anonymous module. */
    define([
      'jquery-ui',
      'jquery-ui-timepicker-addon',
      'inputmask',
      'select2'
    ], factory);
  } else if (typeof exports === 'object') {
    /** Node/CommonJS */
    module.exports = factory(
      require('jquery-ui'),
      require('jquery-ui-timepicker-addon'),
      require('inputmask'),
      require('select2')
    );
  } else {
    /** Browser globals */
    factory();
  }
}(function() {

  'use strict';

  /** Contact select */
  (function() {
    var REGEX_EMAIL = '([a-z0-9!#$%&*+/=?^_`{|}~-]+(?:[a-z0-9!#$%&*+/=?^_`{|}~-]+)*@' + '(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)';

    var formatName = function(item) {
      return $.trim((item.firstName || '') + ' ' + (item.lastName || ''));
    };
    /** contact */
    
  })();


  /**
   * Datepicker
   */
  /** default */
  $('#datepicker1').datepicker({
    dateFormat: "yy-mm-dd",
    showButtonPanel: true,
    changeMonth: true,
    changeYear: true
  });
  $('#datepicker-pet').datepicker({
    dateFormat: "yy-mm-dd",
    showButtonPanel: true,
    changeMonth: true,
    changeYear: true
  });

  /** date in other moonth */
  $('#datepicker2').datepicker({
    showOtherMonths: true,
    selectOtherMonths: true
  });

  /** button bar */
  $('#datepicker3').datepicker({
    showButtonPanel: true
  });

  /** display month & year */
  $('#datepicker4').datepicker({
    changeMonth: true,
    changeYear: true
  });

  /** select date range */
  $('#datepicker-from').datepicker({
    defaultDate: '+1w',
    numberOfMonths: 2,
    onClose: function(selectedDate) {
      $('#datepicker-to').datepicker('option', 'minDate', selectedDate);
    }
  });
  $('#datepicker-to').datepicker({
    defaultDate: '+1w',
    numberOfMonths: 2,
    onClose: function(selectedDate) {
      $('#datepicker-from').datepicker('option', 'maxDate', selectedDate);
    }
  });


  /**
   * Timepicker
   */
  /** datepicker + timepicker */
  $('#datetime-picker').datetimepicker();

  /** timepicker only */
  $('#time-picker').timepicker();

  /** timepicker time format */
  $('#time-picker-format').timepicker({
    timeFormat: 'hh:mm:ss tt'
  });

  /** timepicker timezone */
  $('#time-picker-timezone').timepicker({
    timeFormat: 'hh:mm:ss tt z'
  });


  /**
   * Select2
   */
  /** basic */
  $('select[name="select2-basic"]').select2();

  /** multiple */
  $('select[name="select2-multiple"]').select2();

  /** placeholder */
  $('select[name="select2-placeholder"]').select2({
    placeholder: 'Select a State'
  });


  /**
   * Bootstrap touchspin
   */
  /** basic */
  $('input[name="bs-touchspin-basic"]').TouchSpin();

  /** vertical button */
  $('input[name="bs-touchspin-vbutton"]').TouchSpin({
    verticalbuttons: true
  });

  /** with postfix */
  $('input[name="bs-touchspin-postfix"]').TouchSpin({
    min: 0,
    max: 100,
    step: 0.1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%'
  });

  /** with prefix */
  $('input[name="bs-touchspin-prefix"]').TouchSpin({
    min: 0,
    max: 100,
    step: 0.1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10,
    prefix: '$'
  });

}));