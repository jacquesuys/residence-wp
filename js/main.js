$(document).ready(function(){
  var regex = {
    title: /(Mr?s?)/i,
    email: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
    word: /[a-z]/i,
    tel: /\d{3}[-.\s]?\d{3}[-.\s]?\d{4}/,
    date: /\d{2}[-\/]\d{2}[-\/]\d{4}[\s]\d{2}:\d{2}[\s][a|p]m/i,
    number: /[0-9]/g,
    isText: function(val) {
      return this.word.test(val);
    },
    isEmail: function(val) {
      return this.email.test(val);
    },
    isTel: function(val) {
      return this.tel.test(val);
    },
    isDate: function(val) {
      return this.date.test(val);
    },
    isTitle: function(val) {
      return this.title.test(val);
    },
    isNumber: function(val) {
      return this.number.test(val);
    }
  };

  var validate = function() {
    var isValid = true;

    $('.error').text('');

    var firstname = $('[name="name"]');
    if ( !regex.isText( firstname.val() ) ) {
      firstname.parent().find('.error').text('Firstname Please');
      isValid = false;
    }

    var surname = $('[name="surname"]');
    if ( !regex.isText( surname.val() ) ) {
      surname.parent().find('.error').text('Surname Please');
      isValid = false;
    }

    var email = $('[name="email"]');
    if ( !regex.isEmail( email.val() ) ) {
      email.parent().find('.error').text('Valid Email Please');
      isValid = false;
    }

    var tel = $('[name="tel"]');
    if ( !regex.isTel( tel.val() ) ) {
      tel.parent().find('.error').text('Valid Telephone Number Please');
      isValid = false;
    }

    return isValid;
  }

  $('form').on('submit', function(e) {
    // We intercept the data, 
    // perform our own regex validation due to date selectors
    e.preventDefault();
    var url = $(this).attr('action');
    var data = $(this).serialize();

    if ( validate() ) {
      $.ajax({
        type: "POST",
        url: url,
        data: data,
        dataType: "JSON",
        success: function() {
          console.log(data);
        },
        error: function(error) {
          console.log(data);
        }
      });
      $(this).removeClass('errors');
    } else {
      $(this).addClass('errors');
    }
  });

  // make all the tiles uniform height
  var tiles = function() {
    $('.tiles').each(function(){
      var arr = [];
      var tile = $(this).find('.tile');

      tile.each(function(){
        arr.push($(this).innerHeight());
      });

      var height = arr.reduce(function(prev, next){
        return prev > next ? prev : next;
      });

      tile.each(function() {
        $(this).css('height', height + 'px');
      });
    });
  }

  tiles();

  $(window).on('resize', tiles);

  // Hover tiles for homepage
  $('.hover-tile').on({
    mouseenter: function() {
      $(this).toggleClass('active');
    },
    mouseleave: function() {
      $(this).toggleClass('active');
    }
  });
});